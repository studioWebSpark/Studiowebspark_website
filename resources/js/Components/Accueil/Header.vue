<script setup>
import { ref, onMounted, onBeforeUnmount, watch } from 'vue';

// Partie Ecriture clavier
const words = ["Projets web", "Ventes en ligne", "Stratégies marketing"];
let currentWordIndex = 0;
let currentLetterIndex = 0;

const displayedText = ref("");
const typingSpeed = 100;
const erasingSpeed = 100;
const delayBeforeErase = 2000;
const delayBetweenWords = 1000;

const typeWord = () => {
    if (currentLetterIndex < words[currentWordIndex].length) {
        displayedText.value += words[currentWordIndex].charAt(currentLetterIndex);
        currentLetterIndex++;
        setTimeout(typeWord, typingSpeed);
    } else {
        setTimeout(eraseWord, delayBeforeErase);
    }
};

const eraseWord = () => {
    if (currentLetterIndex > 0) {
        displayedText.value = words[currentWordIndex].substring(0, currentLetterIndex - 1);
        currentLetterIndex--;
        setTimeout(eraseWord, erasingSpeed);
    } else {
        currentWordIndex = (currentWordIndex + 1) % words.length;
        setTimeout(typeWord, delayBetweenWords);
    }
};

onMounted(() => {
    setTimeout(typeWord, delayBetweenWords);
});

// Partie Cartes
const cards = ref([
    {
        title: 'Conception et Développement de Sites Web Personnalisés',
        description: 'Je conçois et développe des sites web sur mesure à partir de zéro, en fonction de vos besoins uniques. De la conception initiale à la mise en ligne, chaque étape est optimisée pour offrir une expérience utilisateur fluide et moderne.',
        video: '/storage/video/2.mp4',
        bgColor: 'bg-gray-900',
    },
    {
        title: 'Amélioration et Optimisation de Sites Web',
        description: 'J’améliore les sites web existants en optimisant leur performance, en mettant à jour leur design, et en ajoutant des fonctionnalités modernes pour correspondre aux dernières tendances et exigences du marché.',
        video: '/storage/video/1.mp4',
        bgColor: 'bg-gray-900',
    },
    {
        title: 'Fonctionnalités Avancées pour Booster la Productivité',
        description: 'Je développe des solutions et des fonctionnalités sur mesure pour améliorer la productivité de votre entreprise, comme des systèmes de gestion de contenu, des outils d’automatisation, et des intégrations avec des plateformes tierces.',
        video: '/storage/video/3.mp4',
        bgColor: 'bg-gray-900',
    },
]);

const currentIndex = ref(0);
const direction = ref('right');
let slideInterval = null;

const isMobile = ref(window.innerWidth <= 768);
const isDesktopOrTablet = ref(window.innerWidth > 768);
const updateDeviceType = () => {
    isMobile.value = window.innerWidth <= 768;
    isDesktopOrTablet.value = window.innerWidth > 768;
};

// Fonction pour aller à la carte suivante
const goToCard = (index) => {
    if (index !== currentIndex.value) {
        direction.value = index > currentIndex.value ? 'right' : 'left';
        currentIndex.value = index;
    }
};

// Fonction pour le slide suivant
const nextSlide = () => {
    let nextIndex = (currentIndex.value + 1) % cards.value.length;
    goToCard(nextIndex);
};

// Fonction pour le slide précédent
const prevSlide = () => {
    let prevIndex = (currentIndex.value - 1 + cards.value.length) % cards.value.length;
    goToCard(prevIndex);
};

// Fonction de démarrage du carrousel automatique
const startAutoSlide = () => {
    stopAutoSlide();
    slideInterval = setInterval(() => {
        nextSlide();
    }, 6000); // Intervalle basé sur la durée de la vidéo (6 secondes)
};

// Fonction d'arrêt du carrousel automatique
const stopAutoSlide = () => {
    if (slideInterval) {
        clearInterval(slideInterval);
    }
};

// Surveillance de la taille de l'écran pour détecter les changements entre mobile/desktop
onMounted(() => {
    startAutoSlide();
    window.addEventListener('resize', updateDeviceType);
});

onBeforeUnmount(() => {
    stopAutoSlide();
    window.removeEventListener('resize', updateDeviceType);
});

// Surveillance du changement de carte pour démarrer la vidéo
const videoRefs = ref([]);
watch(currentIndex, (newIndex, oldIndex) => {
    if (videoRefs.value[oldIndex]) {
        videoRefs.value[oldIndex].pause();
    }
    if (videoRefs.value[newIndex]) {
        videoRefs.value[newIndex].play();
    }
});

