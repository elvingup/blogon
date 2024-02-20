<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Articles;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Schema;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Articles::class => ArticlesPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        // registrar policies
        $this->registerPolicies();

        Gate::define('deleta-artigo', function(User $user, $permission){
            return $user->permission === $permission;
        });
        // Schema::table('users', function(Blueprint $table){
        //     $table->integer('permission')->default(1);
            
        // });

        
    }
}
