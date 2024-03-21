@component('mail::message')
# New Customer:

Here are the details submitted via the Motor Vehicle form:

- **Full Name:** {{ $formData['full_name'] }}
- **Gender:** {{ $formData['gender'] }}

@if (isset($formData['marital_status']))
- **Marital Status:** {{ $formData['marital_status'] }}
@endif

- **Title:** {{ $formData['title'] }}
- **RSA ID Number:** {{ $formData['rsa_id'] }}
- **License Code:** {{ $formData['license_code'] }}
- **Home Address:** {{ $formData['home_address'] }}
- **Vehicle Year:** {{ $formData['vehicle_year'] }}
- **Vehicle Make:** {{ $formData['vehicle_make'] }}
- **Vehicle Model:** {{ $formData['vehicle_model'] }}
- **Email:** {{ $formData['email'] }}
- **Contact:** {{ $formData['contact'] }}
<br>
Thanks,<br>

@endcomponent
