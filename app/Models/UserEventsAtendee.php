<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserEventsAttendee extends Model
{
    protected $table = 'user_events_attendees';
    protected $fillable = [
        'user_id',
        'event_id',
        'attendee_name',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
