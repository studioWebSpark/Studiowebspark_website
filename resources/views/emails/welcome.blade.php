@component('mail::message')
# Bienvenue, {{ $user->name }} !

Nous sommes ravis de vous compter parmi nous ! Voici quelques étapes pour bien démarrer :

1. **Complétez votre profil** : Ajoutez des informations supplémentaires pour personnaliser votre expérience.
2. **Explorez le tableau de bord** : Gagnez en productivité en utilisant les outils que nous mettons à votre disposition.
3. **Obtenez de l'aide** : Si vous avez des questions, notre équipe est là pour vous aider.

@component('mail::button', ['url' => url('/dashboard')])
Accéder à votre tableau de bord
@endcomponent

Merci de nous avoir rejoints,<br>
{{ config('app.name') }}
@endcomponent