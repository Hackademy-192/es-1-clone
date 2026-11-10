<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, "homepage"])->name("homepage");
// Invio Mail
Route::get("/lavora-con-noi", [PublicController::class, "send_application"])->name("send_application");
Route::post("/send-email", [PublicController::class, "send_email"])->name("send_email");
Route::get("/thank-you", [PublicController::class, "thank_you"])->name("thank_you");