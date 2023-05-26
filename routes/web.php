<?php

use App\Http\Controllers\dashboard\SettingController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Route::prefix('dashboard')->as('dashboard.')->middleware(['auth'])->group(function(){
    Route::view('/', 'dashboard.index');
    Route::resource('/setting', SettingController::class);
});

require __DIR__.'/auth.php';



