@component('mail::message')
# Bonjour

Vous avez reçu un email de la part de {{ $data['name'] }} ({{ $data['email'] }})

message
{{ $data['message'] }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
