@component('mail::message')
# New Customer:

Here are the details submitted via the Mobile Devices Insurance form:

- **Full Name:** {{ $formData['full_name'] }}
- **Gender:** {{ $formData['gender'] }}
- **Title:** {{ $formData['title'] }}
- **RSA ID Number:** {{ $formData['rsa_id'] }}
- **Email:** {{ $formData['email'] }}
@if (isset($formData['idtype']))
- **Identity Type:** {{ $formData['idtype'] }}
@endif
- **Contact:** {{ $formData['contact'] }}
<br>
Thanks,<br>

@endcomponent
