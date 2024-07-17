<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;


Route::controller(InfoController::class)->group(
    function(){
        Route::get('/','pgShow')->name('home');
        Route::get('/delete/{id?}','infoDelete')->name('delete');

        Route::get('/add','pgAdd')->name('add');
        Route::post('/insert','infoAdd')->name('insert');

        Route::get('/edit/{id?}','pgEdit')->name('edit');
        Route::post('/update','infoUpdate')->name('update');
    }
);
