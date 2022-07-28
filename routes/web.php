<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\index_page;
use App\Http\Controllers\login_page;
use App\Http\Controllers\register_page;
use App\Http\Controllers\profile_page;
use App\Http\Controllers\logout;

/*
|--------------------------------------------------------------------------
| Web Routes KSN
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [login_page::class, 'index'])->name('login');
Route::get('/index', [login_page::class, 'index'])->name('index');
Route::get('/login', [login_page::class, 'index'])->name('login');

Route::get('/profile', [login_page::class, 'index']);

Route::get('/register', [register_page::class, 'index'])->name('register');
Route::post('/register/add', [register_page::class, 'store'])->name('register_add');
Route::post('/register/eidt', [register_page::class, 'update_profile'])->name('register_update');
Route::post('/register/checkName', [register_page::class, 'register_checkName'])->name('register_checkName');
Route::post('/register/checkPass', [register_page::class, 'register_checkPassword'])->name('register_checkPassword');

Route::group(['middleware' => 'check'], function () {
    Route::post('/profile', [profile_page::class, 'index'])->name('profile');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout', [logout::class, 'perform'])->name('logout');
});
