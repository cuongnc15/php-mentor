<?php

use App\Http\Controllers\ProfileController;

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

// Trong routes/web.php


Route::get('/', [ProfileController::class, 'searchMentor']);


Route::get('/detail', function () {
    return view('detail');
});

Route::get('/profile/{id}', function ($id) {
    return view('profile-index', ['id' => $id]);
})->name('profile.detail');

Route::get('/evaluate', function () {
    return view('profile-evaluate');
});

Route::get('/program', function () {
    return view('profile-program');
});

Route::get('/mentee', function () {
    return view('profile-mentee');
});
Route::get('/edit', function() {
    return view('profile-edit');
});
Route::get('/edit-password', function () {
    return view('profile-edit-password');
});
Route::get('/course/create', function() {
    return view('course-create');
});
Route::get('/course/create/success', function() {
    return view('course-success');
});
Route::get('/store', function () {
    return view('profile-store');
});
Route::get('/skill', function () {
    return view('skill');
});
Route::get('/mentor-cung-nganh', function () {
    return view('mentor-cung-nganh');
});


