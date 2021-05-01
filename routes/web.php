<?php

use Illuminate\Support\Facades\Route;

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

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/news/{slug}', [App\Http\Controllers\NewsController::class, 'show']);
Route::get('/news/', [App\Http\Controllers\NewsController::class, 'index'])->name('news');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'frontpage'])->name('frontpage');
Route::get('/about', function () {
    return view('about');
});
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



Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/documents', [App\Http\Controllers\DashboardController::class, 'documents'])->name('documents');
Route::get('/dashboard/surveys', [App\Http\Controllers\DashboardController::class, 'surveys'])->name('surveys');
Route::get('/dashboard/surveys/{slug}', [App\Http\Controllers\DashboardController::class, 'survey']);
Route::get('/dashboard/profile', [App\Http\Controllers\DashboardController::class, 'profile'])->name('profile');
Route::post('/dashboard/profile', [App\Http\Controllers\DashboardController::class, 'saveProfile']);
