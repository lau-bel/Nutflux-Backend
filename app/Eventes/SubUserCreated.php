<?php

namespace App\Eventes;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

use App\Subuser;
class SubUserCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
        public $subuser;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Subuser $subuser)
    {
        //
        $this->subuser = $subuser;
    }


}
