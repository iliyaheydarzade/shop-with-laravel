<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\callController;
use App\Http\Controllers\comeController;
use App\Http\Controllers\chekController;
use App\Http\Controllers\adad;
use App\Http\Controllers\see;
use App\Http\Controllers\addcard;
use App\Http\Controllers\sabad;
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
Route::get('/about/about',function(){
    return view("about");
} );
Route::get('c{cat_id}',[HomeController::class, 'one'] );
Route::get('see/{id}',[see::class, 'see'] );
Route::get('seebl/{id}',[see::class, 'seebl'] );
Route::get('/call/call',function(){
    return view("call");
} );
Route::post('call/cr',[comeController::class, 'one']);
// login
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
// dont tach
// admin panel
Route::prefix("admin")->group(function () {
        Route::get('/pan', [chekController::class, 'f']); 
        Route::post('/adlog', [chekController::class, 'd']); 
        Route::get('/adhome', [chekController::class, 'c']); 
        Route::get('/addma', [chekController::class, 'addma']); 
        Route::get('/addbl', [chekController::class, 'addbl']); 
        Route::get('/masage', [chekController::class, 'masage']); 
        Route::post('/addma', [adad::class, 'ma']);    
        Route::post('/addbl', [adad::class, 'bl']);        
        Route::get('/del/{comid}', [adad::class, 'del']);        
});
Route::get('add/{addcard}', [addcard::class, 'add']);
Route::get('sabad/add/{addcard}', [addcard::class, 'add']);
Route::get('sabad/sabad', [sabad::class,"pub"]);
Route::get('sabad/remove/{id}', [sabad::class,"remove"]);