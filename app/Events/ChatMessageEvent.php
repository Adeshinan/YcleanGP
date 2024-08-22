<?php

namespace App\Events;

use App\Models\Messagerie;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;

class ChatMessageEvent implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;

    public function __construct(Messagerie $message)
    {
        $this->message = $message;
    }

    public function broadcastOn()
    {
       
        return new PrivateChannel('chat-channel.'.$this->message->reception_id);
        
    }

    public function broadcastWith()
    {
        return ['message' => $this->message];
    }

    
}

  