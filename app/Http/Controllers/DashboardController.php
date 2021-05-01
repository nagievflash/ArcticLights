<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Post;
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
        $surveys = Survey::all();
        return view('surveys', compact('surveys'));
    }


    /**
     * Деталка анкет
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function survey($slug)
    {
        $survey = Survey::where('slug', $slug)->first();
        return view('survey', compact('survey'));
    }

    /**
     * POST для сохранения профиля
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function saveProfile(Request $request)
    {

        $id = Auth::user()->id;
        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->last_name = $request->input('last_name');
        $user->phone = $request->input('phone');
        $user->weight = $request->input('weight');
        $user->height = $request->input('height');
        $user->age = $request->input('age');
        $user->sex = $request->input('sex');
        $user->birthday = $request->input('birthday');
        $user->root = $request->input('root');
        $user->stay = $request->input('stay');
        $user->save();
        return redirect()->route('profile');
    }

}
