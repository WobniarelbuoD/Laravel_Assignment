<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;


Route::get('/', [FeedbackController::class, 'getFeedback']);