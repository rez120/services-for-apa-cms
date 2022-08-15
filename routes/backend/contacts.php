<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ContactMessageController;


// Route::get('contacts', [ContactMessageController::class,'index'])->name('contact.index');


// Route::delete('contacts/{contactMessage}', [ContactMessageController::class,'destroy'])->name('contact.destroy');

// Route::get('show/{contactMessage}', [ContactMessageController::class,'show'])->name('contact.show');


Route::resource('contact_message',ContactMessageController::class)->except(['edit', 'update','create', 'store']);