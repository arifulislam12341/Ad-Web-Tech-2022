<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\projectcontroller;
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
Route::get('/', [projectcontroller::class,'homepage'])->name('home');
Route::get('/product', [projectcontroller::class,'product'])->name('product');
Route::get('/contact', [projectcontroller::class,'contact'])->name('contact');
Route::get('/ourteams', [projectcontroller::class,'ourteams'])->name('ourteams');
Route::get('/aboutus', [projectcontroller::class,'aboutus'])->name('aboutus');
   