<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/subcategory/{slug}', [SubcategoryController::class, 'show'])->name('subcategory.show');



// Route::fallback(function () {
//     return response()->view('404', [], 404);
// });
