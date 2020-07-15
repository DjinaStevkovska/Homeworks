{{-- Dear {{ $data->name }},

Thank you for subscribing on our channel {{ $data->email }}!

 --}}






{{-- .md --}}



@component('mail::message')
Hello **{{$data->name}}**,  {{-- use double space for line break --}}
Thank you for choosing Mailtrap!

Click below to start working right now
@component('mail::button', ['url' => 'www.gtoogle.com'])
Go to your inbox
@endcomponent
Sincerely,  
Mailtrap team.
@endcomponent
