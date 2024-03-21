<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\BuildingInsuranceFormSubmitted;
use App\Models\BuildingInsurance; 


class BuildingFormController extends Controller
{
    //
    public function show()
    {
        return view('forms/personal/building');
    }

    public function store(Request $request)
    {
        // Validation Logic (You can use Laravel validation)
    
        // Create a new MotorInsurance instance and fill it with form data
        $buildingInsurance = new BuildingInsurance();
        $buildingInsurance->full_name = $request->input('full_name');
        $buildingInsurance->gender = $request->input('gender');
        $buildingInsurance->marital_status = $request->input('marital_status');
        $buildingInsurance->title = $request->input('title');
        $buildingInsurance->rsa_id = $request->input('rsa_id');
        $buildingInsurance->country = $request->input('country');
        $buildingInsurance->code = $request->input('code');
        $buildingInsurance->email = $request->input('email');
        $buildingInsurance->contact = $request->input('contact');
    
        // Save the MotorInsurance instance to the database
        $buildingInsurance->save();
    
        // Send email
        Mail::to('eddymnemo@yahoo.com')->send(new BuildingInsuranceFormSubmitted($request->all()));
    
        // Redirect back with success message
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
    
}
