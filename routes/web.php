<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\SurveyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Route::get('/login', '\App\Http\Controllers\Auth\LoginController@login')->name('login');
Route::get('/register', '\App\Http\Controllers\Auth\LoginController@register')->name('register');

Route::get('/news/{slug}', [App\Http\Controllers\NewsController::class, 'show']);
Route::get('/news/', [App\Http\Controllers\NewsController::class, 'index'])->name('news');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'frontpage'])->name('frontpage');
Route::get('/about', [\App\Http\Controllers\HomeController::class, 'getEmployees'])->name('about');
Route::get('/press', function () {
    return view('press');
});
Route::get('/contacts', function () {
    return view('contacts');
});

/*Route::get('/test', function () {
    return view('test');
});*/

Route::get('/confident', function () {
    return view('confident');
});



Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/documents', [DashboardController::class, 'documents'])->name('documents');
Route::get('/dashboard/surveys', [SurveyController::class, 'index'])->name('surveys');
Route::get('/dashboard/surveys/result/{slug?}', [SurveyController::class, 'showResult'])->name('surveyResult');
Route::get('/dashboard/surveys/{slug}', [SurveyController::class, 'show'])->name('survey');
Route::get('/dashboard/profile', [DashboardController::class, 'profile'])->name('profile');
Route::post('/dashboard/profile', [DashboardController::class, 'saveProfile']);
