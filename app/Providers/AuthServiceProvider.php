<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers;

class AuthServiceProvider extends Providers\AuthServiceProvider
{
  /**
   * The policy mappings for the application.
   *
   * @var array
   */
  protected $policies = [
    \App\Models\User::class => \App\Policies\UserPolicy::class,
  ];

  /**
   * Register any authentication / authorization services.
   *
   * @return void
   */
  public function boot()
  {
    $this->registerPolicies();

    Gate::define('superadmin', function ($user) {
      return $user->hasRole('superadmin');
    });
  }
}
