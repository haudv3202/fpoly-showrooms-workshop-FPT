<?php

use App\Http\Controllers\Admin\AdminBannerController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\domainController;
use App\Http\Controllers\Admin\levelsController;
use App\Http\Controllers\Admin\memberController;
use App\Http\Controllers\Admin\settingsController;
use App\Http\Controllers\Admin\technicalsController;
use App\Http\Controllers\Client\OurTeamController;
use App\Http\Controllers\Admin\projectsController as AdminProjectsController;
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
Route::get('/single/{id}',[HomeController::class,'single'])->name('single');
Route::get('/ourteam',[OurTeamController::class,'index'])->name('ourteam');
Route::get('/teamSingle/{id}',[OurTeamController::class,'single'])->name('teamSingle');
Route::get('/projects',[projectsController::class,'index'])->name('projects');
Route::post('/search',[projectsController::class,'search'])->name('search');

Route::prefix('admin')->middleware('auth')->group(function(){
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
        Route::get('/sortDeleteRecord',[technicalsController::class,'sortDelete'])->name('admin.technicals.sortDeleteRecord');
        Route::get('/sortDeleteRecord/restore/{id}',[technicalsController::class,'restore'])->name('admin.technicals.restore');
        Route::get('/create',[technicalsController::class,'create'])->name('admin.technicals.create');
        Route::post('/create',[technicalsController::class,'store'])->name('admin.technicals.store');
        Route::get('/edit/{id}',[technicalsController::class,'edit'])->name('admin.technicals.edit');
        Route::post('/edit',[technicalsController::class,'update'])->name('admin.technicals.update');
        Route::get('/delete/{ids}',[technicalsController::class,'delete'])->name('admin.technicals.delete');
        Route::post('search',[technicalsController::class,'search'])->name('admin.technicals.search');
        Route::post('searchDelete',[technicalsController::class,'searchSortDelete'])->name('admin.technicals.searchDelete');
    });
    Route::prefix('domain')->group(function(){
        Route::get('/',[domainController::class,'index'])->name('admin.domain.index');
        Route::get('/sortDeleteRecord',[domainController::class,'sortDelete'])->name('admin.domain.sortDeleteRecord');
        Route::get('/sortDeleteRecord/restore/{id}',[domainController::class,'restore'])->name('admin.domain.restore');
        Route::get('/create',[domainController::class,'create'])->name('admin.domain.create');
        Route::post('/create',[domainController::class,'store'])->name('admin.domain.store');
        Route::get('/edit/{id}',[domainController::class,'edit'])->name('admin.domain.edit');
        Route::post('/edit',[domainController::class,'update'])->name('admin.domain.update');
        Route::get('/delete/{ids}',[domainController::class,'delete'])->name('admin.domain.delete');
        Route::post('searchDelete',[domainController::class,'searchSortDelete'])->name('admin.domain.searchDelete');
        Route::post('search',[domainController::class,'search'])->name('admin.domain.search');
    });

    Route::prefix('levels')->group(function(){
        Route::get('/',[levelsController::class,'index'])->name('admin.levels.index');
        Route::get('/sortDeleteRecord',[levelsController::class,'sortDelete'])->name('admin.levels.sortDeleteRecord');
        Route::get('/sortDeleteRecord/restore/{id}',[levelsController::class,'restore'])->name('levels.domain.restore');
        Route::get('/create',[levelsController::class,'create'])->name('admin.levels.create');
        Route::post('/create',[levelsController::class,'store'])->name('admin.levels.store');
        Route::get('/edit/{id}',[levelsController::class,'edit'])->name('admin.levels.edit');
        Route::post('/edit',[levelsController::class,'update'])->name('admin.levels.update');
        Route::get('/delete/{ids}',[levelsController::class,'delete'])->name('admin.levels.delete');
        Route::post('searchDelete',[levelsController::class,'searchSortDelete'])->name('admin.levels.searchDelete');
        Route::post('search',[levelsController::class,'search'])->name('admin.levels.search');
    });

    Route::prefix('projects')->group(function(){
        Route::get('/',[AdminProjectsController::class,'index'])->name('admin.projects.index');
        Route::get('/sortDeleteRecord',[AdminProjectsController::class,'sortDelete'])->name('admin.projects.sortDeleteRecord');
        Route::get('/sortDeleteRecord/restore/{id}',[AdminProjectsController::class,'restore'])->name('admin.projects.restore');
        Route::get('/create',[AdminProjectsController::class,'create'])->name('admin.projects.create');
        Route::post('/create',[AdminProjectsController::class,'store'])->name('admin.projects.store');
        Route::get('/edit/{id}',[AdminProjectsController::class,'edit'])->name('admin.projects.edit');
        Route::post('/edit',[AdminProjectsController::class,'update'])->name('admin.projects.update');
        Route::get('/delete/{ids}',[AdminProjectsController::class,'delete'])->name('admin.projects.delete');
        Route::post('search',[AdminProjectsController::class,'search'])->name('admin.projects.search');
        Route::post('searchDelete',[AdminProjectsController::class,'searchSortDelete'])->name('admin.projects.searchDelete');
    });

    Route::prefix('members')->group(function(){
        Route::get('/',[memberController::class,'index'])->name('admin.members.index');
        Route::get('/sortDeleteRecord',[memberController::class,'sortDelete'])->name('admin.members.sortDeleteRecord');
        Route::get('/sortDeleteRecord/restore/{id}',[memberController::class,'restore'])->name('admin.members.restore');
        Route::get('/create',[memberController::class,'create'])->name('admin.members.create');
        Route::post('/create',[memberController::class,'store'])->name('admin.members.store');
        Route::get('/edit/{id}',[memberController::class,'edit'])->name('admin.members.edit');
        Route::post('/edit',[memberController::class,'update'])->name('admin.members.update');
        Route::get('/delete/{ids}',[memberController::class,'delete'])->name('admin.members.delete');
        Route::post('search',[memberController::class,'search'])->name('admin.members.search');
        Route::post('searchDelete',[memberController::class,'searchSortDelete'])->name('admin.members.searchDelete');
    });


    Route::prefix('settings')->group(function(){
        Route::get('/',[settingsController::class,'index'])->name('admin.settings.index');
        Route::get('/edit/{id}',[settingsController::class,'edit'])->name('admin.settings.edit');
        Route::post('/edit',[settingsController::class,'update'])->name('admin.settings.update');
        Route::post('search',[settingsController::class,'search'])->name('admin.settings.search');
    });


});
Auth::routes(['register' => false,'reset' => false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');
