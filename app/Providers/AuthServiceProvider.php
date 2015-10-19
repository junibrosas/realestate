<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        parent::registerPolicies($gate);

        foreach($this->getPermissions() as $permission){
            $gate->define($permission->name, function( $user ) use ($permission){
                return $user->hasRole($permission->roles);
            });
        }
    }

    public function getPermissions(){
        return \Xadmin\Features\CMS\Models\Permission::with('roles')->get();
    }

}
