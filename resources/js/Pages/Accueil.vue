<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { onMounted , ref , onBeforeUnmount , watch } from 'vue';
import CookieConsent from '@/Components/CookieConsent.vue';
import Footer from '@/Components/Footer.vue';
import Services from '@/Components/Services.vue';

const cards = ref([
    {
        title: 'Build an e-mail list',
        description: 'Free yourself from expensive advertising costs and build up valuable target group ownership.',
        image: '/storage/freelances/2.png',
        bgColor: 'bg-red-500',
    },
    {
        title: 'Generate appointments',
        description: 'Create case studies, quotes, or appointment funnels for high-quality appointments.',
        image: '/storage/freelances/2.png',
        bgColor: 'bg-blue-500',
    },
    {
        title: 'Boost productivity',
        description: 'Our solutions help you focus on what really matters, improving your productivity.',
        image: '/storage/freelances/2.png',
        bgColor: 'bg-yellow-500',
    }
]);

// Variables de contrôle
const currentIndex = ref(0);
const direction = ref('right');
let slideInterval = null;

// Détecter si c'est mobile ou desktop/tablette
const isMobile = ref(window.innerWidth <= 768);
const isDesktopOrTablet = ref(window.innerWidth > 768);
const updateDeviceType = () => {
    isMobile.value = window.innerWidth <= 768;
    isDesktopOrTablet.value = window.innerWidth > 768;
};

// Fonction pour aller à une carte précise et définir la direction du slide
const goToCard = (index) => {
    const totalCards = cards.value.length;
    if (index !== currentIndex.value) {
        if (index > currentIndex.value) {
            direction.value = 'right';
        } else {
            direction.value = 'left';
        }
        currentIndex.value = index;
    }
};

// Fonction pour passer à la carte suivante
const nextSlide = () => {
    let nextIndex = (currentIndex.value + 1) % cards.value.length;
    direction.value = 'right';
    goToCard(nextIndex);
};

// Fonction pour revenir à la carte précédente
const prevSlide = () => {
    let prevIndex = (currentIndex.value - 1 + cards.value.length) % cards.value.length;
    direction.value = 'left';
    goToCard(prevIndex);
};

// Fonction pour automatiser le slide toutes les 10 secondes
const startAutoSlide = () => {
    stopAutoSlide(); // Arrêter tout slide en cours
    slideInterval = setInterval(() => {
        nextSlide(); // Passer automatiquement à la carte suivante
    }, 10000); // Slide toutes les 10 secondes
};

// Fonction pour arrêter le slide automatique
const stopAutoSlide = () => {
    if (slideInterval) {
        clearInterval(slideInterval);
    }
};

// Gestion du slide automatique au montage et en fonction du type de device
onMounted(() => {
    startAutoSlide();
    window.addEventListener('resize', updateDeviceType);
});

// Arrêter l'automatisation et l'écouteur d'événement lors de la destruction
onBeforeUnmount(() => {
    stopAutoSlide();
    window.removeEventListener('resize', updateDeviceType);
});

// Fonction pour obtenir le style dynamique de chaque carte
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

const words = ["Projets web", "Ventes en ligne", "Stratégies marketing"];
let currentWordIndex = 0;
let currentLetterIndex = 0;

const displayedText = ref("");
const typingSpeed = 100; // Vitesse de l'écriture
const erasingSpeed = 100; // Vitesse d'effacement
const delayBeforeErase = 2000; // Temps d'attente avant l'effacement
const delayBetweenWords = 1000; // Temps d'attente entre les mots

// Fonction pour taper les lettres du mot
const typeWord = () => {
    if (currentLetterIndex < words[currentWordIndex].length) {
        displayedText.value += words[currentWordIndex].charAt(currentLetterIndex);
        currentLetterIndex++;
        setTimeout(typeWord, typingSpeed);
    } else {
        setTimeout(eraseWord, delayBeforeErase); // Attendre avant d'effacer
    }
};

