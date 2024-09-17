<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $products = [
        ["name" => "апельсин", "cost" => 50000000, "amount" => 27],
        ["name" => "банан", "cost" => 120000000, "amount" => 17],
        ["name" => "персик", "cost" => 70000000, "amount" => 0],
    ];
    return view('kata', ['products' => $products]);
});

Route::get('/welcome', function () {
     return view('welcome');
});

