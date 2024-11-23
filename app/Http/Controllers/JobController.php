<?php

namespace App\Http\Controllers;

use App\Mail\JobCreated;
use App\Models\Job;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $job = Job::with('employer')->latest()->paginate(5);
        return view('jobs.index', ['jobs' => $job ]);
    }

    /**
     * @return RedirectResponse
     */
    public function store(): RedirectResponse
    {
        request()->validate([
            'title' => ['required','max:255','min:3'],
            'salary' => ['required','min:3']
        ]);

        $title = request('title');
        $salary = request('salary');
        $employer_id = '1' ;
        $job = Job::query()->create(compact('title', 'salary', 'employer_id'));

        Mail::to($job->employer->user)->send(
            // getting the user through relation.. job one to one : employer -> one to one to user
            new JobCreated($job)
        );

        return redirect('/jobs');
    }
    /**
     * @return View
     */
    public function create(): View
    {
        return view('jobs.create');
    }
    /**
     * @return View
     */
    public function show(Job $job): View
    {
        return view('jobs.show', ['job' => $job  ]);
    }
    /**
     * @return View
     */
    public function edit(Job $job)
    {

        // NOTE: moved to provider for the project wide access
        // Gate::define('edit-job', function (User $user, Job $job) {
        //     return  $job->employer->user->is($user);
        // });

        // NOTE: since define is moved to provider i can automatically check for logged in user
        // if (Auth::guest()) {
        //     return redirect('/login');
        // }
        // Gate::authorize('edit-job', $job);

        return view('jobs.edit', ['job' => $job]);
    }
    /**
     * @return RedirectResponse
     */
    public function update(Job $job): RedirectResponse
    {
        request()->validate([
            'title' => ['required','max:255','min:3'],
            'salary' => ['required','min:3']
        ]);

        //Authorization
        $job->update(['title' => request('title'),'salary' => request('salary')]);

        return redirect("/jobs/{$job->job}");
    }
    /**
     * @return RedirectResponse
     */
    public function destroy(Job $job): RedirectResponse
    {
        $job->delete();
        return redirect("/jobs");
    }

}
