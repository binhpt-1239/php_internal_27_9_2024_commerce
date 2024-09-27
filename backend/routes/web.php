<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Middleware\Localization;
Route::get('/', function () {
    return view('welcome');
});


Route::get('language/{lang}', [LanguageController::class, 'changeLanguage'])->middleware(Localization::class);
