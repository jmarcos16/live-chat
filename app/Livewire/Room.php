<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class Room extends Component
{

    public $room;
    public $messages;

    #[On('open::room')]
    public function open($room)
    {
        $this->room     = $room;
        $this->messages = $room->messages;
    }


    public function render()
    {
        return view('livewire.room');
    }
}