// Fonction pour effacer les lettres du mot
const eraseWord = () => {
    if (currentLetterIndex > 0) {
        displayedText.value = words[currentWordIndex].substring(0, currentLetterIndex - 1);
        currentLetterIndex--;
        setTimeout(eraseWord, erasingSpeed);
    } else {
        currentWordIndex = (currentWordIndex + 1) % words.length; // Passer au mot suivant
        setTimeout(typeWord, delayBetweenWords); // Commencer à écrire le prochain mot
    }
};

// Démarrer l'effet d'écriture quand le composant est monté
onMounted(() => {
    setTimeout(typeWord, delayBetweenWords);
});
// API Tawk.to pour le chat en direct
onMounted(() => {
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
});

// Variable pour suivre l'étape active
const activeStep = ref(0);

// Références pour la ligne pointillée
const dashOffset = ref(100);
const totalLength = ref(0);
const pathLine = ref(null);

// Fonction pour animer les étapes
const animateSteps = () => {
    for (let i = 1; i <= 3; i++) {
        setTimeout(() => {
            activeStep.value = i;
        }, i * 1000);  // Chaque étape devient active après 1 seconde
    }
};

// Fonction pour animer la ligne pointillée
const animateLine = () => {
    const path = pathLine.value;
    dashOffset.value = totalLength.value;

    // Animation progressive pour révéler la ligne
    let step = 0;
    const interval = setInterval(() => {
        if (step >= totalLength.value) {
            clearInterval(interval);

            // Réinitialiser l'animation et redémarrer après un délai
            setTimeout(() => {
                dashOffset.value = totalLength.value;  // Réinitialiser dashOffset pour masquer la ligne
                activeStep.value = 0;  // Réinitialiser l'étape
                animateLine();  // Redémarrer l'animation après 1 seconde
                animateSteps(); // Redémarrer les étapes
            }, 2000);  // Recommencer après 1 seconde
        } else {
            dashOffset.value = totalLength.value - step;
            step += 5;  // Ajuster cette valeur pour contrôler la vitesse de l'animation
        }
    }, 25);  // Temps entre chaque étape de l'animation
};

// Lors du montage, on initialise la longueur totale et lance l'animation
onMounted(() => {
    const path = pathLine.value;
    totalLength.value = path.getTotalLength();

    // Initialiser stroke-dasharray et stroke-dashoffset
    path.style.strokeDasharray = `${totalLength.value}`;
    dashOffset.value = totalLength.value;

    // Lancer l'animation des étapes et de la ligne
    animateLine();
    animateSteps();
});

// Détecter si l'écran est en mode mobile
const issMobile = ref(false);

// Fonction pour vérifier la taille de l'écran
const checkMobile = () => {
    issMobile.value = window.innerWidth <= 700;  // Considérer les écrans de 768px ou moins comme des mobiles
};

// Ajout des événements lors du montage et nettoyage
onMounted(() => {
    checkMobile();  // Vérifier au moment du montage
    window.addEventListener('resize', checkMobile);  // Écouter les redimensionnements pour mettre à jour l'état
});

onBeforeUnmount(() => {
    window.removeEventListener('resize', checkMobile);  // Nettoyer l'événement lors de la destruction du composant
})
</script>
<style scoped>
/* Ajoutez vos styles personnalisés ici */
#live-chat {
    z-index: 9999;
    /* Assurez-vous que le chatbox n'interfère pas avec le contenu */
}

.transition-transform {
    transition: transform 0.5s ease-in-out, opacity 0.5s ease-in-out;
}

@media (max-width: 768px) {
    .carousel {
        flex-direction: column;
        /* Stack les cartes verticalement sur mobile */
    }

    .carousel img {
        max-width: 100%;
        /* Images s'adaptent à la taille de l'écran */
        height: auto;
    }

    .carousel div {
        width: 100%;
        /* Les cartes prennent toute la largeur sur mobile */
        padding: 10px;
        /* Espace réduit sur mobile */
    }
}

