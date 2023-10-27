<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password'          => 'hashed',
    ];

    public function rooms(): BelongsToMany
    {
        return $this->belongsToMany(Room::class, 'room_user', 'user_id', 'room_id');
    }

    public function joinRoom(User $user): Room
    {

        $room = $this->rooms()->whereHas('users', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })->first();

        if($room) {
            return $room;
        }

        $room = Room::create();
        $room->joinUser($this);
        $room->joinUser($user);

        return $room;
    }

}
