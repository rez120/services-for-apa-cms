<?php

use App\Http\Controllers\LocaleController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\ContactMessageController;
use App\Http\Controllers\Frontend\ServiceRequestController;
/*
 * Global Routes
 *
 * Routes that are used between both frontend and backend.
 */

// Switch between the included languages
Route::get('lang/{lang}', [LocaleController::class, 'change'])->name('locale.change');

/*
 * Frontend Routes
 */
Route::group(['as' => 'frontend.'], function () {
    includeRouteFiles(__DIR__.'/frontend/');
});

/*
 * Backend Routes
 *
 * These routes can only be accessed by users with type `admin`
 */
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    includeRouteFiles(__DIR__.'/backend/');
});



// redo it for laravel 5.2
Route::get('services', [ServiceController::class,'index']);


Route::get('contact_message', [ContactMessageController::class, 'create'])->name('contact_message.create');


Route::post('contact_message', [ContactMessageController::class, 'store'])->name('contact_message.store');


Route::get("service_request/{service}", [ServiceRequestController::class, 'create'])->name("service_request.create");

Route::post('service_request', [ServiceRequestController::class, 'store'])->name("service_request.store");