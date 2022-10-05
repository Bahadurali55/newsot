<?php

use App\Http\Controllers\AuthController;
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
    return view('home');
});

Auth::routes();

Route::view('signin', 'auth.login');





Route::post('signin', [AuthController::class, 'signin'])->name('signin');
Route::group(['middleware' => ['role:admin']], function () {

    Route::view('admins', 'admins.index');
});
Route::group(['middleware' => ['role:student']], function () {
    Route::view('students', 'students.index');
});
Route::group(['middleware' => ['role:instructor']], function () {
    Route::view('instructors', 'instructors.index');
});