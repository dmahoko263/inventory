<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\inventAPI; 
use App\Http\Controllers\inventController; 

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//Get data from the database
//Route::get("inventory",[inventController::class,'list']);
// Geting specific values by id
Route::get("inventory/search/{name}?",[inventController::class,'list']);
Route::get("inventory/search/",[inventController::class,'listAll']);
Route::get("inventory/search/byitemID/{id?}",[inventController::class,'listById']);
Route::post("inventory/add",[inventController::class,'add']);
Route::put("inventory/update",[inventController::class,'update']);
Route::delete("inventory/delete/itemID/{id}",[inventController::class,'delete']);
