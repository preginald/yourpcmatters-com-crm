<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon;

class Comment extends Model
{
    public function getCreatedAtDiffAttribute()
    {
        return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $this->attributes['created_at'])->diffForHumans();
        
    }

    public function getUpdatedAtDiffAttribute()
    {
        return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $this->attributes['updated_at'])->diffForHumans();
        
    }

    public function commentable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
