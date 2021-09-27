<?php

namespace App\Providers;

use App\Actions\Jetstream\DeleteUser;
use Illuminate\Support\ServiceProvider;
use Laravel\Jetstream\Jetstream;

class JetstreamServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->configurePermissions();

        Jetstream::deleteUsersUsing(DeleteUser::class);
    }

    /**
     * Configure the permissions that are available within the application.
     *
     * @return void
     */
    protected function configurePermissions()
    {
        Jetstream::defaultApiTokenPermissions(['read']);

        // Jetstream::permissions([
        //     'create',
        //     'read',
        //     'update',
        //     'delete',
        // ]);
        Jetstream::role('admin', 'Administrator', [
            'server:create',
            'server:read',
            'server:update',
            'server:delete',
        ])->description('Administrator users can perform any action.');
        
        Jetstream::role('editor', 'Support Specialist', [
            'server:read',
        ])->description('Support specialists can read server information.');
    }
}
