<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostApiController;

Route::apiResource('posts', PostApiController::class);

Route::get('/ping', function () {
    return response()->json(['pong' => true]);
});