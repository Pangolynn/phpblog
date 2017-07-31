@component('mail::message')
#Hi There!

Thanks for signing up! Please click the following 
button to confirm your email and complete your registration.

@component('mail::button', ['url' => 'http://127.0.0.1:8000/'])
Confirm Email
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
