<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConstructionInsuranceFormSubmitted;
use App\Models\ConstructionInsurance; 


class ConstructionFormController extends Controller
{
    //
    public function show()
    {
        return view('forms/business/construction');
    }

    public function store(Request $request)
    {
        // Validation Logic (You can use Laravel validation)
    
        // Create a new MotorInsurance instance and fill it with form data
        $constructionInsurance = new ConstructionInsurance();
        $constructionInsurance->full_name = $request->input('full_name');
        $constructionInsurance->gender = $request->input('gender');
        $constructionInsurance->marital_status = $request->input('marital_status');
        $constructionInsurance->title = $request->input('title');
        $constructionInsurance->rsa_id = $request->input('rsa_id');
        $constructionInsurance->country = $request->input('country');
        $constructionInsurance->code = $request->input('code');
        $constructionInsurance->email = $request->input('email');
        $constructionInsurance->contact = $request->input('contact');
    
        // Save the MotorInsurance instance to the database
        $constructionInsurance->save();
    
        // Send email
        Mail::to('eddymnemo@yahoo.com')->send(new ConstructionInsuranceFormSubmitted($request->all()));
    
        // Redirect back with success message
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
    
}
