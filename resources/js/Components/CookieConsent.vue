<template>
    <div>
        <!-- Fenêtre de consentement pour les cookies -->
        <div v-if="!consentementDonne"
            class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 z-50">
            <div class="bg-white border border-gray-300 rounded-lg shadow-lg p-6 max-w-sm mx-auto">
                <p class="text-sm text-gray-700 mb-4">
                    Nous utilisons des cookies pour améliorer votre expérience. En continuant, vous acceptez notre
                    utilisation des cookies.
                    <a href="/politique-de-vente" class="text-blue-500 underline hover:text-blue-700">Voir les
                        politiques de vente</a>.
                </p>
                <div class="flex justify-end">
                    <button @click="donnerConsentement"
                        class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Accepter</button>
                </div>
            </div>
        </div>

        <!-- Notification de succès après acceptation des cookies -->
        <div v-if="notificationVisible"
            class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 z-50">
            <div class="bg-green-500 text-white rounded shadow-lg p-4">
                Merci d'avoir accepté les cookies.
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';

// Déclaration des variables de réactivité
const consentementDonne = ref(false);
const notificationVisible = ref(false);

// Méthode pour définir un cookie
const setCookie = (name, value, days) => {
    const date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    const expires = "expires=" + date.toUTCString();
    document.cookie = `${name}=${value};${expires};path=/;Secure;SameSite=Strict`;
};

// Méthode pour récupérer un cookie
const getCookie = (name) => {
    const nameEQ = name + "=";
    const ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
};

// Méthode pour gérer l'acceptation des cookies
const donnerConsentement = () => {
    setCookie("cookie_consent", "true", 365);
    consentementDonne.value = true;
    notificationVisible.value = true;

    // Masquer la notification après 3 secondes
    setTimeout(() => {
        notificationVisible.value = false;
    }, 1500);
};

// Au chargement de la page, vérifier si l'utilisateur a déjà donné son consentement
onMounted(() => {
    consentementDonne.value = getCookie("cookie_consent") === "true";
});
</script>

<style scoped>
/* Styles personnalisés pour le modal et la notification */
</style>