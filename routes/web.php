<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;

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

//Home page
Route::get('/', function (){
return view('home');
})->name('home');

//Comics list
Route::resource('comics',ComicController::class);

//Comics detail
Route::get('/comic/{$id}',[ComicController::class, 'show']);

//Comics Modify
Route::get('/comic/{$id}/edit',[ComicController::class, 'edit']);


