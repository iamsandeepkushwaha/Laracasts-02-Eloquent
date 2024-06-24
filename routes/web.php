<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/jobs', function () {
    $jobs = App\Models\Job::all();
    dd($jobs[1]->salary);
});
