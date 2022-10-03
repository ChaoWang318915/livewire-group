<?php

use Illuminate\Support\Facades\Route;

Route::get('logout',function(){
    auth()->logout();

    if(!auth()->check())
        return redirect()->route("login");
    
})->name('logout');

Route::group(['middleware'=> ['UserAuth'], "namespace" => "App\Http\Livewire\User", "as" => "user."], function () {

    Route::get('dashboard',"Dashboard\Home")->name('dashboard');

});
