<?php

namespace App\Listners;

use App\Eventes\UserRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Eventes\SubUserCreated;
use App\Subuser;
class CreateSubuser
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
        $subuser = new Subuser();
        $event->user->profile()->save($subuser);
        

        event(new SubUserCreated($subuser));
        event(new SubUserCreated($subuser));
        event(new SubUserCreated($subuser));

return $subuser;
    }
}
