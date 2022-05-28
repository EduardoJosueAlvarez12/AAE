<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PasswordReset extends Notification
{
    use Queueable;


    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public $token;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Restablecimiento de contraseña')

            ->greeting('¡Saludos!')

            ->line('Está recibiendo este correo porque tuvimos una solicitud de restablecimiento de contraseña para su cuenta.')

            ->action('Restablecer Contraseña', url('AAE/password/restablecer', $this->token))

            ->line('Si no solicitó un restablecimiento de contraseña, puede ignorar este correo.')

            ->salutation('Atentamente, Ask & Answer Education');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
