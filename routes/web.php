<?php

use PhpParser\Node\Stmt\Return_;

Auth::routes(['verify' => true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home') -> middleware('verified');
Route::get('/', function (){
    Return 'Home Fatma ';
});


