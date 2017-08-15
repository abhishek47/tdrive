<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'user_id', 'address', 'country', 'city', 'state', 'zip', 'phones', 'website'
    ];

    public function getLogoAttribute($logo)
    {
    	return isset($logo) ? asset('/storage/' . $logo) : asset('imgs/logo-dark.png');
    }
}
