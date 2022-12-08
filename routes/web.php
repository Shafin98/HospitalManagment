<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Frontend\FrontendController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [FrontendController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', 'App\Http\Controllers\Admin\FrontendController@index');

    Route::get('categories', 'App\Http\Controllers\Admin\CategoryController@index');
    Route::get('add-category', 'App\Http\Controllers\Admin\CategoryController@add');
    Route::post('insert-category', 'App\Http\Controllers\Admin\CategoryController@insert');



    Route::get('edit-prod/{id}',[CategoryController::class ,'edit']);
    Route::put('update-category/{id}',[CategoryController::class ,'update']);
    Route::get('delete-category/{id}',[CategoryController::class ,'drop']);

    Route::get('doctor', [DoctorController::class, 'index']);
    Route::get('add-doctor', [DoctorController::class, 'add']);
    Route::post('insert-doctor', [DoctorController::class, 'insert']);

    Route::get('edit-doctor/{id}', [DoctorController::class, 'edit']);
    Route::put('update-doctor/{id}', [DoctorController::class, 'update']);
    Route::get('delete-doctor/{id}', [DoctorController::class, 'drop']);

});
