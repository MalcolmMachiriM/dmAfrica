<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

// use App\Models\ProductInsurance; 


class  PolicyController extends Controller
{
    //
    public function show()
    {
        return view('policy/index');
    }
}