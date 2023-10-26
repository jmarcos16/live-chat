<?php

namespace App\Livewire\Chat;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{

    public function render()
    {
        return view('livewire.chat.index', [
            'users' => User::query()->whereNot('id', auth()->user())->get()
        ]);
    }
}
