<!-- resources/views/motor-insurance/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Motor Insurance Form</h2>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form action="{{ route('motor-insurance.store') }}" method="POST">
    @csrf
    <!-- Form fields -->
    <div class="form-group">
        <label for="full_name">Full Name</label>
        <input type="text" class="form-control" id="full_name" name="full_name" required>
    </div>

    <div class="form-group">
        <label for="gender">Gender</label>
        <select class="form-control" id="gender" name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
    </div>

    <div class="form-group">
        <label for="marital_status">Marital Status</label>
        <select class="form-control" id="gender" name="gender" required>
            <option value="male">Single</option>
            <option value="female">Married</option>
            <option value="female">Widowed</option>
        </select>
    </div>
    <div class="form-group">
        <label for="rsa_id">RSA ID Number</label>
        <input type="text" class="form-control" id="rsa_id" name="rsa_id" required>
    </div>

    <div class="form-group">
        <label for="license_code">License Code</label>
        <input type="text" class="form-control" id="license_code" name="license_code" required>
    </div>
    <div class="form-group">
        <label for="home_address">Home Address</label>
        <input type="text" class="form-control" id="home_address" name="home_address" required>
    </div>
    <div class="form-group">
        <label for="vehicle_year">Vehicle Year</label>
        <input type="text" class="form-control" id="vehicle_year" name="vehicle_year" required>
    </div>
    <div class="form-group">
        <label for="vehicle_make">Vehicle Make</label>
        <input type="text" class="form-control" id="vehicle_make" name="vehicle_make" required>
    </div>
    <div class="form-group">
        <label for="vehicle_model">Vehicle Model</label>
        <input type="text" class="form-control" id="vehicle_model" name="vehicle_model" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="contact">Contact</label>
        <input type="text" class="form-control" id="contact" name="contact" required>
    </div>

    <!-- Add more form fields -->

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

    </div>
@endsection
