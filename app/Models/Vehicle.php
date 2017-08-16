<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = ['name', 'plate_no', 'vehicle_class', 'fuel_type', 'owner_id', 'company_id', 'chasis_no', 'engine_no', 'date_of_registration'];

    
}
