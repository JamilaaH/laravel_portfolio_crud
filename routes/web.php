<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\FactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SkillController;
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

//front
Route::get('/', [HomeController::class, "index"])->name('home');

//dashboard admin
Route::get('/admin', [HomeController::class, "admin"])->name('admin.index');

//about
    //create
Route::get('/admin/about/create', [AboutController::class, "create"])->name('about.create');
Route::post('/admin/about/store', [AboutController::class, "store"])->name('about.store');

    //delete
Route::delete('/admin/about/{id}/delete',[AboutController::class, "destroy"])->name('about.destroy');

    //edit - update
Route::get('/admin/about/{id}/edit', [AboutController::class, 'edit'])->name('about.edit');
Route::put('/admin/about/{id}/update', [AboutController::class, 'update'])->name('about.update');

    //show
Route::get('/admin/about/{id}', [AboutController::class, "show"])->name('about.show');

//fact
    //create
Route::get('/admin/fact/create', [FactController::class, "create"])->name('fact.create');
Route::post('/admin/fact/store', [FactController::class, "store"])->name('fact.store');

    //delete
Route::delete('/admin/fact/{id}/delete',[FactController::class, "destroy"])->name('fact.destroy');

    //edit - update
Route::get('/admin/fact/{id}/edit', [FactController::class, 'edit'])->name('fact.edit');
Route::put('/admin/fact/{id}/update', [FactController::class, 'update'])->name('fact.update');

    //show
Route::get('/admin/fact/{id}', [FactController::class, "show"])->name('fact.show');


//skill
    //create
    Route::get('/admin/skill/create', [SkillController::class, "create"])->name('skill.create');
    Route::post('/admin/skill/store', [SkillController::class, "store"])->name('skill.store');
    
        //delete
    Route::delete('/admin/skill/{id}/delete',[SkillController::class, "destroy"])->name('skill.destroy');
    
        //edit - update
    Route::get('/admin/skill/{id}/edit', [SkillController::class, 'edit'])->name('skill.edit');
    Route::put('/admin/skill/{id}/update', [SkillController::class, 'update'])->name('skill.update');
    
        //show
    Route::get('/admin/skill/{id}', [SkillController::class, "show"])->name('skill.show');
    

//portfolio
    //create
Route::get('/admin/portfolio/create', [PortfolioController::class, "create"])->name('portfolio.create');
Route::post('/admin/portfolio/store', [PortfolioController::class, "store"])->name('portfolio.store');

    //delete
Route::delete('/admin/portfolio/{id}/delete',[PortfolioController::class, "destroy"])->name('portfolio.destroy');

    //edit - update
Route::get('/admin/portfolio/{id}/edit', [PortfolioController::class, 'edit'])->name('portfolio.edit');
Route::put('/admin/portfolio/{id}/update', [PortfolioController::class, 'update'])->name('portfolio.update');

    //show
Route::get('/admin/portfolio/{id}', [PortfolioController::class, "show"])->name('portfolio.show');