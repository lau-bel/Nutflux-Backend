<?php

namespace App\Listners;

use App\Eventes\UserRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Profile;
class CreateProfile
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserRegistered  $event
     * @return void
     */
    public function handle(UserRegistered $event)
    {
        //
        $profile = new Profile();
//$profile->user_id = $event->user->id;
        $profile->city = 'caddoky';
        $profile->about = 'about caddoky';
//$profile->save();

        $event->user->profile()->save($profile);
        
        }
}
