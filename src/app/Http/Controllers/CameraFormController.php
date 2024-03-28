<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CameraInsuranceFormSubmitted;
use App\Models\CameraInsurance; 


class CameraFormController extends Controller
{
    //
    public function show()
    {
        return view('forms/personal/camera');
    }

    public function store(Request $request)
    {
        // Validation Logic (You can use Laravel validation)
    
        // Create a new MotorInsurance instance and fill it with form data
        $cameraInsurance = new CameraInsurance();
        $cameraInsurance->full_name = $request->input('full_name');
        $cameraInsurance->gender = $request->input('gender');
        // $motorInsurance->marital_status = $request->input('marital_status');
        $cameraInsurance->title = $request->input('title');
        $cameraInsurance->rsa_id = $request->input('rsa_id');
        $cameraInsurance->email = $request->input('email');
        $cameraInsurance->idtype = $request->input('idtype');
        $cameraInsurance->contact = $request->input('contact');
    
        // Save the MotorInsurance instance to the database
        $cameraInsurance->save();
    
        // Send email
        Mail::to('online@dmafrica.co.za')->send(new CameraInsuranceFormSubmitted($request->all()));
    
        // Redirect back with success message
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
    
}
