<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    dd(now());
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/meet-the-team', function () {
    return view('meet-the-team');
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('job', [ 'job' => $job ]);
});
