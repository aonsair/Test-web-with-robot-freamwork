<?php

namespace App\Providers;

use App\Trip;
use App\Review;
Use App\Policies\ReviewPolicy;
Use App\Policies\TripPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        Review::class => ReviewPolicy::class,
        Trip::class => TripPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('unpublished-reviews', function ($user) {
            if( (strcmp($user->role->slug, "member")==0) or (strcmp($user->role->slug, "gold")==0) ) {
                return true;
            }
            else {
                return false;
            }
        });

        Gate::define('unpublished-trips', function ($user) {
            if((strcmp($user->role->slug, "gold")==0)) {
                return true;
            }
            else {
                return false;
            }
        });
    }
}
