<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use App\Models\User;
use App\Rules\Phone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     * Посредник для доступа к ЛК для авторизованных
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Главная страница личного кабинета.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Страница редактирования профиля
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function profile()
    {
        return view('profile');
    }

    /**
     * Список документов
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function documents()
    {
        return view('documents');
    }

    /**
     * Список анкет
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function surveys()
    {
        $id = Auth::user()->id;
        $oUser = User::findOrFail($id);
        $aUsersSurveys = $oUser->surveys()->where('result_id', '>', 0)->get();
        $aUsersSurveysId = array_column($aUsersSurveys->toArray(), 'id');
        $surveys = Survey::query()->whereKeyNot($aUsersSurveysId)->get();
        return view('surveys', compact('surveys', 'aUsersSurveys'));
    }


    /**
     * Деталка анкет
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function survey($slug)
    {
        $survey = Survey::where('slug', $slug)->firstOrFail();
        $sUrlParams = http_build_query([
            'user_id' => Auth::user()->id,
            'user_role' => Auth::user()->role->name,
        ]);
        return view('survey', compact('survey', 'sUrlParams'));
    }

    /**
     * Результат анкеты
     * @param null $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function surveyResult($slug = null)
    {
        if ($slug) {
            $id = Auth::user()->id;
            $oUser = User::findOrFail($id);
            $oSurvey = $oUser->surveys()->where('slug', $slug)->firstOrFail();
            $aUsersSurveys = $oUser->surveys()->where('result_id', '>', 0)->get();
            $aUsersSurveysId = array_column($aUsersSurveys->toArray(), 'id');
            $aUnresolvedSurveys = Survey::query()->whereKeyNot($aUsersSurveysId)->inRandomOrder()->limit(3)->get();
            $result = Auth::user()->role->name == 'respondent' ? false : $oSurvey->pivot->result_id;
            return view('surveyResult', compact('oSurvey', 'result', 'aUnresolvedSurveys'));
        } else {
            $iId = Auth::user()->id;
            $oUser = User::findOrFail($iId);
            $oSurvey = $oUser->surveys()->orderByDesc('created_at')->firstOrFail();
            return redirect(route('surveyResult', ['slug' => $oSurvey->slug]));
        }
    }

    /**
     * POST для сохранения профиля
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function saveProfile(Request $request)
    {
        $aValidate = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'last_name' => 'required',
            'phone' => ['required', 'string',  new Phone],
            'weight' => 'required|numeric|min:0',
            'height' => 'required|numeric|min:0',
            'age' => 'required|numeric|min:0',
            'sex' => 'required',
            'birthday' => 'required|date',
            'root' => 'required',
            'stay' => 'required|numeric',
        ]);
        try {
            $id = Auth::user()->id;
            $user = User::findOrFail($id);
            $user->update($aValidate);
            return response()->json([
                'success' => true,
                'message' => 'Данные успешно сохранены'
            ]);
        } catch (\Illuminate\Database\QueryException $exception) {
            return response()->json([
                'success' => false,
                'message' => $exception->getMessage()
            ]);
        }
    }

}
