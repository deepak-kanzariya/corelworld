<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-intl', function () {
    return extension_loaded('intl') ? 'Intl Enabled' : 'Intl Missing';
});
