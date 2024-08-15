<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
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

Route::get('/index', function () {
    return view('index');
});
Route::get('/booking', function () {
    return view('booking');
});
Route::get('/extra', function () {
    return view('extra');
});
Route::get('display',[MemberController::class,'display']);
    Route::get('/signup', function () {
        return view('signup');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/mypage', function () {
    return view('mypage');
});
Route::get('adminview', [MemberController::class,'adminview'])->name('adminview');
Route::post('login_user', [MemberController::class,'loginUser'])->name('login_user');
Route::post('add', [MemberController::class,'store'])->name('add');
Route::post('addmem', [MemberController::class,'storemem'])->name('addmem');
Route::get('membdetails',[MemberController::class,'membdetails'])->name('membdetails');
Route::get('delete/{id}',[MemberController::class,'delete']);
Route::get('edit/{id}',[MemberController::class,'showdata']);
Route::post('edit',[MemberController::class,'update']);