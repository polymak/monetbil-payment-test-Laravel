<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('payment', [PaymentController::class, 'showPaymentForm'])->name('payment.form');
Route::post('payment', [PaymentController::class, 'processPayment'])->name('payment.process');
Route::get('payment/success', [PaymentController::class, 'paymentSuccess'])->name('payment.success');
Route::post('payment/notify', [PaymentController::class, 'paymentNotify'])->name('payment.notify');
