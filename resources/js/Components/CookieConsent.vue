<template>
    <div>
        <div v-if="!consentementDonne" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 z-50">
            <div class="bg-white border border-gray-300 rounded-lg shadow-lg p-6 max-w-sm mx-auto">
                <p class="text-sm text-gray-700 mb-4">
                    Nous utilisons des cookies pour améliorer votre expérience. En continuant, vous acceptez notre utilisation des cookies.
                    <a href="/politique-de-vente" class="text-blue-500 underline hover:text-blue-700">Voir les politiques de vente</a>.
                </p>
                <div class="flex justify-end">
                    <button @click="donnerConsentement($event)" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Accepter</button>
                </div>
            </div>
        </div>
        <div v-if="notificationVisible" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 z-50">
            <div class="bg-green-500 text-white rounded shadow-lg p-4">
                Merci d'avoir accepté les cookies.
                <button @click="fermerNotification" class="ml-4 bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">Fermer</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            consentementDonne: false,
            notificationVisible: false,
        };
    },
    created() {
        // Vérifier si l'utilisateur a déjà donné son consentement
        this.consentementDonne = this.getCookie("cookie_consent") === "true";
    },
    methods: {
        donnerConsentement(event) {
            // Empêcher le comportement par défaut du bouton
            event.preventDefault();
            // Définir le consentement avec une durée de 365 jours
            this.setCookie("cookie_consent", "true", 365);
            this.consentementDonne = true;
            this.notificationVisible = true;
            // Faire disparaître la notification après 5 secondes
            setTimeout(() => {
                this.notificationVisible = false;
            }, 5000);
        },
        fermerNotification() {
            this.notificationVisible = false;
        },
        setCookie(name, value, days) {
            const date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            const expires = "expires=" + date.toUTCString();
            document.cookie = `${name}=${value};${expires};path=/;Secure;SameSite=Strict`;
        },
        getCookie(name) {
            const nameEQ = name + "=";
            const ca = document.cookie.split(';');
            for (let i = 0; i < ca.length; i++) {
                let c = ca[i];
                while (c.charAt(0) === ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }
    }
};
</script>

<style scoped>
/* Ajoutez vos styles personnalisés ici */
</style>