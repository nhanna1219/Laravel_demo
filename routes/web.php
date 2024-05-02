<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

// Home page
Route::get('/',[PostController::class,'index']);

/* Start render view */
// Home Page
Route::get('/create',function(){
    return view('create');
});

// Edit Page
Route::get('/edit/{id}',[PostController::class,'edit']);
/* End render view */

/* Start action handling */
// Create method
Route::post('/post',[PostController::class,'store']);

// Delete Post method
Route::delete('/delete/{id}',[PostController::class,'destroy']);

// Delete Image method
Route::delete('/deleteimage/{id}',[PostController::class,'deleteimage']);

// Delete Cover method
Route::delete('/deletecover/{id}',[PostController::class,'deletecover']);

// Edit Post method
Route::put('/update/{id}',[PostController::class,'update']);
/* End action handling */


