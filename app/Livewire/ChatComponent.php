<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\Messagerie;
use Livewire\Attributes\On;
use App\Events\ChatMessageEvent;

class ChatComponent extends Component
{
    public $user;
    public $sender_id;
    public $reception_id;
    public $message = '';
    public $messages = [];
    public $vue;
    public $lastMessages = [];
    
    public function render()
    {
        return view('livewire.chat-component');
    }


    public function mount($user_id){
        $this->sender_id = auth()->user()->id;
        $this->reception_id = $user_id;


        $messages = Messagerie::where(function($query){
            $query->where('sender_id',$this->sender_id )
            ->where('reception_id',$this->reception_id);
        })->orWhere(function($query){
            $query->where('sender_id',$this->reception_id)
            ->where('reception_id',$this->sender_id );
        })->with('sender:id,name' , 'receiver:id,name')->get();
        

        Messagerie::where('reception_id', auth()->user()->id)
        ->where('sender_id', $user_id)
        ->update(['vue' => 1]);
        
        foreach($messages as $message){
          $this->chatMessage($message);
        }
        
         $this->user = User::find($user_id);
         $this->lastMessages = $this->getLastMessagesFromUsers();
    }

    

    public function sendMessage(){
        $message = new Messagerie();
        $message->sender_id =  $this->sender_id;
        $message->reception_id =  $this->reception_id;
        $message->message =  $this->message;

        $message->save();

        $this->chatMessage($message);

        broadcast(new ChatMessageEvent($message))->toOthers();


        $this->message = '';
    }

    
    #[On('echo.private:chat-channel.{sender_id},ChatMessageEvent')]
    public function listenForMessage($event){
         $chatMessage = Messagerie::whereId($event['message']['id'])->with('sender:id,name' , 'receiver:id,name')->first();
        $this->chatMessage($chatMessage);

        if ($chatMessage->reception_id == auth()->user()->id) {
            $chatMessage->update(['vue' => 1]);
            broadcast(new ChatMessageEvent($chatMessage))->toOthers();
        } 

       
    }

    public function chatMessage($message){
        $this->messages[] = [
            'id' => $message->id,
            'message' => $message->message,
            'sender' => $message->sender->name,
            'receiver' => $message->receiver->name,
            'vue' => $message->vue,
            'created_at' => $message->created_at,
        ];
    }

    public function getLastMessagesFromUsers()
{
    $lastMessages = Messagerie::select('sender_id', 'message', 'created_at')
        ->where('reception_id', $this->reception_id)
        ->orWhere('sender_id', $this->reception_id)
        ->orderBy('created_at', 'desc')
        ->groupBy('sender_id')
        ->with('sender:id,name')
        ->get()
        ->unique('sender_id');

    return $lastMessages;
}

}