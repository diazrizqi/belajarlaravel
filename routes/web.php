<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function () {
    return 'ini laravel saya';
});

Route::get('tampil/{nilai}', function ($nilai) {
    return 'nilai saya adalah '. $nilai;
});

Route::get('penjumlahan/{nilai1}/{nilai2}', function ($nilai1,$nilai2) {
    return 'hasil penjumlahan adalah '. $nilai1 + $nilai2;
});

Route::get('pengurangan/{nilai1}/{nilai2}', function ($nilai1,$nilai2) {
    return 'hasil pengurangan adalah '. $nilai1 - $nilai2;
});

Route::get('perkalian/{nilai1}/{nilai2}', function ($nilai1,$nilai2) {
    return 'hasil perkalian adalah '. $nilai1 * $nilai2;
});

Route::get('pembagian/{nilai1}/{nilai2}', function ($nilai1,$nilai2) {
    return 'hasil pembagian adalah '. $nilai1 / $nilai2;
});

Route::match(['get', 'post'], '/user/profile', function () {
    return 'match';
});

Route::get('pagecontroller', [PageController::class, 'index']);
Route::get('pagecontrollerrequest', [PageController::class, 'request']);

Route::get('request', [PageController::class, 'requestdata'] );

Route::get('pagecontrollerarray', [PageController::class, 'array']); //Tugas Pertama
// Route::get('users/{id}', function ($id) {});
// Route::post('users/{id}', function ($id) {});

// Route::put('users/{id}', function ($id) {});
// Route::delete('users/{id}', function ($id) {});

Route::get('coba', function () {
    return view('test');
});

Route::get('table', function () {
    $data = ['meja','kursi'];
    return view('table', compact('data'));
});

Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
});

Route::get('index', function () {
    return view('index');
});

Route::resource('siswa', SiswaController::class)->middleware(['auth','admin']);
Route::resource('post', PostController::class);
Route::resource('comment', CommentController::class);
Route::resource('user', UserController::class);
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
