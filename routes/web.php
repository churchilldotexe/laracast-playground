<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

use function Pest\Laravel\get;

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
// Route::controller(JobController::class)->group(function () {

//     // index
//     Route::get('/jobs', 'index');

//     //store
//     Route::post('/jobs', 'store');

//     //create
//     Route::get('/jobs/create', 'create');

//     //show
//     Route::get('/jobs/{job}', 'show');

//     //edit
//     Route::get('/jobs/{job}/edit', 'edit');

//     //update
//     Route::patch('/jobs/{job}', 'update');

//     // delete
//     Route::delete('/jobs/{job}', 'destroy');
// });

// ---- OPTION 3 -----

Route::resource('jobs', JobController::class);
// Route::resource('jobs', JobController::class, ['only' => ['show', 'create', 'index']]);
// Route::resource('jobs', JobController::class, ['except' => ['show', 'create', 'index']]);
