<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class UserProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function validateCredentials(UserContract $user, array $credentials)
    {
        $plain = $credentials['password'];
 
        if ($plain == $seuModoDeValidacao) {
            return true;
        } else {
            return false;
        }

    /**
     * Bootstrap services.
     *
     * @return void
     */
}
public function boot()
{
    //
}

}