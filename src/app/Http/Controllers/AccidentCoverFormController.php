<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AccidentCoverInsuranceFormSubmitted;
use App\Models\AccidentCoverInsurance; 


class AccidentCoverFormController extends Controller
{
    //
    public function show()
    {
        return view('forms/personal/accident-cover');
    }

    public function store(Request $request)
    {
        // Validation Logic (You can use Laravel validation)
    
        // Create a new MotorInsurance instance and fill it with form data
        $accidentcoverInsurance = new AccidentCoverInsurance();
        $accidentcoverInsurance->full_name = $request->input('full_name');
        $accidentcoverInsurance->gender = $request->input('gender');
        $accidentcoverInsurance->marital_status = $request->input('marital_status');
        $accidentcoverInsurance->title = $request->input('title');
        $accidentcoverInsurance->rsa_id = $request->input('rsa_id');
        $accidentcoverInsurance->country = $request->input('country');
        $accidentcoverInsurance->code = $request->input('code');
        $accidentcoverInsurance->vehicle_year = $request->input('vehicle_year');
        $accidentcoverInsurance->vehicle_make = $request->input('vehicle_make');
        $accidentcoverInsurance->vehicle_model = $request->input('vehicle_model');

        // Save the MotorInsurance instance to the database
        $accidentcoverInsurance->save();
    
        // Send email
        Mail::to('eddymnemo@yahoo.com')->send(new AccidentCoverInsuranceFormSubmitted($request->all()));
    
        // Redirect back with success message
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
    
}
