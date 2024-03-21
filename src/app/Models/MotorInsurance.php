<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MotorInsurance extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'gender',
        'marital_status',
        'title',
        'rsa_id',
        'license_code',
        'home_address',
        'vehicle_year',
        'vehicle_make',
        'vehicle_model',
        'email',
        'contact',
    ];
}
