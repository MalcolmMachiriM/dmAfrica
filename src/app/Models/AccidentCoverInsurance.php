<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccidentCoverInsurance extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'gender',
        'marital_status',
        'title',
        'rsa_id',
        'country',
        'code',
        'vehicle_year',
        'vehicle_make',
        'vehicle_model',

    ];
}
