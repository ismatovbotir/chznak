<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MarkController;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\Admin\UserController;

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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::group(['as'=>'admin.'],function(){
    Route::get('/mark/import',[MarkController::class,'markImport']
    )->name('mark.import');
    Route::resource('/mark',MarkController::class);
    Route::resource('/item',ItemController::class);
    Route::resource('/user',UserController::class);
    
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



