<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CombinedBusinessInsuranceFormSubmitted;
use App\Models\CombinedBusinessInsurance; 


class CombinedBusinessFormController extends Controller
{
    //
    public function show()
    {
        return view('forms/business/combined-business');
    }

    public function store(Request $request)
    {
        // Validation Logic (You can use Laravel validation)
    
        // Create a new MotorInsurance instance and fill it with form data
        $combinedbusinessInsurance = new CombinedBusinessInsurance();
        $combinedbusinessInsurance->full_name = $request->input('full_name');
        $combinedbusinessInsurance->gender = $request->input('gender');
        $combinedbusinessInsurance->marital_status = $request->input('marital_status');
        $combinedbusinessInsurance->title = $request->input('title');
        $combinedbusinessInsurance->rsa_id = $request->input('rsa_id');
        $combinedbusinessInsurance->country = $request->input('country');
        $combinedbusinessInsurance->code = $request->input('code');
        $combinedbusinessInsurance->email = $request->input('email');
        $combinedbusinessInsurance->contact = $request->input('contact');
    
        // Save the MotorInsurance instance to the database
        $combinedbusinessInsurance->save();
    
        // Send email
        Mail::to('eddymnemo@yahoo.com')->send(new CombinedBusinessInsuranceFormSubmitted($request->all()));
    
        // Redirect back with success message
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
    
}
