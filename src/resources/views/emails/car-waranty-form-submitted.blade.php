@component('mail::message')
# New Customer:

Here are the details submitted via the Car Waranty form:

- **Full Name:** {{ $formData['full_name'] }}
- **Gender:** {{ $formData['gender'] }}

@if (isset($formData['marital_status']))
- **Marital Status:** {{ $formData['marital_status'] }}
@endif

- **Title:** {{ $formData['title'] }}
- **RSA ID Number:** {{ $formData['rsa_id'] }}
- **Issuing Country** {{ $formData['country'] }}
- **Postal Code:** {{ $formData['code'] }}
- **Vehicle Year:** {{ $formData['vehicle_year'] }}
- **Vehicle Make:** {{ $formData['vehicle_make'] }}
- **Vehicle Model:** {{ $formData['vehicle_model'] }}

<br>
Thanks,<br>

@endcomponent
