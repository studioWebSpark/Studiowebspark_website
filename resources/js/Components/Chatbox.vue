<script setup>
import { onMounted } from 'vue';

// API Tawk.to pour le chat en direct avec un délai de 15 secondes
onMounted(() => {
    // Retarder l'exécution de l'intégration de Tawk.to de 15 secondes (15000 millisecondes)
    setTimeout(() => {
        var Tawk_API = Tawk_API || {};
        var Tawk_LoadStart = new Date();

        (function () {
            var s1 = document.createElement('script'),
                s0 = document.getElementsByTagName('script')[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/66d32f8cea492f34bc0c341a/1i6kh0e8f'; // Remplacez par votre propre ID Tawk.to
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    }, 10000); 
});
</script>

<template>
    <section>
        <div class="container mx-auto p-4">
            <!-- Contenu de la page -->

            <!-- Chat en direct -->
            <section>
                <div id="live-chat" class="fixed bottom-4 right-4">
                    <!-- Le script pour le chat sera injecté ici -->
                </div>
            </section>
        </div>
    </section>

</template>

<style scoped>
#live-chat {
    z-index: 9000;
    /* Assurez-vous que le chatbox n'interfère pas avec le contenu */
}
</style>
