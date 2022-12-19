<?php

use Illuminate\Support\Facades\Route;
use Level7up\CMS\Http\Controllers\BlogController;
use Level7up\CMS\Http\Controllers\PageController;

Route::resource('blogs', BlogController::class);
Route::resource('pages', PageController::class);