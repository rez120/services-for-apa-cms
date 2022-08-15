<?php

use App\Http\Controllers\Backend\ServiceRequestController;
Route::get('service_request', [ServiceRequestController::class, 'index'])->name('service_request.index');
Route::delete('service_request/{serviceRequest}', [ServiceRequestController::class, 'destroy'])->name('service_request.destroy');