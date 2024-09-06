@component('mail::message')
# Confirmation de votre demande de contact

Bonjour **{{ $data['name'] }}**,

Nous avons bien reçu votre demande de contact.<br>
Merci de nous avoir contactés ! <br> 
Nous allons vous recontacter sous peu via le numéro **{{ $data['phone'] }}**.

Voici un récapitulatif de votre demande :

### Nom : {{ $data['name'] }}

### Email : {{ $data['email'] }}

### Numéro de téléphone : {{ $data['phone'] }}

### Message : {{ $data['message'] }}

Nous vous remercions pour votre confiance.

@component('mail::button', ['url' => config('app.url')])
Visiter notre site
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent