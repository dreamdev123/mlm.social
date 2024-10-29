<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customer_id', 'sponsor_id',
        'username', 'email', 'password',
        'is_admin', 'user_type', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile() {
        return $this->hasOne('App\Profile');
    }

    public function channels() {
        return $this->hasMany('App\Channel');
    }

    public function IsAdmin()
    {
        if($this->is_admin == 1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function IsIndividual()
    {
        if($this->user_type == 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function IsCompany()
    {
        if($this->user_type == 1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function IsCoach()
    {
        if($this->user_type == 2)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function getMono()
    {
        if($this->user_type == 1)
        {
            return isset($this->profile->company_name) ? substr($this->profile->company_name, 0, 1) : 'C';
        }
        else
        {
            return substr($this->profile->first_name, 0, 1);
        }
    }

    public function getFullname()
    {
        if($this->user_type == 1)
        {
            return $this->profile->company_name ?? 'Company Name' . $this->id;
        }
        else
        {
            return $this->profile->first_name . ' ' .  $this->profile->last_name;
        }
    }

    public function posts() {
        return $this->hasMany('App\Post');
    }

    public function teams() {
        return $this->hasMany('App\Team');
    }

    public function teamMembers() {
        return $this->hasMany('App\Member');
    }

    public function referrers() {
        return $this->hasMany('App\User', 'sponsor_id');
    }

    public function notification() {
        return $this->hasOne('App\Notification');
    }

    public function getSponsor()
    {
        if ($sponser = User::find($this->sponsor_id))
        {
            return $sponser->username;
        }
        else
        {
            return '-';
        }
    }

    public function rank() {
        return $this->hasOne('App\RankUser');
    }

    public function rankHistory() {
        return $this->hasMany('App\RankAchievementHistory');
    }
}
