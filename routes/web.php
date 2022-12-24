<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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


Route::get('/',[HomeController::class,"index"]);

Route::get('/user',[AdminController::class,"user"]);

Route::get('/foodmenu',[AdminController::class,"food"]);

Route::post('/foodupload',[AdminController::class,"foodupload"]);

Route::post('/foodupdate/{id}',[AdminController::class,"foodupdate"]);

// Route::post('/resrevation',[AdminController::class,"reserve"]);

Route::get('/viwereserve',[AdminController::class,"viewreserve"]);

Route::get('/deleteuser/{id}',[AdminController::class,"deleteuser"]);

Route::get('/deletefood/{id}',[AdminController::class,"deletefood"]);

Route::get('/updateview/{id}',[AdminController::class,"updateview"]);

Route::get('/redirects',[HomeController::class,"redirects"]);

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::post('/resrevation',[AdminController::class,"reserve"]);
    Route::get('/review',[UserController::class,"review"]);
    Route::get('/dashboard', function () {
            return view('dashboard');
    })->name('dashboard');
});