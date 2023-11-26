<?php

use App\Http\Controllers\AdminController;
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

//Routes Admin
Route::get('admins',[AdminController::class,'index'])->name('admins.index');
Route::get('admins/create',[AdminController::class,'create'])->name('admins.create');
Route::post('admins',[AdminController::class,'store'])->name('admins.store');
Route::get('admins/{id}/edit',[AdminController::class,'edit'])->name('admins.edit');
Route::put('admins/{id}',[AdminController::class,'update'])->name('admins.update');
Route::delete('admins/{id}',[AdminController::class,'destroy'])->name('admins.destroy');


//Routes Dashboard
Route::get('dashboard',function(){
    $title = "Dashboard";
    return view ('Dashboard.dashboard',compact('title'));
})->name('Dashboard.dashboard');

Route::get('/', function () {
    return view('Dashboard.dashboard');
});
