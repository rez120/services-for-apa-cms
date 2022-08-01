<?php

use App\Http\Controllers\Backend\DashboardController;
use Tabuna\Breadcrumbs\Trail;



Route::get('services', fn()=> view('backend.contacts.index'))
    ->name('contacts')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Contacts'), route('admin.contacts'));
    });