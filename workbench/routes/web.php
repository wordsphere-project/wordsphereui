<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('components')->group(function () {
    Route::get('/buttons', function () {
        return view('workbench::components.buttons');
    });
});

Route::get('wordsphere.css', function () {
    $contents = file_get_contents(filename: __DIR__.'/../../dist/style.css');

    return response()->file(file: __DIR__.'/../../dist/style.css', headers: ['Content-Type' => 'text/css']);
})->name('wordsphereui.assets.styles');
