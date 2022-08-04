<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ContactMessageController;


Route::get('contacts', [ContactMessageController::class,'index'])->name('contact.index');

Route::delete('contacts/{contactMessage}', [ContactMessageController::class,'destroy'])->name('contact.destroy');