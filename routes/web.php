<?php

use Illuminate\Support\Facades\Route;




Route::group(['middleware'=> [], "namespace" => "App\Http\Livewire"], function () {

    Route::get('/',"Home\Home")->name('home');

    Route::get('login',"Auth\Login")->name('login')->middleware("UserAuth");

});
