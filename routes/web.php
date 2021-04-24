<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\FactController;
use App\Http\Controllers\HomeController;
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