@component('mail::message')
# Mail de confirmation

Vous venez de vous inscrire sur HC House veuillez cliquer sur le lien ci-dessous si cela vient de vous
@component('mail::button', ['url' =>  route('sigup.membre.authorize', ['token'  => $customer->token, 'authorization' => 'confirmed']), 'color' => 'blue'])
	Confirmer
@endcomponent

Thanks,<br>
{{ config('app.name') }}

@endcomponent