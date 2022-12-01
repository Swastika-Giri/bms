<?php

use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';
//front end route
Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/blog', function () {
    return view('blog');
})->name('blog');
Route::get('/contactus', function () {
    return view('contactus');
})->name('contactus');
Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');
//front end route
//Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('home');

//backend route.
Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    //for media manager
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
    Route::post('/admin/page_manager/updateStatus', [App\Http\Controllers\PageManagerController::class, 'updateStatus'])->name('admin.page_manager.active');
//for blog
    Route::get('/admin/blog/create', [App\Http\Controllers\BlogController::class, 'create'])->name('admin.blog.create');
    Route::get('/admin/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('admin.blog.index');
    Route::post('/admin/blog/store', [App\Http\Controllers\BlogController::class, 'store'])->name('admin.blog.store');
    Route::delete('/admin/blog/{id}', [App\Http\Controllers\BlogController::class, 'destroy'])->name('admin.blog.destroy');
    Route::get('/admin/blog/edit/{id}', [App\Http\Controllers\BlogController::class, 'edit'])->name('admin.blog.edit');
    Route::put('/admin/blog/update/{id}', [App\Http\Controllers\BlogController::class, 'update'])->name('admin.blog.update');
    Route::get('/admin/blog/{id}', [App\Http\Controllers\BlogController::class, 'show'])->name('admin.blog.show');
    Route::post('/admin/blog/updateStatus', [App\Http\Controllers\BlogController::class, 'updateStatus'])->name('admin.blog.active');

});
