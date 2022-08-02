<?php

use App\Http\Controllers\Backend\DashboardController;
use Tabuna\Breadcrumbs\Trail;



Route::get('service',  'backend/PhotoController')
    ->name('services')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Services'), route('admin.services'));
    });