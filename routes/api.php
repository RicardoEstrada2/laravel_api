<?php

use App\Http\Controllers\api\v1\AddressController;
use App\Http\Controllers\api\v1\CategoryController;
use App\Http\Controllers\api\v1\IsActiveCategoryController;
use App\Http\Controllers\api\v1\IsActiveMakerController;
use App\Http\Controllers\api\v1\MakerController;
use App\Http\Controllers\api\v1\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::prefix('v1')->group(function (){
    Route::apiResource('/users', UsersController::class);
    Route::apiResource('/makers', MakerController::class);
    Route::patch('/makers/{maker}/active', IsActiveMakerController::class);
    Route::apiResource('/categories', CategoryController::class);
    Route::patch('/categories/{category}/active', IsActiveCategoryController::class);
    Route::apiResource('/address', AddressController::class);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
