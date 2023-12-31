<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\UserEventsAttendee;
class Event extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'location',
        'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function attendees()
    {
        return $this->belongsToMany(User::class ,'user_events_attendees');
    }
}


