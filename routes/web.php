<?php

declare(strict_types=1);

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', static function (Request $request) {
    \Illuminate\Support\Facades\Log::info('res', $request->all());
    dd('hello world');

    return view('welcome');
});
