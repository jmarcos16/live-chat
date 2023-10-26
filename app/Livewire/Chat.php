<?php

namespace App\Livewire;

use Livewire\Component;

class Chat extends Component
{
    public function render()
    {
        dd(
            auth()
                ->user()
                ->rooms()
                ->with('users')
                ->get()
        );
        return view('livewire.chat', [
            /** @var User $auth */
            'users' => auth()
                ->user()
                ->rooms()
                ->with('users')
                ->get(),
        ]);
    }
}
