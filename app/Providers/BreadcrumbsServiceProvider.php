<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Tabuna\Breadcrumbs\Breadcrumbs;
use Tabuna\Breadcrumbs\Trail;

class BreadcrumbsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        Breadcrumbs::for('admin.service.index', fn (Trail $trail) =>
             $trail->push('Services', route('admin.dashboard'))
        );

        Breadcrumbs::for('admin.service.create', fn (Trail $trail) =>
            $trail
                ->parent('admin.service.index', route('admin.service.index'))
                ->push('create a new service',route('admin.dashboard'))
        );
    }
}

/*
Breadcrumbs::for('photos.index', fn (Trail $trail) =>
$trail->push('Photos', route('home'))
);

Breadcrumbs::for('photos.create', fn (Trail $trail) =>
$trail
   ->parent('photos.index', route('photos.index'))
   ->push('Add new photo', route('home'))
);

*/


/*

Route::get('service',  'backend/PhotoController')
    ->name('services')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Services'), route('admin.services'));
    });

*/