<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TrackController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\VariantController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('product', [ProductController::class, 'index']);

Route::get('product', [VariantController::class, 'index']);

Route::get('/track-view/{product:external_id}', [TrackController::class, 'trackView'])->where('id', '[0-9]+');
Route::get('/track-click/{product:external_id}/{variant:external_id}', [TrackController::class, 'trackClick'])->where([
    'external_id' => '[0-9]+'
]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// tasks:
// stexcel variant model


// route aranc auth
//track-view/{product_external_id[d4]}
//track-click/{product_external_id}/{variant_id}
