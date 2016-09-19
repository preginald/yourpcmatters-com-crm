<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Account extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function contacts()
    {
        return $this->belongsToMany('App\Contact');
    }

    public function tickets()
    {
        return $this->hasMany('App\Ticket');
    }
}
