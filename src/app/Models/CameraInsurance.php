<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CameraInsurance extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'gender',
        'title',
        'rsa_id',
        'email',
        'idtype',
        'contact',
    ];
}
