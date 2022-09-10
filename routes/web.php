<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    $url = 'https://zenquotes.io/api/quotes/';

    $response = file_get_contents($url);
    $quotesList = json_decode($response);
    $quotesRandom = Arr::random($quotesList);
    return view('index', compact('quotesRandom'));
    
});
