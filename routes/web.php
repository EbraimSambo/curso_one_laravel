<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use App\Models\Listing;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request as HttpRequest;
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

//Listando todos
Route::get('/', [ListingController::class, 'index']);

Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

Route::get('/listing/manage', [ListingController::class, 'manage'])->middleware('auth');

Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

Route::get('/register', [UserController::class, 'create'])->middleware('guest');

Route::post('/users', [UserController::class, 'store']);

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

Route::post('/users/authenticate', [UserController::class, 'authenticate']);





//Listando de forma singular

Route::get('/listings/{listing}', [ListingController::class, 'show']);










/*
Route::get('/hello', function (){
      return Response('<h1>hello Laravel</h1>', 200)
      ->header('Content-type', 'text/plain');
});


Route::get('/posts/{id}', function($id){
    return Response('Publicação ' .$id);
})->where('id', '[0-9]+');

Route::get('/search', function(HttpRequest $request){
    return 'cidade ' . $request->name . ' cidade ' . $request->city;
});

*/
