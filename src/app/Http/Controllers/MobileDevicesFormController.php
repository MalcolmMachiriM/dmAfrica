<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MobileDevicesInsuranceFormSubmitted;
use App\Models\MobileDevicesInsurance; 


class MobileDevicesFormController extends Controller
{
    //
    public function show()
    {
        return view('forms/personal/mobile-devices');
    }

    public function store(Request $request)
    {
        // Validation Logic (You can use Laravel validation)
    
        // Create a new MotorInsurance instance and fill it with form data

        $mobiledevicesInsurance = new MobileDevicesInsurance();
        $mobiledevicesInsurance->full_name = $request->input('full_name');
        $mobiledevicesInsurance->gender = $request->input('gender');
        $mobiledevicesInsurance->title = $request->input('title');
        $mobiledevicesInsurance->rsa_id = $request->input('rsa_id');
        $mobiledevicesInsurance->email = $request->input('email');
        $mobiledevicesInsurance->idtype = $request->input('idtype');
        $mobiledevicesInsurance->contact = $request->input('contact');
    
    
        // Save the MotorInsurance instance to the database
        $mobiledevicesInsurance->save();
    
        // Send email
        Mail::to('eddymnemo@yahoo.com')->send(new MobileDevicesInsuranceFormSubmitted($request->all()));
    
        // Redirect back with success message
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
    
}
