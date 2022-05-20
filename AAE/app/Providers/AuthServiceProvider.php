<?php

namespace App\Providers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
        VerifyEmail::toMailUsing(function ($notifiable, $url) {

            return (new MailMessage)
            
            ->subject('Correo de confirmación')

            ->greeting('¡Saludos!')
            
            ->line('Haga click en el botón de abajo para confirmar su correo en Ask & Answer Education.')
            
            ->action('Confirmar correo', $url)

            ->salutation('Saludos, Ask & Answer Education');


            });
    }
}
