<?php

use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

Route::post("/payment/webhook_jgkgfhs7430jdfsd", [PaymentController::class, 'webhook']);
