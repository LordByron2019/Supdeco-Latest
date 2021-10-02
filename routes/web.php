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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::resource('filieres', \App\Http\Controllers\FiliereController::class)->except(['update', 'store', 'destroy']);
Route::post('filieres/store', [\App\Http\Controllers\FiliereController::class, 'store'])->name('filieres.store');
Route::post('filieres/{filiere}/update', [\App\Http\Controllers\FiliereController::class, 'update'])->name('filieres.update');
Route::get('filieres/{filiere}/delete', [\App\Http\Controllers\FiliereController::class, 'destroy'])->name('filieres.destroy');


Route::resource('parcours', \App\Http\Controllers\ParcourController::class)->except(['update', 'store', 'destroy']);
Route::post('parcours/{parcour}/update', [\App\Http\Controllers\ParcourController::class, 'update'])->name('parcours.update');
Route::get('parcours/{parcour}/delete', [\App\Http\Controllers\ParcourController::class, 'destroy'])->name('parcours.destroy');
Route::post('parcours/store', [\App\Http\Controllers\ParcourController::class, 'store'])->name('parcours.store');

Route::get('/dashboard', \App\Http\Controllers\DashboardController::class)->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
