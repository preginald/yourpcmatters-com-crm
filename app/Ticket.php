<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon;

class Ticket extends Model
{
    public function account()
    {
        return $this->belongsTo('App\Account');
    }

    public function contact()
    {
        return $this->belongsTo('App\Contact');
    }
    
    public function status()
    {
        return $this->belongsTo('App\TicketStatus');
    }
    
    public function priority()
    {
        return $this->belongsTo('App\TicketPriority');
    }
    
    public function type()
    {
        return $this->belongsTo('App\TicketType');
    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }
    
    public function getUpdatedAtDiffAttribute()
    {
        return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $this->attributes['updated_at'])->diffForHumans();
        
    }
}
