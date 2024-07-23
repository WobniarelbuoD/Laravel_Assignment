<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;
use App\Http\Middleware\EnvTokenAuth;

Route::middleware([EnvTokenAuth::class])->group(function () {
    Route::post("add",[FeedbackController::class,'addFeedback']);
});