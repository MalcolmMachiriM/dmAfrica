<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\FleetCoverInsuranceFormSubmitted;
use App\Models\FleetCoverInsurance; 


class FleetCoverFormController extends Controller
{
    //
    public function show()
    {
        return view('forms/business/fleet-cover');
    }

    public function store(Request $request)
    {
        // Validation Logic (You can use Laravel validation)
    
        // Create a new MotorInsurance instance and fill it with form data
       
        $fleetcoverInsurance = new FleetCoverInsurance();
        $fleetcoverInsurance->full_name = $request->input('full_name');
        $fleetcoverInsurance->gender = $request->input('gender');
        $fleetcoverInsurance->marital_status = $request->input('marital_status');
        $fleetcoverInsurance->title = $request->input('title');
        $fleetcoverInsurance->rsa_id = $request->input('rsa_id');
        $fleetcoverInsurance->country = $request->input('country');
        $fleetcoverInsurance->code = $request->input('code');
        $fleetcoverInsurance->email = $request->input('email');
        $fleetcoverInsurance->contact = $request->input('contact');
    
        // Save the MotorInsurance instance to the database
        $fleetcoverInsurance->save();
    
        // Send email
        Mail::to('eddymnemo@yahoo.com')->send(new FleetCoverInsuranceFormSubmitted($request->all()));
    
        // Redirect back with success message
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
    
}
