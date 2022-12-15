<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller2;
use App\Http\Controllers\CRUDController; 
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

Route::get('/', function () {
    return view('dashboard');
});

 Route::get('/', function () {

    return view('dash2');
});

  
 Route::get('/dashboard', function() {
 	
    return view('dashboard'); 
});

Route::post('/insert',[CRUDController::class,'create'] );

Route::get('/all',[CRUDController::class,'show']);

  Route::get('/update',[CRUDController::class,'edit']);

 Route::post('/change',[CRUDController::class,'update']);
 Route::get('/delete',[CRUDController::class,'destroy']);
// Route::get('/login',[CRUDController::class,'login']);
  Route::get('/login', function() {
 	
    return view('login'); 
  });

  Route::get('/user',[CRUDController::class,'logined']);
   Route::get('/logout',[CRUDController::class,'logout']);
  
   Route::get('/aregistration', function() {
 	
    return view('ajaxregistration'); 
  });

 Route::post('/check',[CRUDController::class,'check']);
  


