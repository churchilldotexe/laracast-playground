<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Mail\JobCreated;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::view('/contacts', 'contacts');

// ---- OPTION 1 ----
// // index
// Route::get('/jobs', [JobController::class , 'index']);
//
// //store
// Route::post('/jobs', [JobController::class,'store']);
//
// //create
// Route::get('/jobs/create', [JobController::class, 'create']);
//
// //show
// Route::get('/jobs/{job}', [JobController::class,'show']);
//
//
// //edit
// Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);
//
// //update
// Route::patch('/jobs/{job}', [JobController::class, 'update']);
//
// // delete
// Route::delete('/jobs/{job}', [JobController::class,'destroy']);

//---- OPTION 2 ----
Route::controller(JobController::class)->group(function () {

    // index
    Route::get('/jobs', 'index');

    //store
    Route::post('/jobs', 'store')
        ->middleware('auth');

    //create
    Route::get('/jobs/create', 'create')
        ->middleware('auth');

    //show
    Route::get('/jobs/{job}', 'show');

    //edit
    Route::get('/jobs/{job}/edit', 'edit')
        ->middleware('auth')
        ->can('edit', 'job');

    //update
    Route::patch('/jobs/{job}', 'update')
        ->middleware('auth')
        ->can('edit', 'job');

    // delete
    Route::delete('/jobs/{job}', 'destroy')
        ->middleware('auth')
        ->can('edit', 'job');
});

// ---- OPTION 3 -----

// Route::resource('jobs', JobController::class);
// Route::resource('jobs', JobController::class, ['only' => ['show', 'create', 'index']]);
// Route::resource('jobs', JobController::class, ['except' => ['show', 'create', 'index']]);

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [SessionController::class,'create'])->name('login');
Route::post('/login', [SessionController::class,'store']);
Route::post('/logout', [SessionController::class,'destroy']);
