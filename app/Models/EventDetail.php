<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventDetail extends Model
{
    use HasFactory;

    public function church_event()
    {
        return $this->belongsTo(ChurchEvent::class);
    }
}
