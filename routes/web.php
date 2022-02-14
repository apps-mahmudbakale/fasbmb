<?php

use App\Http\Controllers\ConstitutionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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
})->name('welcome');

Route::get('/executive-committee', function () {
    return view('executives');
})->name('executives');

Route::get('/funding-oppurtunities', function () {
    return view('oppurtunities');
})->name('oppurtunities');

Route::get('constitution/', [App\Http\Controllers\ConstitutionController::class, 'view'])->name('constitution.view');
Route::get('constitution/{slug}', [App\Http\Controllers\ConstitutionController::class, 'viewChapter'])->name('constitution.view.chapter');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function ()
{
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::get('changePassword', [UserController::class, 'changepasswordForm'])->name('password.change');
    Route::post('changepassword', [UserController::class, 'changepassword'])->name('change.password');
    Route::resource('constitution', ConstitutionController::class);


});
