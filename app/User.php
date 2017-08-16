<?php

namespace App;

use App\Models\Social;
use App\Models\Company;
use Illuminate\Notifications\Notifiable;
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
        'name', 'email', 'password', 'company_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function social()
    {
        return $this->hasMany(Social::class);
    }


    public function company()
    {
        if($this->role == 0) {
          return $this->hasOne(Company::class);
        } else {
            return $this->belongsTo(Company::class);
        }
    }

    public function getAvatarAttribute($avatar)
    {
        return isset($avatar) ? asset('/storage/' . $avatar) : asset('imgs/avatar.png');
    }
    
}
