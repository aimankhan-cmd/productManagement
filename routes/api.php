<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestProductApiController;


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

Route::get('/products', [RestProductApiController::class, 'getProducts']);
//i check in postman online through make setup ngrok to make my local live serverthen route will be ["thesiteaddres/"api/prpducts] 

Route::post('/products', [RestProductApiController::class, 'submitProduct']);

// add product array json
// {
//     "name": "Product Name",
//     "description": "Product Description",
//     "price": 10.99,
//     "stockQuantity": 100,
//     "userId":1
// }
Route::get('/products/{id}', [RestProductApiController::class, 'getSpecificProduct']);

Route::put('/products/{id}', [RestProductApiController::class, 'updateProduct']);

Route::delete('/products/{id}', [RestProductApiController::class, 'destroyProduct']);
