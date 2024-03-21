<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ProfessionalInsuranceFormSubmitted;
use App\Models\ProfessionalInsurance; 


class ProfessionalFormController extends Controller
{
    //
    public function show()
    {
        return view('forms/business/professional');
    }

    public function store(Request $request)
    {
        // Validation Logic (You can use Laravel validation)
    
        // Create a new MotorInsurance instance and fill it with form data
        $professionalInsurance = new ProfessionalInsurance();
        $professionalInsurance->full_name = $request->input('full_name');
        $professionalInsurance->gender = $request->input('gender');
        $professionalInsurance->marital_status = $request->input('marital_status');
        $professionalInsurance->title = $request->input('title');
        $professionalInsurance->rsa_id = $request->input('rsa_id');
        $professionalInsurance->country = $request->input('country');
        $professionalInsurance->code = $request->input('code');
        $professionalInsurance->email = $request->input('email');
        $professionalInsurance->contact = $request->input('contact');
    
        // Save the MotorInsurance instance to the database
        $professionalInsurance->save();
    
        // Send email
        Mail::to('eddymnemo@yahoo.com')->send(new ProfessionalInsuranceFormSubmitted($request->all()));
    
        // Redirect back with success message
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
    
}
