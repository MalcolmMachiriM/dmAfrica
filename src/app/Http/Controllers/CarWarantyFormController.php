<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CarWarantyInsuranceFormSubmitted;
use App\Models\CarWarantyInsurance; 


class CarWarantyFormController extends Controller
{
    //
    public function show()
    {
        return view('forms/personal/car-warranty');
    }

    public function store(Request $request)
    {
        // Validation Logic (You can use Laravel validation)
    
        // Create a new MotorInsurance instance and fill it with form data
        $carwarantyInsurance = new CarWarantyInsurance();
        $carwarantyInsurance->full_name = $request->input('full_name');
        $carwarantyInsurance->gender = $request->input('gender');
        $carwarantyInsurance->marital_status = $request->input('marital_status');
        $carwarantyInsurance->title = $request->input('title');
        $carwarantyInsurance->rsa_id = $request->input('rsa_id');
        $carwarantyInsurance->country = $request->input('country');
        $carwarantyInsurance->code = $request->input('code');
        $carwarantyInsurance->vehicle_year = $request->input('vehicle_year');
        $carwarantyInsurance->vehicle_make = $request->input('vehicle_make');
        $carwarantyInsurance->vehicle_model = $request->input('vehicle_model');

        // Save the MotorInsurance instance to the database
        $carwarantyInsurance->save();
    
        // Send email
        Mail::to('eddymnemo@yahoo.com')->send(new CarWarantyInsuranceFormSubmitted($request->all()));
    
        // Redirect back with success message
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
    
}
