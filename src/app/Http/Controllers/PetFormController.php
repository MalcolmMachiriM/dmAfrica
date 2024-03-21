<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\PetInsuranceFormSubmitted;
use App\Models\PetInsurance; 


class PetFormController extends Controller
{
    //
    public function show()
    {
        return view('forms/personal/pet');
    }
                                                                                                                        
    public function store(Request $request)
    {
        // Validation Logic (You can use Laravel validation)
    
        // Create a new MotorInsurance instance and fill it with form data
        $petInsurance = new PetInsurance();
        $petInsurance->full_name = $request->input('full_name');
        $petInsurance->gender = $request->input('gender');
        $petInsurance->marital_status = $request->input('marital_status');
        $petInsurance->title = $request->input('title');
        $petInsurance->rsa_id = $request->input('rsa_id');
        $petInsurance->country = $request->input('country');
        $petInsurance->code = $request->input('code');
        $petInsurance->email = $request->input('email');
        $petInsurance->contact = $request->input('contact');
    
        // Save the MotorInsurance instance to the database
        $petInsurance->save();
    
        // Send email
        Mail::to('eddymnemo45@gmail.com')->send(new PetInsuranceFormSubmitted($request->all()));
    
        // Redirect back with success message
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
    
}
