<script setup>
import { onMounted } from 'vue';

// Fonction pour initier l'effet de défilement infini
const startInfiniteScroll = () => {
    const track = document.querySelector('.partner-track');

    // Dupliquer le contenu pour créer l'effet de défilement infini
    const clone = track.innerHTML;
    track.innerHTML += clone;

    let scrollAmount = 0;
    const scrollSpeed = 1; // Ajuste cette valeur pour la vitesse du défilement

    // Fonction pour faire défiler les logos
    const scrollLogos = () => {
        scrollAmount -= scrollSpeed;
        track.style.transform = `translateX(${scrollAmount}px)`;

        // Réinitialiser le défilement lorsque le premier ensemble de logos est complètement sorti de l'écran
        if (Math.abs(scrollAmount) >= track.scrollWidth / 2) {
            scrollAmount = 0;
        }

        requestAnimationFrame(scrollLogos);
    };

    // Lancer l'animation de défilement
    requestAnimationFrame(scrollLogos);
};

// Lancer le défilement au montage du composant
onMounted(() => {
    startInfiniteScroll();
});
</script>


<template>
    <section class="partner-section">
        <div class="partner-slider mt-20 p-10">
            <div class="partner-track">
                <!-- Logos en SVG ou PNG -->
                <img src="storage/logo/linkedin.png" alt="logo_linkedin" />
                <img src="storage/logo/instagram.png" alt="logo_instagram" />
                <img src="storage/logo/discord.png" alt="logo_discord" />
                <img src="storage/logo/pinterest.png" alt="logo_pinterest" />
                <img src="storage/logo/github.png" alt="logo_github" />
                <img src="storage/logo/figma.png" alt="logo_figma" />
                <img src="storage/logo/gmail.png" alt="logo_gmail" />
                <img src="storage/logo/vscode.png" alt="logo_vscode" />
                <img src="storage/logo/shopify.png" alt="logo_shopify" />
                <img src="storage/logo/tailwindcss.png" alt="logo_tailwindcss" />
                <img src="storage/logo/google.png" alt="logo_google" />

                <!-- Dupliquer les logos pour l'effet de défilement infini -->

                <img src="storage/logo/linkedin.png" alt="logo_linkedin" />
                <img src="storage/logo/instagram.png" alt="logo_instagram" />
                <img src="storage/logo/discord.png" alt="logo_discord" />
                <img src="storage/logo/pinterest.png" alt="logo_pinterest" />
                <img src="storage/logo/github.png" alt="logo_github" />
                <img src="storage/logo/figma.png" alt="logo_figma" />
                <img src="storage/logo/gmail.png" alt="logo_gmail" />
                <img src="storage/logo/vscode.png" alt="logo_vscode" />
                <img src="storage/logo/shopify.png" alt="logo_shopify" />
                <img src="storage/logo/tailwindcss.png" alt="logo_tailwindcss" />
                <img src="storage/logo/google.png" alt="logo_google" />

            </div>
        </div>
    </section>
</template>


<style scoped>
.partner-section {
    padding: 20px 0;
    background-color: #f9f9f9;
    overflow: hidden;
    /* Cache les éléments en dehors de la vue */
}

.partner-slider {
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    /* Cache les éléments en dehors de la vue */
}

.partner-track {
    display: flex;
    animation: scrollLeft 30s linear infinite;
    /* Animation continue vers la gauche */
    width: max-content;
    /* La largeur s'ajuste en fonction du contenu */
}

.partner-track img {
    max-width: 50px;
    /* Taille des logos */
    margin: 0 40px;
    /* Espacement entre les logos */
    filter: grayscale(100%);
    /* Griser les logos */
    opacity: 0.6;
    transition: all 0.3s ease-in-out;
}

.partner-track img:hover {
    filter: grayscale(0%);
    /* Retirer l'effet grisé au survol */
    opacity: 1;
}

@keyframes scrollLeft {
    0% {
        transform: translateX(0);
        /* Position de départ */
    }

    100% {
        transform: translateX(-50%);
        /* Déplace de 50% vers la gauche */
    }
}
</style>