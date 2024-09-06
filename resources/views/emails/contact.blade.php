@component('mail::message')
{{-- Ajouter un logo en haut de l'email --}}

# Nouvelle demande de contact

Vous avez reçu un nouveau message de **{{ $data['name'] }}** ({{ $data['email'] }}).

### Numéro de téléphone :
{{ $data['phone'] }}

### Message :
{{ $data['message'] }}

@component('mail::button', ['url' => 'mailto:'. $data['email']])
Répondre à {{ $data['name'] }}
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent