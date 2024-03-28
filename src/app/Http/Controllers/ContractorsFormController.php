<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContractorsInsuranceFormSubmitted;
use App\Models\ContractorsInsurance; 


class ContractorsFormController extends Controller
{
    //
    public function show()
    {
        return view('forms/business/contractors');
    }

    public function store(Request $request)
    {
        // Validation Logic (You can use Laravel validation)
    
        // Create a new MotorInsurance instance and fill it with form data
        $contractorsInsurance = new ContractorsInsurance();
        $contractorsInsurance->full_name = $request->input('full_name');
        $contractorsInsurance->gender = $request->input('gender');
        $contractorsInsurance->marital_status = $request->input('marital_status');
        $contractorsInsurance->title = $request->input('title');
        $contractorsInsurance->rsa_id = $request->input('rsa_id');
        $contractorsInsurance->country = $request->input('country');
        $contractorsInsurance->code = $request->input('code');
        $contractorsInsurance->email = $request->input('email');
        $contractorsInsurance->contact = $request->input('contact');
    
        // Save the MotorInsurance instance to the database
        $contractorsInsurance->save();
    
        // Send email
        Mail::to('online@dmafrica.co.za')->send(new ContractorsInsuranceFormSubmitted($request->all()));
    
        // Redirect back with success message
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
    
}
