<?php

namespace App\Livewire;

use App\Models\{Room, User};
use Livewire\Component;

class Chat extends Component
{
    public function render()
    {
        return view('livewire.chat', [
            'users' => User::query()
                ->where('id', '!=', auth()->id())
                ->get(),
        ]);
    }
}
