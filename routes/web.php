<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\LabController;
use App\Http\Controllers\Frontend\UserController;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
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
Route::get('category', [FrontendController::class, 'category']);
Route::get('view-category/{name}', [FrontendController::class, 'viewcategory']);
Route::get('category/{cate_name}/{doc_name}', [FrontendController::class, 'viewdoctor']);

Route::get('labs', [FrontendController::class, 'labs']);
Route::get('view-lab/{id}', [FrontendController::class, 'viewlab']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// For Admin
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

    Route::get('lab', [LabController::class, 'index']);
    Route::get('add-lab', [LabController::class, 'add']);
    Route::post('insert-lab', [LabController::class, 'insert']);

    Route::get('edit-lab/{id}', [LabController::class, 'edit']);
    Route::put('update-lab/{id}', [LabController::class, 'update']);
    Route::get('delete-lab/{id}', [LabController::class, 'drop']);

    Route::get('users', [DashboardController::class, 'users']);
    Route::get('view-user/{id}', [DashboardController::class, 'viewuser']);

    Route::middleware('auth')->group(function () {

        Route::get('/users/status/{user_id}/{status_code}', [DashboardController::class, 'updateStatus'])->name('users.status.update');

    });

});
///status/{user_id}/{status_code}
