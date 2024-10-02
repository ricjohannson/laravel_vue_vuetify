<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/{pathMatch}', function () {
    return view('welcome');
})->where('pathMatch',".*");

