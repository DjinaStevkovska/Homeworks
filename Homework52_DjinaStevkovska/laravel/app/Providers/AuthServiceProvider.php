<?php

namespace App\Providers;

use App\Ability;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\User;
use App\Role;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Gate::define('access_admin', function(User $user)
        // {
        //     return $user->roles(['admin', 'moderator']);
        // });

        Gate::before(function($user, $ability)
        // $ability // @can from showblade // middleware from web.php

        {
            return $user->abilities()->contains($ability);
        });





        // {
        //     $abilities = $user->roles->map->abilities->flatten()->pluck('name');
        //     // if there are many abilities
        //     foreach ($abilities as $ab) {
        //         if($ab === $ability)
        //         {
        //             return true;
        //         }
        //     }
        // });

    }
}
