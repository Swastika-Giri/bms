<?php

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

//Route::get('/', function () {
  //return view('welcome');
//});
Route::get('', function () {
    return view('home');
});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/mediamanager/create', [App\Http\Controllers\MediaManagerController::class, 'create'])->name('admin.mediamanager.create');
Route::get('/admin/mediamanager', [App\Http\Controllers\MediaManagerController::class, 'index'])->name('admin.mediamanager.index');
Route::post('/admin/mediamanager/store', [App\Http\Controllers\MediaManagerController::class, 'store'])->name('admin.mediamanager.store');
Route::delete('/admin/mediamanager/{id}', [App\Http\Controllers\MediaManagerController::class, 'destroy'])->name('admin.mediamanager.destroy');

//for Page manager
Route::get('/admin/page_manager/create', [App\Http\Controllers\PageManagerController::class, 'create'])->name('admin.page_manager.create');
Route::get('/admin/page_manager', [App\Http\Controllers\PageManagerController::class, 'index'])->name('admin.page_manager.index');
Route::post('/admin/page_manager/store', [App\Http\Controllers\PageManagerController::class, 'store'])->name('admin.page_manager.store');
Route::get('/admin/page_manager/edit/{id}', [App\Http\Controllers\PageManagerController::class, 'edit'])->name('admin.page_manager.edit');
Route::put('/admin/page_manager/update/{id}', [App\Http\Controllers\PageManagerController::class, 'update'])->name('admin.page_manager.update');
Route::delete('/admin/page_manager/{id}', [App\Http\Controllers\PageManagerController::class, 'destroy'])->name('admin.page_manager.destroy');



