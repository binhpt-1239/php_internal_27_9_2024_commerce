<?php
use App\Http\Controllers\ProductController;
use App\Http\Middleware\Localization;

Route::prefix("api")
    ->middleware([Localization::class])
    ->group(function () {
        Route::get("/products", [ProductController::class, "index"]);
    });
