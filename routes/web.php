<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;

Route::get('/', [FeedbackController::class, 'getFeedback']);
Route::get('/edit', [FeedbackController::class, 'edit']);
Route::get('/update', [FeedbackController::class, 'update']);