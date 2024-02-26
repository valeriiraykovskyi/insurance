<?php
    use App\Http\Controllers\OwnerController;

Route::resource('owners', OwnerController::class);

// Redirect the root route to the owners index
Route::redirect('/', '/owners');
