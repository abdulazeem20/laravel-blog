<?php

use App\Http\Controllers;
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
    session()->put("logged_in", true);
    return view('welcome');
});

Route::get('/user', [Controllers\UserController::class, 'index']);

Route::get('/login', [Controllers\LoginController::class, 'index'])->middleware(["isLoggedIn"]);
Route::post('/login', [Controllers\LoginController::class, 'register']);

Route::get('/employee', [Controllers\LoginController::class, 'employee']);

Route::get('/logout', function () {
    session()->forget("logged_in");
    return redirect('login');
});

Route::middleware(["myGroup"])->group(function () {
    Route::get('/admin', function () {
        return view('admin');
    });
    Route::get('/profile', function () {
        return view('profile');
    });
});
