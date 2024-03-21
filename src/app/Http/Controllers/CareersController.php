<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

// use App\Models\ProductInsurance; 


class  CareersController extends Controller
{
    //
    public function show()
    {
        return view('careers/index');
    }
}