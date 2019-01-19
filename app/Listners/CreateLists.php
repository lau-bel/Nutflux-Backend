<?php

namespace App\Listners;

use App\Eventes\SubUserCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Lists;
class CreateLists
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
     * @param  SubUserCreated  $event
     * @return void
     */
    public function handle(SubUserCreated $event)
    {
        $lists = new Lists();
        $event->subuser->lists()->save($lists);
    }
}
