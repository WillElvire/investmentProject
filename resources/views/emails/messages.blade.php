@component('mail::message')
# Hey admin, vous venez de recevoir un nouveau messsage provenant de votre site :
-{{ $contact->name }}
-{{ $contact->email }}
-{{ $contact->subject }}
@component('mail::panel')
	{{ $contact->message }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
