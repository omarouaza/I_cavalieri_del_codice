<?php

use App\Http\Controllers\AdminController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

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



Route::get('/',[PublicController::class,'homepage'])->name('homepage') ;


//PAGINE INGLESI//

Route::get('/homepageinglese', function () {
    return view('homepageinglese');
})->name('homepageinglese');

//PAGINE GIAPPONESI//

Route::get('/homepagegiapponese', function () {
    return view('homepagegiapponese');
})->name('homepagegiapponese');

Route::get('/careers' , [PublicController::class , 'careers'])->name('careers');

Route::post('/careers/submit' , [PublicController::class , 'careersSubmit'])->name('careers.submit');

Route::get('/article/search' , [ArticleController::class , 'articleSearch'])->name('article.search');

Route::get('/article/index' , [ArticleController::class, 'index'])->name('article.index');

Route::post('/article/store' , [ArticleController::class, 'store'])->name('article.store');

Route::get('/article/show/{article}' , [ArticleController::class, 'show'])->name('article.show');

Route::get('/article/category/{category}' , [ArticleController::class , 'byCategory' ])->name('article.byCategory');

Route::get('/articles/create' , [ArticleController::class , 'create'])->name('article.create');

Route::post('/article/store' , [ArticleController::class , 'store'])->name('article.store');

//ROTTE ADMIN//

Route::middleware('admin')->group(function(){

    Route::get('/admin/dashboard' , [AdminController::class , 'dashboard'])->name('admin.dashboard');

    Route::patch('/admin/{user}/set-admin' , [AdminController::class , 'setAdmin'])->name('admin.setAdmin');

    Route::patch('/admin/{user}/set-revisor' , [AdminController::class , 'setRevisor'])->name('admin.setRevisor');

    Route::patch('/admin/{user}/set-write' , [AdminController::class , 'setWriter'])->name('admin.setWriter');

    Route::put('/admin/edit/{tag}/tag' , [AdminController::class , 'editTag'])->name('admin.editTag');

    Route::put('/admin/delete/{tag}/tag' , [AdminController::class , 'deleteSTag'])->name('admin.deleteSTag');


});

