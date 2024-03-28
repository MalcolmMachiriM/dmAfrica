<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MotorInsuranceFormSubmitted;
use App\Models\MotorInsurance; 


class CyberFormController extends Controller
{
    //
    public function show()
    {
        return view('forms/business/cyber');
    }

    public function store(Request $request)
    {
        // Validation Logic (You can use Laravel validation)
    
        // Create a new MotorInsurance instance and fill it with form data
        $motorInsurance = new MotorInsurance();
        $motorInsurance->full_name = $request->input('full_name');
        $motorInsurance->gender = $request->input('gender');
        $motorInsurance->marital_status = $request->input('marital_status');
        $motorInsurance->title = $request->input('title');
        $motorInsurance->rsa_id = $request->input('rsa_id');
        $motorInsurance->license_code = $request->input('license_code');
        $motorInsurance->home_address = $request->input('home_address');
        $motorInsurance->vehicle_year = $request->input('vehicle_year');
        $motorInsurance->vehicle_make = $request->input('vehicle_make');
        $motorInsurance->vehicle_model = $request->input('vehicle_model');
        $motorInsurance->email = $request->input('email');
        $motorInsurance->contact = $request->input('contact');
    
        // Save the MotorInsurance instance to the database
        $motorInsurance->save();
    
        // Send email
        Mail::to('online@dmafrica.co.za')->send(new MotorInsuranceFormSubmitted($request->all()));
    
        // Redirect back with success message
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
    
}