// Gestion des styles des cartes pour le carrousel
const getCardStyle = (index) => {
    const offset = index - currentIndex.value;
    const totalCards = cards.value.length;
    const slideDirection = direction.value === 'right' ? 1 : -1;

    const normalizedOffset = ((offset + totalCards) % totalCards);

    if (isMobile.value) {
        return {
            transform: 'translateX(0) scale(1)',
            opacity: 1,
            zIndex: 10,
        };
    }

    if (normalizedOffset === 0) {
        return {
            transform: 'translateX(0) scale(1)',
            opacity: 1,
            zIndex: 10,
        };
    }

    if (normalizedOffset === 1 || (currentIndex.value === totalCards - 1 && index === 0)) {
        return {
            transform: `translateX(${150 * slideDirection}px) scale(0.85)`,
            opacity: 0.7,
            zIndex: 9,
        };
    }

    if (normalizedOffset === totalCards - 1 || (currentIndex.value === 0 && index === totalCards - 1)) {
        return {
            transform: `translateX(${-150 * slideDirection}px) scale(0.85)`,
            opacity: 0.7,
            zIndex: 9,
        };
    }

    return {
        transform: 'translateX(0) scale(0.5)',
        opacity: 0,
        zIndex: 7,
    };
};

</script>

<template>

    <section class="p-4">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 mb-10">
            <div class="max-w-2xl mx-auto text-center">
                <p
                    class="mt-5 text-4xl font-bold leading-tight text-gray-900 sm:leading-tight sm:text-5xl lg:text-6xl lg:leading-tight font-pj">
                    Des services digitaux pensés pour booster vos
                    <span class="relative inline-flex sm:inline overflow-hidden">
                        <span class="relative">
                            <span
                                class="bg-gradient-to-r from-[#44BCFF] via-[#FF44EC] to-[#FF675E] blur-lg filter opacity-30 w-full h-full absolute inset-0"></span>
                            <span>{{ displayedText }}</span>
                            <span class="cursor">|</span>
                        </span>
                    </span>
                </p>
                <div class="px-8 sm:items-center sm:justify-center sm:px-0 sm:space-x-5 sm:flex mt-7">
                    <a href="#" title=""
                        class="inline-flex items-center justify-center w-full px-8 py-3 text-lg font-bold text-white transition-all duration-200 bg-gray-900 border-2 border-transparent sm:w-auto rounded-xl font-pj hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                        role="button">
                        Découvrez nos offres
                    </a>

                    <a href="/projects" title=""
                        class="inline-flex items-center justify-center w-full px-6 py-3 mt-4 text-lg font-bold text-gray-900 transition-all duration-200 border-2 border-gray-400 sm:w-auto sm:mt-0 rounded-xl font-pj focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 hover:bg-gray-900 focus:bg-gray-900 hover:text-white focus:text-white hover:border-gray-900 focus:border-gray-900"
                        role="button">

                        Proposez votre projet
                    </a>
                </div>

                <p class="p-10 text-base text-gray-500 font-inter "></p>

            </div>
        </div>

        <div class="relative w-full max-w-5xl mx-auto mt-20 h-80 mb-10">

            <div @click="prevSlide"
                class="absolute left-0 top-1/2 transform -translate-y-1/2 cursor-pointer z-20 desktop-only">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="w-10 h-10 text-black">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </div>


            <div @click="nextSlide"
                class="absolute right-0 top-1/2 transform -translate-y-1/2 cursor-pointer z-20 desktop-only">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="w-10 h-10 text-black">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </div>

            <div class="relative h-full">
                <div v-for="(card, index) in cards" :key="index"
                    class="absolute w-full h-full flex justify-center items-center transition-transform duration-700"
                    :class="{
                        'hidden': isMobile && currentIndex !== index, // Masquer les cartes non actives sur mobile
                        'block': isMobile && currentIndex === index // Afficher seulement la carte active sur mobile
                    }" :style="getCardStyle(index)">
                    <div :class="card.bgColor"
                        class="rounded-2xl p-2 pt-5 w-full max-w-lg text-white text-center shadow-lg cursor-pointer">
                        <h2 class="text-3xl font-bold mb-4">{{ card.title }}</h2>
                        <p class="mb-6">{{ card.description }}</p>
                        <div class="mt-6">
                            <video class="w-full h-auto rounded-2xl" :src="card.video" autoplay muted loop playsinline>

                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</template>

<style scoped>
.transition-transform {
    transition: transform 0.5s ease-in-out, opacity 0.5s ease-in-out;
}

@media (max-width: 768px) {
    .carousel {
        flex-direction: column;

    }

    .carousel img {
        max-width: 100%;
        height: auto;
    }

    .carousel div {
        width: 100%;

        padding: 10px;

    }
}

.cursor {
    font-weight: bold;
    font-size: 3vw;
    color: black;
    animation: blink 0.7s step-end infinite;
}

@keyframes blink {
    50% {
        opacity: 0;
    }
}


#typed-text {
    white-space: nowrap;
    overflow: hidden;
    display: inline-block;
    font-family: inherit;
    font-size: inherit;
}


@media (max-width: 768px) {
    .desktop-only {
        display: none;
    }
}


</style>