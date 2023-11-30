@component('mail::message')
# Your Trannsaction has been confirmed!

H1, {{ $checkout->User->name }}
<br>
Your Transaction has been confirmed, now you can enjoy the benefits of <b>{{ $checkout->Camp->title }}</b>camp.

@component('mail::button', ['url' => route('user.dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
