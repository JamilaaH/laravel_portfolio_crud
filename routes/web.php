<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Models\About;
use App\Models\Fact;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Skill;
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