<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Controllers\WelcomeController::class);

Route::resource('/contact', \App\Http\Controllers\ContactController::class);

Route::resource('admissions', \App\Http\Controllers\AdmissionsController::class)->only('index', 'store');

Route::resource('formations', \App\Http\Controllers\FormationController::class)->only('index');
Route::get('formations/{filiere}', [\App\Http\Controllers\FormationController::class, 'show'])->name('formations.show');


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/admissions', [\App\Http\Controllers\DashboardController::class, 'admissions'])->name('dashboard.admissions');
    Route::get('/dashboard/admission/{admission}', [\App\Http\Controllers\DashboardController::class, 'admissionShow'])->name('dashboard.admission.show');
    Route::get('/dashboard/messages', [\App\Http\Controllers\DashboardController::class, 'messages'])->name('dashboard.messages');
    Route::get('/dashboard/message/{message}', [\App\Http\Controllers\DashboardController::class, 'messageShow'])->name('dashboard.message.show');


    Route::resource('parcours', \App\Http\Controllers\ParcourController::class)->except(['update', 'store', 'destroy']);
    Route::post('parcours/{parcour}/update', [\App\Http\Controllers\ParcourController::class, 'update'])->name('parcours.update');
    Route::get('parcours/{parcour}/delete', [\App\Http\Controllers\ParcourController::class, 'destroy'])->name('parcours.destroy');
    Route::post('parcours/store', [\App\Http\Controllers\ParcourController::class, 'store'])->name('parcours.store');


    Route::resource('filieres', \App\Http\Controllers\FiliereController::class)->except(['update', 'store', 'destroy']);
    Route::post('filieres/store', [\App\Http\Controllers\FiliereController::class, 'store'])->name('filieres.store');
    Route::post('filieres/{filiere}/update', [\App\Http\Controllers\FiliereController::class, 'update'])->name('filieres.update');
    Route::get('filieres/{filiere}/delete', [\App\Http\Controllers\FiliereController::class, 'destroy'])->name('filieres.destroy');
});

require __DIR__.'/auth.php';
