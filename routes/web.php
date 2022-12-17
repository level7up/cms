<?php

use Illuminate\Support\Facades\Route;
use Level7up\CMS\Http\Controllers\BlogController;

Route::resource('blogs', BlogController::class);