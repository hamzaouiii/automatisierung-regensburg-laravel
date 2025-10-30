<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', fn () => Inertia::render('Home'))->name('home');
Route::get('/impressum', fn () => Inertia::render('Impressum'))->name('impressum');
Route::get('/datenschutz', fn () => Inertia::render('Datenschutz'))->name('datenschutz');