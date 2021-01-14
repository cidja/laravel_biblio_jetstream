<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NovelsController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/adminer', function(){
  return view('pages.frontend.adminer-4.7.8');
})->name('adminer'); //to manage bdd

Route::get('/', function () {
    return view('pages.home');
})->name('home'); //homepage

Route::get('/register', function() {
  return view('pages.frontend.register');
})->name('register'); //if you want to register

Route::get('/login', function() {
  return view('pages.frontend.login');
})->name('login'); // if you want login


Route::get('/welcome',[NovelsController::class, "index"])->name('welcome');
//link video to display data https://www.youtube.com/watch?v=y3p10h_00A8&ab_channel=phpstepbystep

Route::get('/list',[NovelsController::class, 'list'])->name('list');

Route::get("/singleNovel/{id}", [NovelsController::class, "onlyOne"])->name('singleNovel');

Route::get("/updateNovel/{id}", [NovelsController::class, "infoUpdate"])->name("infoUpdate");

Route::post("", [NovelsController::class, 'confirmUpdate'])->name('confirmUpdate');

Route::get("/delete/{id}", [NovelsController::class, "deleteview"])->name('deleteview');

Route::post("deleteConfirm/{id}", [NovelsController::class, "deleteConfirm"])->name('deleteConfirm');

Route::get('/statistics', [NovelsController::class, 'statistics'])->name('statistics');// to display some statistics about your read


//to display form add novel
Route::get('/addNovel', function(){ 
  return view('pages.frontend.addNovel');
})->name('addNovel'); // to add novel

//to use method store
Route::post('/addNovel', [NovelsController::class , 'store'])->name('addNovel');

//to find a novel
Route::post('research', [NovelsController::class, 'search'])->name('search');


Route::get('/account', function(){
  return view('pages.frontend.account');
})->name('account'); // to manage your account

