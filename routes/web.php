<?php

use App\Http\Controllers\KomikController;
use Illuminate\Support\Facades\Route;

Route::controller(KomikController::class)->group(function(){
    Route::get('/', 'index');
});
