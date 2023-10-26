<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Chat extends Component
{
    public function render()
    {
        return view('livewire.chat', [
            'users' => User::query()->whereNot('id', auth()->user()->id)->get()
        ]);
    }
}