.cursor {
    font-weight: bold;
    font-size: 55px;
    color: black;
    animation: blink 0.7s step-end infinite;
}

@keyframes blink {
    50% {
        opacity: 0;
    }
}

/* Stylisation de base pour les mots dynamiques */
#typed-text {
    white-space: nowrap;
    overflow: hidden;
    display: inline-block;
    font-family: inherit;
    font-size: inherit;
}

/* Style des étapes avant animation */


/* Animation lors du changement de couleur */
.bg-green-500 {
    background-color: #48bb78 !important;
}

.border-green-500 {
    border-color: #48bb78 !important;
}

.partner-section {
    padding: 20px 0;
    background-color: #f9f9f9;
    overflow: hidden;
    /* Masquer les éléments qui débordent */
}

.partner-slider {
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
}

.partner-track {
    display: flex;
    animation: scrollLeft 20s linear infinite;
    /* Défilement continu */
}

.partner-track img {
    max-width: 150px;
    /* Largeur des logos */
    margin: 0 20px;
    /* Espace entre les logos */
}

@keyframes scrollLeft {
    0% {
        transform: translateX(0);
    }

    100% {
        transform: translateX(-100%);
    }
}

</style>

<template>

    <Head title="Accueil" />

    <AuthenticatedLayout>
        <CookieConsent />

        //Header
        <section class="pt-2 mb-20">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 mb-10">
                <div class="max-w-2xl mx-auto text-center">
                    <p
                        class="mt-5 text-4xl font-bold leading-tight text-gray-900 sm:leading-tight sm:text-5xl lg:text-6xl lg:leading-tight font-pj">
                        Des services digitaux pensés pour booster vos
                        <span class="relative inline-flex sm:inline overflow-hidden">
                            <!-- Gradient coloré -->

                            <!-- Texte dynamique avec effet machine à écrire -->
                            <span class="relative">
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

                    <p class="p-5 text-base text-gray-500 font-inter">Première consultation gratuite · Pas de carte de
                        crédit requise</p>

                </div>
            </div>

            <div class="relative w-full max-w-5xl mx-auto mt-20 h-80 mb-10">
                <!-- Flèche de gauche (toujours visible) -->
                <div @click="prevSlide" class="absolute left-0 top-1/2 transform -translate-y-1/2 cursor-pointer z-20">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="w-10 h-10 text-black">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </div>

                <!-- Flèche de droite (toujours visible) -->
                <div @click="nextSlide" class="absolute right-0 top-1/2 transform -translate-y-1/2 cursor-pointer z-20">
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
                            class="rounded-lg p-8 w-full max-w-lg text-white text-center shadow-lg cursor-pointer">
                            <h2 class="text-3xl font-bold mb-4">{{ card.title }}</h2>
                            <p class="mb-6">{{ card.description }}</p>
                            <a href="#" class="text-white underline">Learn more</a>
                            <div class="mt-6">
                                <img :src="card.image" alt="Card image" class="w-full h-auto">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        // Partenaires
        <section class="partner-section mt-10">
            
            <div class="partner-slider mt-10">
                <div class="partner-track">
                    <!-- Les logos de partenaires -->
                    <img src="https://cdn.rareblocks.xyz/collection/celebration/images/integration/3/gmail-logo.png"
                        alt="Partenaire 1" />
                    <img src="https://cdn.rareblocks.xyz/collection/celebration/images/integration/3/shopify-logo.png"
                        alt="Partenaire 2" />
                    <img src="path_to_image3.png" alt="Partenaire 3" />
                    <img src="path_to_image4.png" alt="Partenaire 4" />
                    <img src="path_to_image5.png" alt="Partenaire 5" />
                    <!-- <!-- Répéter les images pour un défilement infini -->
                    <img src="path_to_image1.png" alt="Partenaire 1" />
                    <img src="path_to_image2.png" alt="Partenaire 2" />
                    <img src="path_to_image3.png" alt="Partenaire 3" />
                    <img src="path_to_image4.png" alt="Partenaire 4" />
                    <img src="path_to_image5.png" alt="Partenaire 5" />
                </div>
            </div>
        </section>



        // Step
        <section class="py-20 sm:py-16 lg:py-24 ">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="max-w-2xl mx-auto text-center">
                    <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">
                        Comment ça marche ?
                    </h2>
                    <p class="max-w-lg mx-auto mt-4 text-base leading-relaxed text-gray-600">
                        Prenons rendez-vous pour comprendre vos besoins, clarifions les points clés, puis lançons votre
                        projet avec des solutions sur-mesure.
                    </p>
                </div>

                <div class="relative mt-12 lg:mt-20">
                    <!-- SVG courbé pour représenter les points -->
                    <svg v-if="!issMobile" class="absolute inset-x-1 w-full h-auto" viewBox="0 0 800 100"
                        xmlns="http://www.w3.org/2000/svg">
                        <path ref="pathLine" id="pathLine"
                            d="M 100 30 C 200 80, 300 10, 400 30 C 500 80, 600 20, 700 30"
                            :stroke-dashoffset="dashOffset" stroke="#48bb78" stroke-width="2" fill="transparent"
                            stroke-linecap="round" />
                    </svg>

                    <div class="relative grid grid-cols-1 text-center gap-y-12 md:grid-cols-3 gap-x-12">

                        <div>
                            <div :class="{
                                'bg-green-500 border-green-500': activeStep >= 1,
                                'bg-white border-gray-200': activeStep < 1,
                            }" class="flex items-center justify-center w-16 h-16 mx-auto border-2 rounded-full shadow">
                                <span class="text-xl font-semibold text-gray-700">1</span>
                            </div>
                            <h3 class="mt-6 text-xl font-semibold leading-tight text-black md:mt-10">
                                Prise de contact
                            </h3>
                            <p class="mt-4 text-base text-gray-600">
                                Prenez rendez-vous pour une discussion en personne ou en ligne. C’est l’occasion pour
                                moi d’enregistrer toutes vos informations, idées, et objectifs pour bien cerner vos
                                besoins.
                            </p>
                        </div>

                        <!-- Étape 2 -->
                        <div>
                            <div :class="{
                                'bg-green-500 border-green-500': activeStep >= 2,
                                'bg-white border-gray-200': activeStep < 2,
                            }" class="flex items-center justify-center w-16 h-16 mx-auto border-2 rounded-full shadow">
                                <span class="text-xl font-semibold text-gray-700">2</span>
                            </div>
                            <h3 class="mt-6 text-xl font-semibold leading-tight text-black md:mt-10">
                                Planification et validation
                            </h3>
                            <p class="mt-4 text-base text-gray-600">
                                Avant de commencer, nous clarifions les points clés discutés. Nous passons en revue les
                                éventuels problèmes et apportons des solutions rapides pour garantir que tout est prêt
                                pour le lancement du projet.
                            </p>
                        </div>

                        <!-- Étape 3 -->
                        <div>
                            <div :class="{
                                'bg-green-500 border-green-500': activeStep >= 3,
                                'bg-white border-gray-200': activeStep < 3,
                            }" class="flex items-center justify-center w-16 h-16 mx-auto border-2 rounded-full shadow">
                                <span class="text-xl font-semibold text-gray-700">3</span>
                            </div>
                            <h3 class="mt-6 text-xl font-semibold leading-tight text-black md:mt-10">
                                Lancement du projet
                            </h3>
                            <p class="mt-4 text-base text-gray-600">
                                Une fois tout validé, nous commençons la réalisation du projet en suivant vos exigences
                                précises, pour que le résultat final soit conforme à vos attentes et ambitions.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>





       
// Rajouter une réalisation en direct 
        

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
        <Footer />










    </AuthenticatedLayout>
</template>
