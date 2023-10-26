<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Room extends Model
{
    use HasFactory;

    public function messages(): HasMany
    {
        return $this->hasMany(Message::class);
    }

    public function users(): HasMany
    { 
        return $this->hasMany(User::class, 'id', 'user_one_id')
            ->orWhere('id', $this->user_two_id);
    }

}
