<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\RecipeController;
use App\Http\Controllers\Api\TagController;
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

Route::get('categories',            [CategoryController::class, 'index']);
Route::get('categories/{category}', [CategoryController::class, 'show']);
Route::apiResource('categories', CategoryController::class);

Route::get('recipes',               [RecipeController::class, 'index']);
Route::get('recipes/{recipe}',      [RecipeController::class, 'show']);
Route::apiResource('recipes', RecipeController::class);


Route::get('tags',                  [TagController::class, 'index']);
Route::get('tags/{tag}',            [TagController::class, 'show']);
Route::apiResource('tags', TagController::class);
