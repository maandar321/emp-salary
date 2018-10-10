<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emp extends Model
{
    protected $fillable=['email','name','designation','status','doj'];

    public function salary()
    {
        return $this->hasMany('App\Salary','email','email');
}}

