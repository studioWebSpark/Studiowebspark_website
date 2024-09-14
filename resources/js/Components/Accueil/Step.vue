<script setup>
import { onMounted, ref, onBeforeUnmount } from 'vue';
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
});
</script>

<template>

    <section class="py-20 sm:py-16 lg:py-24 " id="fonctionnement">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">
                    Comment ça fonctionne ?
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
                    <path ref="pathLine" id="pathLine" d="M 100 30 C 200 80, 300 10, 400 30 C 500 80, 600 20, 700 30"
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

</template>

<style scoped>

/* Animation lors du changement de couleur */
.bg-green-500 {
    background-color: #48bb78 !important;
}

.border-green-500 {
    border-color: #48bb78 !important;
}

</style>