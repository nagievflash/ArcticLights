<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Document;
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
        return view('dashboard.home');
    }

    /**
     * Страница редактирования профиля
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function profile()
    {
        return view('dashboard.profile');
    }

    /**
     * Список документов
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function documents()
    {
        $aDocuments = Document::all();
        foreach ($aDocuments as &$oDocument) {
            $sFilePath = asset('storage/' . current(json_decode($oDocument->url, true))['download_link']);
            $oDocument->url = $sFilePath;
            $oDocument->extension = pathinfo($sFilePath, PATHINFO_EXTENSION);
        }
        return view('dashboard.documents', compact('aDocuments'));
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
