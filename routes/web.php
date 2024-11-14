<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $job = Job::with('employer')->latest()->paginate(5);
    return view('jobs.index', ['jobs' => $job ]);
});

Route::post('/jobs', function () {
    $title = request('title');
    $salary = request('salary');
    $employer_id = '1';
    Job::query()->create(compact('title', 'salary', 'employer_id'));

    return redirect('/jobs');
});
Route::get('/jobs/create', function () {
    return view('jobs.create');
});
Route::get('/jobs/{id}', function ($id) {
    return view('jobs.job', ['job' => Job::query()->find($id) ]);
});

Route::get('/contacts', function () {
    return view('contacts');
});
