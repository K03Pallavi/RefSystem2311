<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontusersController;
use App\Models\Frontusers;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/users',function(){
//     $frontusers = Frontusers::all();
//     echo "<pre>";
//     print_r($frontusers->toArray());
// });

//store the users in the database and redirect to user dahsboard that is userapp
Route::get('/users', [FrontusersController::class, 'store']);
Route::post('/users', [FrontusersController::class, 'store']);


Route::get('/viewusers',[FrontusersController::class, 'view']);
Route::post('/viewusers',[FrontusersController::class, 'view']);
