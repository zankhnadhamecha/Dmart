<?php

namespace App\Channel;

use App\User;
use Illuminate\Notifications\Notification;

class TestNotificationChannel
{
    /**
     * Create a new channel instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Authenticate the user's access to the channel.
     *
     * @param  \App\User  $user
     * @return array|bool
     */
    public function send($notifiable, Notification $notification)
    {
        // dump("send method");
        // $message = $notification->toMessage($notifiable);

        $url="https://www.way2sms.com/api/v1/sendCampaign";
        $message = urlencode("Thank you For Registration :)");
        $phone = $notification->toMessage($notifiable);
        // dd($message)// urlencode your message
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
        curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey=S0L1RDBY9RCITMV2BNHY4FSQ2IVDONWR&secret=X4B2S73HKT94UU5P&usetype=stage&phone=$phone&senderid=ZANKHANA&message=$message");

        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        curl_close($curl);
        dd($result);
    }
}
