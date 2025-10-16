<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = [
        'pageTitle' => 'Dashboard',
    ];
    return view('dashboard.index', $data);
});
