@component('mail::message')
# New Customer:

Here are the details submitted via the Building Insurance form:

- **Full Name:** {{ $formData['full_name'] }}
- **Gender:** {{ $formData['gender'] }}

@if (isset($formData['marital_status']))
- **Marital Status:** {{ $formData['marital_status'] }}
@endif

- **Title:** {{ $formData['title'] }}
- **RSA ID Number:** {{ $formData['rsa_id'] }}
- **Issuing Country:** {{ $formData['country'] }}
- **Postal Code:** {{ $formData['code'] }}
- **Email:** {{ $formData['email'] }}
- **Contact:** {{ $formData['contact'] }}
<br>
Thanks,<br>

@endcomponent
