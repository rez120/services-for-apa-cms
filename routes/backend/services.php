<?php

use App\Http\Controllers\Backend\DashboardController;
use Tabuna\Breadcrumbs\Trail;



Route::get('services', fn()=> view('backend.services.index'))
    ->name('services')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Services'), route('admin.services'));
    });