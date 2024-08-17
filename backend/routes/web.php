<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/db-test', function () {
    try {
        $results = DB::select('SELECT DATABASE()');
        return 'Connected to database: ' . $results[0]->{'DATABASE()'};
    } catch (\Exception $e) {
        return 'Connection failed: ' . $e->getMessage();
    }
});