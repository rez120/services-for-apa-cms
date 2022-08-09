<?php


use Tabuna\Breadcrumbs\Trail;
use App\Http\Controllers\Backend\ServiceController;



// Route::get('service',  'backend/ServiceController')
//     ->name('services')
//     ->breadcrumbs(function (Trail $trail) {
//         $trail->push(__('Services'), route('admin.services'));
//     });








//warning: downgrade to laravel 5.2
Route::put('/service/visibility/{service}', [ServiceController::class, 'hide'])->name('service.visibility');
Route::resource('service',  ServiceController::class);