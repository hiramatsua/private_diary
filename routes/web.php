<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/diary', function () {
    return view('home');
})->name('diary');

Route::get('/diary-list', [App\Http\Controllers\DiaryController::class, 'index'])
        ->name('diary.list');
Route::get('/diary-create', [App\Http\Controllers\DiaryController::class, 'showCreateForm'])
        ->name('diary.create');
Route::post('/diary-create', [App\Http\Controllers\DiaryController::class, 'create']);
Route::get('/diary-detail/{id}', [App\Http\Controllers\DiaryController::class, 'detail'])
        ->name('diary.detail');
/* ログアウト処理 */
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'loggedOut'])
    ->name('logout');
