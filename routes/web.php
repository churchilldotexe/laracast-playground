<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $job = Job::with('employer')->cursorPaginate(5);
    return view('jobs', ['jobs' => $job ]);
});

Route::get('/job/{id}', function ($id) {
    return view('job', ['job' => Job::find($id) ]);
});

Route::get('/contacts', function () {
    return view('contacts');
});
