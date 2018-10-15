<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id','casual_leave','medical_leave','team_lead','designation'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin()
    {
        if ($this->role_id == 1){
            return true;
        }

        return false;
    }

    public function isProjectManager()
    {
        if ($this->role_id == 2){
            return true;
        }

        return false;
    }

    public function isTeamLead()
    { if ($this->role_id == 3){
        return true;
    }
        return false;
    }

    public function isEmployee()
    { if($this->role_id == 4){
        return true;
    }
        return false;
    }

    public function isSuperAdmin()
    {
        if($this->role_id == 5){
            return true;
        }
        return false;
    }

    public function leaves()
    {
        return $this->hasMany(Leave::class);
    }
}
