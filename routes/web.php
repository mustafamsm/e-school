<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\Dashboard\dashboardcontroller;
use App\Http\Controllers\Dashboard\CategoriesController;

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
Route::group([
'prefix'=> '/user',
'as'=>'user.',
'namespace'=>'user'
], function () {
Route::get('/',[UserController::class,'index'])->name('index');
Route::get('/home',[UserController::class,'index2'])->name('home');
Route::get('/homee',[UserController::class,'index3']) ->name('index3');
Route::get('/Aboutus',[UserController::class,'aboutus']) ->name('aboutus');
Route::get('/ads',[UserController::class,'ads'])  ->name('ads');
Route::get('/Videos',[UserController::class,'Videos'])->name('Videos');
Route::get('/Homeworks',[UserController::class,'Homeworks'])->name('Homeworks');
Route::get('/Courses',[UserController::class,'Courses'])->name('Courses');
Route::get('/Courses-table',[UserController::class,'Coursestable'])->name('Coursestable');
Route::get('/Courses-table-time',[UserController::class,'Coursestabletime'])->name('Coursestabletime');
Route::get('/live',[UserController::class,'live'])->name('live');
Route::get('/resources',[UserController::class,'resources'])->name('resources');
Route::get('/search',[UserController::class,'search'])->name('search');
Route::get('/search-result',[UserController::class,'searchresult'])->name('searchresult');
Route::get('/table-details',[UserController::class,'tabledetails'])->name('tabledetails');
Route::get('/table-time',[UserController::class,'tabletime'])->name('tabletime');
});

Route::group([
    'prefix'=> '/dashboard',
    'as'=>'dashboard.',
    'namespace'=>'Dahboard'
    
    ], function () {
            //CRUD: CREATE, READ,UPDATE, DELETE.
        Route::get('/',[dashboardController::class,'page']);
    Route::prefix('/categories')->as('categories.')->group(function() {
        Route::get('/',[CategoriesController::class,'index'])
        ->name('index');
        Route::get('/create',[CategoriesController::class,'create'])
        ->name('create');
        Route::post('/',[CategoriesController::class,'store'])
        ->name('store');
        Route::get('/{id}/edit',[CategoriesController::class,'edit'])
        ->name('edit');
        Route::put('/{id}',[CategoriesController::class,'update'])
        ->name('update');
        Route::delete('/{id}',[CategoriesController::class,'destroy'])
        ->name('destroy');
    });
    
    });



Route::group([
'prefix'=> '/Login',
'as'=>'Login.',
'namespace'=>'Login'
], function () {
Route::get('/',[UserController::class,'Login'])->name('Login');

Route::get('/reset-pass',[UserController::class,'resetpass'])->name('resetpass');

});


Route::group([
'prefix'=> '/register',
'as'=>'register.',
'namespace'=>'register'
], function () {
Route::get('/',[UserController::class,'register'])->name('register');

Route::get('/agree',[UserController::class,'agree'])->name('agree');

Route::get('/refuse',[UserController::class,'refuse'])->name('refuse');
});














