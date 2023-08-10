<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\kController;
 
Route::get('/', [kController::class, 'hn']);

?>