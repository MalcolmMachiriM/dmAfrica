<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MedicalInsuranceFormSubmitted;
use App\Models\MedicalInsurance; 


class MedicalFormController extends Controller
{
    //
    public function show()
    {
        return view('forms/personal/medical');
    }

    public function store(Request $request)
    {
        // Validation Logic (You can use Laravel validation)
    
        // Create a new MedicalInsurance instance and fill it with form data
        $medicalInsurance = new MedicalInsurance();
        $medicalInsurance->firstname = $request->input('firstname');
        $medicalInsurance->lastname = $request->input('lastname');
        $medicalInsurance->phone = $request->input('phone');
        $medicalInsurance->email = $request->input('email');
        $medicalInsurance->rsaid = $request->input('rsaid');
        $medicalInsurance->income = $request->input('income');
        
    
        // Save the MotorInsurance instance to the database
        $medicalInsurance->save();
    
        // Send email
        Mail::to('eddymnemo@yahoo.com')->send(new MedicalInsuranceFormSubmitted($request->all()));
    
        // Redirect back with success message
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
    
}
