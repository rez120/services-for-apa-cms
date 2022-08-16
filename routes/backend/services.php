<?php


use Tabuna\Breadcrumbs\Trail;
use App\Http\Controllers\Backend\ServiceController;



//warning: downgrade to laravel 5.2
Route::put('/service/visibility/{service}', [ServiceController::class, 'hide'])->name('service.visibility');
Route::resource('service',  ServiceController::class);