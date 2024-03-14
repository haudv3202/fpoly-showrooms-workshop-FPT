<?php

use App\Http\Controllers\Admin\AdminBannerController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\domainController;
use App\Http\Controllers\Admin\levelsController;
use App\Http\Controllers\Admin\technicalsController;
use App\Http\Controllers\Client\OurTeamController;
use App\Http\Controllers\Client\projectsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\HomeController;
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

Route::get('/',[HomeController::class,'index'])->name('/');
Route::get('/single',[HomeController::class,'single']);
Route::get('/ourteam',[OurTeamController::class,'index']);
Route::get('/teamSingle',[OurTeamController::class,'single']);
Route::get('/projects',[projectsController::class,'index']);

Route::prefix('admin')->group(function(){
    Route::get('/',[AdminHomeController::class,'index'])->name('admin.home');
    Route::prefix('banner')->group(function(){
        Route::get('/',[AdminBannerController::class,'index'])->name('admin.banner.index');
        Route::get('/create',[AdminBannerController::class,'create'])->name('admin.banner.create');
        Route::post('/create',[AdminBannerController::class,'store'])->name('admin.banner.store');
        Route::get('/edit/{id}',[AdminBannerController::class,'edit'])->name('admin.banner.edit');
        Route::post('/edit',[AdminBannerController::class,'update'])->name('admin.banner.update');
        Route::get('/delete/{ids}',[AdminBannerController::class,'delete'])->name('admin.banner.delete');
        Route::post('search',[AdminBannerController::class,'search'])->name('admin.banner.search');
    });
    Route::prefix('technicals')->group(function(){
        Route::get('/',[technicalsController::class,'index'])->name('admin.technicals.index');
        Route::get('/create',[technicalsController::class,'create'])->name('admin.technicals.create');
        Route::post('/create',[technicalsController::class,'store'])->name('admin.technicals.store');
        Route::get('/edit/{id}',[technicalsController::class,'edit'])->name('admin.technicals.edit');
        Route::post('/edit',[technicalsController::class,'update'])->name('admin.technicals.update');
        Route::get('/delete/{ids}',[technicalsController::class,'delete'])->name('admin.technicals.delete');
        Route::post('search',[technicalsController::class,'search'])->name('admin.technicals.search');
    });
    Route::prefix('domain')->group(function(){
        Route::get('/',[domainController::class,'index'])->name('admin.domain.index');
        Route::get('/create',[domainController::class,'create'])->name('admin.domain.create');
        Route::post('/create',[domainController::class,'store'])->name('admin.domain.store');
        Route::get('/edit/{id}',[domainController::class,'edit'])->name('admin.domain.edit');
        Route::post('/edit',[domainController::class,'update'])->name('admin.domain.update');
        Route::get('/delete/{ids}',[domainController::class,'delete'])->name('admin.domain.delete');
        Route::post('search',[domainController::class,'search'])->name('admin.domain.search');
    });

    Route::prefix('levels')->group(function(){
        Route::get('/',[levelsController::class,'index'])->name('admin.levels.index');
        Route::get('/create',[levelsController::class,'create'])->name('admin.levels.create');
        Route::post('/create',[levelsController::class,'store'])->name('admin.levels.store');
        Route::get('/edit/{id}',[levelsController::class,'edit'])->name('admin.levels.edit');
        Route::post('/edit',[levelsController::class,'update'])->name('admin.levels.update');
        Route::get('/delete/{ids}',[levelsController::class,'delete'])->name('admin.levels.delete');
        Route::post('search',[levelsController::class,'search'])->name('admin.levels.search');
    });


});
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
