<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $guarded=[];

    public function emp()
    {
        return $this->belongsTo('App\Emp','email','email');
    }
}
