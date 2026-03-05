<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/',           [PortfolioController::class, 'biodata'])->name('biodata');
Route::get('/education',  [PortfolioController::class, 'education'])->name('education');
Route::get('/projects',   [PortfolioController::class, 'projects'])->name('projects');
