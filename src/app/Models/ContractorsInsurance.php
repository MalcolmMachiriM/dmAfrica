<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractorsInsurance extends Model
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
        'email',
        'contact',
    ];
}
