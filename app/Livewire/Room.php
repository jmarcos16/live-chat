<?php

namespace App\Livewire;

use App\Models\{Room as ModelsRoom, User};
use Livewire\Attributes\On;
use Livewire\Component;

class Room extends Component
{
    public ModelsRoom $room;

    public $user = '';

    public $message = '';

    public $messages = '';

    #[On('open::room')]
    public function open($user_id)
    {
        $this->user = User::find($user_id);
        $room       = auth()->user()->joinRoom($this->user);
        $this->room = $room;
        $this->messages = $room->messages()->get();
    }

    public function sendMessage()
    {
        $this->room->sendMessage(auth()->user(), $this->message);
        $this->messages = $this->room->messages()->get();
        $this->message = '';
    }

    public function render()
    {
        return view('livewire.room');
    }
}
