<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

// importaciones para que funcione la autorizacion ---
use Illuminate\Support\Facades\Gate;
use App\Models\Cornellnote;
use App\Policies\CornellnotePolicy;
use App\Models\Bug;
use App\Policies\BugPolicy;
// ---------------------------------------------------

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        Cornellnote::class => CornellnotePolicy::class,
        Bug::class => BugPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
