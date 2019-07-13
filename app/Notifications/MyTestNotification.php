<?php

namespace App\Notifications;

use App\Channel\TestNotificationChannel;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class MyTestNotification extends Notification
{
    use Queueable;

    public $message;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        // dump("constructor     in MyTestNotification");
        $this->message = $data;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        // dump("via");
        return [TestNotificationChannel::class];
    }
    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toMessage($notifiable)
    {
        // dump("toMessage");
        return $this->message;
    }
}
