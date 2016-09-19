<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    
    public function accounts()
    {
        return $this->belongsToMany('App\Account');
    }

    public function tickets()
    {
        return $this->hasMany('App\Ticket');
    }

    public function getContactFullNameAttribute()
    {
        return $this->attributes['firstname'] .' '. $this->attributes['lastname'];
    }
}
