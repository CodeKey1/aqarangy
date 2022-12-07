<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');

});

Auth::routes();

/*
|--------------------------------------------------------------------------
| Home Dashboard Routes
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'auth'],function (){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])                 ->name('home');
    Route::get('/profile-{id}', [App\Http\Controllers\Users\UsersController::class, 'profile'])  ->name('profile');
    Route::get('/users', [App\Http\Controllers\Users\UsersController::class, 'index'])    ->name('all.users');
    Route::get('/add-users', [App\Http\Controllers\Users\UsersController::class, 'add'])->name('add.user');
    Route::get('/delete/{id}', [App\Http\Controllers\Users\UsersController::class, 'destroy'])->name('delete.user');

    Route::post('/adduser', [App\Http\Controllers\Users\UsersController::class, 'create'])->name('add.users');
});

/*
|--------------------------------------------------------------------------
| Advertising Dashboard Routes
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'auth'],function (){
    Route::get('/create-adv', [App\Http\Controllers\Adv\AdvController::class, 'index'])->name('create');
    Route::get('/single-adv{id}', [App\Http\Controllers\Adv\AdvController::class, 'single'])->name('single-adv');
    Route::post('/update-adv{id}', [App\Http\Controllers\Adv\AdvController::class, 'update'])->name('single-adv.update');
    Route::get('/edit{id}', [App\Http\Controllers\Adv\AdvController::class, 'edit'])->name('edit-adv');

    Route::post('/save-adv', [App\Http\Controllers\Adv\AdvController::class, 'save'])  ->name('adv.save');
    Route::get('/show-all-adv', [App\Http\Controllers\Adv\AdvController::class, 'all'])->name('adv-all');

});


