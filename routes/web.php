<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ViewerController;
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

Route::get('/',[ViewerController::class,'index']);


Route::get('articles',[ViewerController::class,'aritcles']); 
Route::post('articles',[ViewerController::class,'aritcles']); 
Route::get('news',[ViewerController::class,'news']);
Route::post('news',[ViewerController::class,'news']);
Route::get('contents',[ViewerController::class,'contents']);
Route::get('contents/{slag}',[ViewerController::class,'contents']); 
Route::get('contact',[ViewerController::class,'contact']);  
Route::post('contact',[ViewerController::class,'contact']); 
Route::get('about', function () {
    return view('about');
   
});


Route::get('signup', function () {
    return view('auth.sign-up');
   
})->middleware('auth');

Route::get('login', function () {
    return view('auth.sign-in');
   
})->name('login');

Route::get('signout',[LogoutController::class,'index']); 
Route::post('login',[LoginController::class,'save']); 
Route::post('signup',[SignupController::class,'save']);
Route::get('admin',[AdminController::class,'index'])->middleware('auth'); 
Route::get('admin/{type}',[AdminController::class,'posts'])->middleware('auth'); 
Route::post('admin/{type}',[AdminController::class,'posts'])->middleware('auth'); 
Route::get('admin/{type}/{id}',[AdminController::class,'posts'])->middleware('auth'); 
Route::post('admin/{type}/{id}',[AdminController::class,'posts'])->middleware('auth'); 
///i would change the configuration
// Route::get('admin/posts',[AdminController::class,'posts'])->middleware('auth'); 
// Route::get('admin/posts/{type}',[AdminController::class,'posts'])->middleware('auth'); 
// Route::post('admin/posts/{type}',[AdminController::class,'posts'])->middleware('auth');
// Route::get('admin/posts/{type}/{id}',[AdminController::class,'posts'])->middleware('auth'); 
// Route::post('admin/posts/{type}/{id}',[AdminController::class,'posts'])->middleware('auth');
// Route::get('admin/category',[AdminController::class,'categories'])->middleware('auth');     
// Route::get('admin/category/{type}',[AdminController::class,'categories'])->middleware('auth'); 
// Route::post('admin/category/{type}',[AdminController::class,'categories'])->middleware('auth');
// Route::get('admin/category/{type}/{id}',[AdminController::class,'categories'])->middleware('auth'); 
// Route::post('admin/category/{type}/{id}',[AdminController::class,'categories'])->middleware('auth');
///it would be ending here

Route::get('users-admin',[AdminController::class,'users'])->middleware('auth'); 
Route::get('users-admin/{type}',[AdminController::class,'users'])->middleware('auth'); 
Route::get('users-admin/{type}/{id}',[AdminController::class,'users'])->middleware('auth'); 
Route::post('users-admin/{type}/{id}',[AdminController::class,'users'])->middleware('auth'); 



