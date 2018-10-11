<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    protected $fillable=['leave_type','start_date','end_date','half_day','text','user_id'];
}
