<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\{BelongsToMany, HasMany};

class Room extends Model
{
    use HasFactory;

    public function messages(): HasMany
    {
        return $this->hasMany(Message::class);
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'room_user', 'room_id', 'user_id');
    }

    public function joinUser(User $user): void
    {
        $this->users()->attach($user);
    }

    public function sendMessage(User $user, string $message): void
    {
        $this->messages()->create([
            'user_id' => $user->id,
            'body' => $message,
        ]);
    }

}
