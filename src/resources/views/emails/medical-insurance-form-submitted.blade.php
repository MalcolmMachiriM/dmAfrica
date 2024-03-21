@component('mail::message')
# New Customer:

Here are the details submitted via the Motor Vehicle form:

- **First Name:** {{ $formData['firstname'] }}
- **Last Name:** {{ $formData['lastname'] }}
- **Contact Number:** {{ $formData['phone'] }}
- **Email:** {{ $formData['email'] }}
- **RSA ID Number:** {{ $formData['rsaid'] }}

@if (isset($formData['income']))
- **Income:** {{ $formData['income'] }}
@endif
<br>
Thanks,<br>

@endcomponent
