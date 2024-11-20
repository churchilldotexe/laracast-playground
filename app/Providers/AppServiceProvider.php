<?php

namespace App\Providers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::preventLazyLoading();

        // to make the gate optional for unauth user
        // to make the logic hit for unauth user
        // Gate::define('edit-job', function (?User $user, Job $job) {
        //     return  $job->employer->user->is($user);
        // });


        // NOTE: moved to policy
        // Gate::define('edit-job', function (User $user, Job $job) {
        //     return  $job->employer->user->is($user);
        // });
    }
}
