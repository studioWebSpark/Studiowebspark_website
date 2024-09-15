<script setup>



import { ref } from 'vue';

const balloons = [
    {
        //Mobile Tablette
        id: 1,
        image: '/storage/freelances/projet1/accueil.png',
        title: 'Ballon 1',
        colorClass: 'bg-blue-500', // Couleur de fond (Bleu vif)
        textColorClass: 'text-white', // Couleur du texte (Blanc)
        number: 1, // Numéro du ballon
        top: '20%',
        left: '0%',
        project: {
            title: 'Site web personnel ',
            description: 'Je conçois des sites web et des applications personnalisés, axés sur la performance et l’optimisation de la présence en ligne. Vous découvrirez ici mes réalisations, mes compétences et comment je peux vous aider à concrétiser vos projets digitaux. Explorez les différentes sections pour en savoir plus sur mon parcours et mes services.',
            // PC
            images: [
                {
                    src: '/storage/freelances/projet1/accueil.png',
                    title: 'Site web personnel Partie Accueil',
                    tech: 'HTML, CSS, JavaScript , Sql',
                    framework: 'Vue.js , Laravel , MySQL , Tailwind CSS',
                    description: 'Sur la page d’accueil, vous trouverez une vue d’ensemble de mes services en tant que développeur web. Je propose des solutions adaptées à vos besoins, que ce soit pour la création de sites web, d’applications ou l’amélioration de plateformes existantes.'
                },
                {
                    src: '/storage/freelances/projet1/portfolio.png',
                    title: 'Site web personnel Partie Portfolio',
                    tech: 'HTML, CSS, JavaScript , Sql',
                    framework: 'Vue.js , Laravel , MySQL , Tailwind CSS',
                    description: 'Dans cette section, je présente un échantillon de mes projets précédents. Vous y trouverez des exemples concrets de sites web et d’applications que j’ai développés, avec des détails sur les technologies utilisées et les objectifs atteints pour chaque client. Idéal pour avoir un aperçu de mon savoir-faire.'
                },
                {
                    src: '/storage/freelances/projet1/contact.png',
                    title: 'Site web personnel Partie Contact',
                    tech: 'HTML, CSS, JavaScript , Sql',
                    framework: 'Vue.js , Laravel , MySQL , Tailwind CSS',
                    description: 'Que vous ayez une question, un projet en tête ou que vous souhaitiez simplement échanger, la section Contact vous permet de me joindre directement. Laissez-moi un message et je vous répondrai rapidement pour discuter de la façon dont nous pourrions collaborer.'
                },
                
            ],
            url: '/portfolio'
        }
    },
    // Ajoutez les autres ballons ici en changeant `number` et `colorClass` selon vos besoins
    {
        id: 2,
        image: '/storage/freelances/projet2/Tour.png',
        title: 'Ballon 2',
        colorClass: 'bg-red-500',
        textColorClass: 'text-white',
        number: 2,
        top: '76%',
        left: '28%',
        project: {
            title: 'Projet Tour (Front-end)',
            description: 'Réalisation d'/'une agence de voyage en ligne avec un design moderne',
            // PC
            images: [
                {
                    src: '/storage/freelances/projet2/Tour.png',
                    title: 'Site web Tour ',
                    tech: 'HTML, CSS, JavaScript',
                    framework: 'Tailwind CSS',
                    description: 'Avec ce projet, j’ai souhaité mettre en avant mes compétences en design et en intégration web. J’ai créé une interface moderne et intuitive pour une agence de voyage fictive, avec des animations et des effets visuels pour une expérience utilisateur optimale.'
                },
                

            ],
            url: '/portfolio'
        }
    },
    {
        id: 3,
        image: '/storage/freelances/projet3/Reseaux.png',
        title: 'Ballon 3',
        colorClass: 'bg-green-500', // Couleur de fond (Bleu vif)
        textColorClass: 'text-white', // Couleur du texte (Blanc)
        top: '30%',
        left: '16%',
        project: {
            title: 'Réseaux Sociaux (Front-end)',
            description: 'Réalisation d' / ' une application de réseau social en ressemblant à Facebook',
            // PC
            images: [
                {
                    src: '/storage/freelances/projet3/Reseaux.png',
                    title: 'Site web Réseaux Sociaux ',
                    tech: 'HTML, CSS,',
                    description: 'Réseaux Sociaux est un projet personnel qui m’a permis de mettre en pratique mes compétences en design et en développement web. Inspiré des réseaux sociaux populaires, j’ai créé une interface moderne et fonctionnelle pour une application de partage de contenu en ligne.'
                },


            ],
            url: '/portfolio'
        }
    },
    {
        id: 4,
        image: 'https://via.placeholder.com/100x100?text=Ballon4',
        title: 'Ballon 4',
        top: '90%',    // Position aléatoire en pourcentage
        left: '0%',
        project: {
            title: 'Projet 4',
            description: 'Description du Projet 4',
            projectImage: 'https://via.placeholder.com/100x100?text=Projet4',
            url: '#'
        }
    },
    {
        id: 5,
        image: 'https://via.placeholder.com/100x100?text=Ballon5',
        title: 'Ballon 5',
        top: '27%',
        left: '40%',
        project: {
            title: 'Projet 5',
            description: 'Description du Projet 5',
            projectImage: 'https://via.placeholder.com/100x100?text=Projet5',
            url: '#'
        }
    },
    {
        id: 6,
        image: 'https://via.placeholder.com/100x100?text=Ballon6',
        title: 'Ballon 6',
        top: '65%',
        left: '77%',
        project: {
            title: 'Projet 6',
            description: 'Description du Projet 6',
            projectImage: 'https://via.placeholder.com/100x100?text=Projet6',
            url: '#'
        }
    },
    {
        id: 7,
        image: 'https://via.placeholder.com/100x100?text=Ballon7',
        title: 'Ballon 7',
        top: '120%',    // Position aléatoire en pourcentage
        left: '18%',
        project: {
            title: 'Projet 7',
            description: 'Description du Projet 7',
            projectImage: 'https://via.placeholder.com/100x100?text=Projet7',
            url: '#'
        }
    },
    {
        id: 8,
        image: 'https://via.placeholder.com/100x100?text=Ballon8',
        title: 'Ballon 8',
        top: '120%',
        left: '42%',
        project: {
            title: 'Projet 8',
            description: 'Description du Projet 8',
            projectImage: 'https://via.placeholder.com/100x100?text=Projet8',
            url: '#'
        }
    },
    {
        id: 9,
        image: 'https://via.placeholder.com/100x100?text=Ballon9',
        title: 'Ballon 9',
        top: '110%',
        left: '90%',
        project: {
            title: 'Projet 9',
            description: 'Description du Projet 9',
            projectImage: 'https://via.placeholder.com/100x100?text=Projet9',
            url: '#'
        }
    },
    {
        id: 10,
        image: 'https://via.placeholder.com/100x100?text=Ballon10',
        title: 'Ballon 10',
        top: '30%',    // Position aléatoire en pourcentage
        left: '90%',
        project: {
            title: 'Projet 10',
            description: 'Description du Projet 10',
            projectImage: 'https://via.placeholder.com/100x100?text=Projet10',
            url: '#'
        }
    },
    {
        id: 11,
        image: 'https://via.placeholder.com/100x100?text=Ballon11',
        title: 'Ballon 11',
        top: '45%',
        left: '60%',
        project: {
            title: 'Projet 11',
            description: 'Description du Projet 11',
            projectImage: 'https://via.placeholder.com/100x100?text=Projet11',
            url: '#'
        }
    },
    {
        id: 12,
        image: 'https://via.placeholder.com/100x100?text=Ballon12',
        title: 'Ballon 12',
        top: '120%',
        left: '62%',
        project: {
            title: 'Projet 12',
            description: 'Description du Projet 12',
            projectImage: 'https://via.placeholder.com/100x100?text=Projet12',
            url: '#'
        }
    },
];

function getBalloonStyle(balloon) {
    return {
        top: balloon.top,
        left: balloon.left,
        transform: `translate(-${balloon.left}, -${balloon.top})` // Ajuste le ballon pour qu'il soit centré à la position
    };
}

const isModalOpen = ref(false);
const selectedProject = ref(null);
const currentImageIndex = ref(0);
const isImageModalOpen = ref(false);


const openModal = (project) => {
    selectedProject.value = project;
    currentImageIndex.value = 0;
    isModalOpen.value = true;
};

const closeModal = () => {
    isModalOpen.value = false;
};

const openImageModal = () => {
    isImageModalOpen.value = true;
};

// Fermer la modale d'image zoomée
const closeImageModal = () => {
    isImageModalOpen.value = false;
};

const nextImage = () => {
    currentImageIndex.value = (currentImageIndex.value + 1) % selectedProject.value.images.length;
};

const previousImage = () => {
    currentImageIndex.value = (currentImageIndex.value - 1 + selectedProject.value.images.length) % selectedProject.value.images.length;
};



</script>

<template>
    <section class="pt-10 pb-8 overflow-hidden sm:pt-16 lg:pt-24 mb-40">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl mb-40">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Mes réalisations</h2>
                <p class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-gray-600">Je crée des sites web et des
                    applications sur mesure, alliant design moderne et performance pour optimiser la présence en ligne
                    et la productivité de mes clients.</p>
                <p class="hidden lg:inline-flex items-center justify-center px-8 py-4 text-base font-semibold text-gray-900 transition-all duration-200 border-2 border-gray-200 rounded-md mt-9 hover:bg-gray-900 hover:text-white hover:border-gray-900 focus:bg-gray-900 focus:text-white focus:border-gray-900"
                    role="button">
                    Cliquez sur les ballons colorés pour voir mes projets
                </p>
            </div>

            <div class="relative mt-12 h-96 balloon-container" id="balloon">
                <div v-for="balloon in balloons" :key="balloon.id"
                    class="absolute flex items-center justify-center group cursor-pointer balloon"
                    :style="getBalloonStyle(balloon)" @click="openModal(balloon.project)">
                    <div
                        :class="`${balloon.colorClass} ${balloon.textColorClass} w-24 h-24 flex items-center justify-center rounded-full text-2xl font-bold`">
                        {{ balloon.id }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Affichage uniquement pour mobile et tablette -->
       <div class="container mx-auto px-4 md:hidden">
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        <div v-for="balloon in balloons" :key="balloon.id"
            class="bg-white rounded-lg shadow-md overflow-hidden">
            <!-- Titre du projet -->
            <div class="p-4">
                <h3 class="text-lg font-bold text-gray-800 mb-2">
                    {{ balloon.project.title }}
                </h3>

                <!-- Image du projet -->
                <img :src="balloon.image" alt="Project Image" class="w-full h-40 object-cover rounded-lg mb-4"
                    loading="lazy" />

                <!-- Description générale du projet -->
                <p class="text-sm text-gray-600 leading-relaxed mb-4">
                    {{ balloon.project.description }}
                </p>

                <!-- Lien pour visiter le projet -->
                <a :href="balloon.project.url"
                    class="text-indigo-500 hover:text-indigo-700 underline block text-center">
                    Voir le projet
                </a>
            </div>
        </div>
    </div>
</div>


        <!-- Modal -->
        <transition name="modal-fade ">
            <div v-if="isModalOpen" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50"
                @click="closeModal">
                <div class="relative flex flex-col md:flex-row bg-white p-6 rounded-lg max-w-5xl mx-auto" @click.stop>
                    <!-- Bouton de fermeture -->
                    <button class="absolute top-2 right-2 text-gray-600 hover:text-red-900" @click="closeModal">
                        x
                    </button>

                    <!-- Carrousel d'images (positionné à gauche) -->
                    <div class="relative w-full md:w-1/2 h-80 flex items-center justify-center">
                        <!-- Image -->
                        <img :src="selectedProject.images[currentImageIndex].src" alt="Project Image"
                            class="w-full h-full object-cover rounded-lg mb-4 cursor-pointer" @click="openImageModal" />

                        <!-- Boutons de navigation du carrousel -->
                        <div
                            class="absolute flex justify-between items-center w-full top-1/2 transform -translate-y-1/2 px-4 pointer-events-none">
                            <button @click="previousImage" class="swiper-button-prev pointer-events-auto z-10">
                                <svg class="h-8 w-8 text-black " xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M10.0002 11.9999L6 7.99971L10.0025 3.99719" stroke="currentColor"
                                        stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <button @click="nextImage" class="swiper-button-next pointer-events-auto z-10">
                                <svg class="h-8 w-8 text-black" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M5.99984 4.00012L10 8.00029L5.99748 12.0028" stroke="currentColor"
                                        stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Détails du projet (positionné à droite) -->
                    <div class="mt-4 pl-6 max-h-40  md:w-1/2">
                        <h4 class="text-lg font-bold text-gray-800 mb-6 text-center">
                            {{ selectedProject.images[currentImageIndex].title }}
                        </h4>
                        <p class="text-sm text-gray-600 leading-relaxed max-h-24">
                            <span class="font-semibold">Technologies utilisées:</span>
                            {{ selectedProject.images[currentImageIndex].tech }}
                        </p>
                        <p class="text-sm text-gray-600 leading-relaxed max-h-24 mb-6 ">
                            <span class="font-semibold">Framework utilisées: </span>
                            {{ selectedProject.images[currentImageIndex].framework }}
                        </p>
                        <p class="text-sm text-gray-600 leading-relaxed max-h-24 overflow-y-auto">
                            {{ selectedProject.images[currentImageIndex].description }}
                        </p>
                        <a :href="selectedProject.url" class="text-blue-500 hover:text-blue-700 underline">
                            Visiter le projet
                        </a>


                    </div>
                </div>
            </div>
        </transition>

        <!-- Modal d'agrandissement de l'image -->
        <transition name="modal-fade">
            <div v-if="isImageModalOpen"
                class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50"
                @click="closeImageModal">
                <div class="relative w-full max-w-3xl flex items-center justify-center" @click.stop>
                    <!-- Image -->
                    <img :src="selectedProject.images[currentImageIndex].src" alt="Project Image"
                        class="max-w-full max-h-full" @click.stop />

                    <!-- Boutons de navigation du carrousel dans le zoom -->
                    <div
                        class="absolute flex justify-between items-center w-full top-1/2 transform -translate-y-1/2 px-4">
                        <button @click.stop @click="previousImage" class="swiper-button-prev">
                            <svg class="h-8 w-8 text-black" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 16 16" fill="none">
                                <path d="M10.0002 11.9999L6 7.99971L10.0025 3.99719" stroke="currentColor"
                                    stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <button @click.stop @click="nextImage" class="swiper-button-next">
                            <svg class="h-8 w-8 text-black" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 16 16" fill="none">
                                <path d="M5.99984 4.00012L10 8.00029L5.99748 12.0028" stroke="currentColor"
                                    stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </transition>
    </section>
</template>
<style scoped>
/* Animation de mouvement des ballons */
@keyframes float {
    0% {
        transform: translateY(0) translateX(0);
    }

    50% {
        transform: translateY(-40px) translateX(50px);
    }

    100% {
        transform: translateY(0) translateX(0);
    }
}

/* Effet de survol */
.group:hover .group-hover\:bounce {
    animation: bounce 1s ease;
}

/* Styles pour le modal */
.modal-overlay {
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, 0.5);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 50;
}



/* Garde les boutons du carrousel */
.swiper-button-prev,
.swiper-button-next {
    width: 40px;
    /* Augmente la taille des boutons */
    height: 40px;
}

/* Ajustement des détails du projet */
.modal-close {
    position: absolute;
    top: 1rem;
    right: 1rem;
    background: transparent;
    border: none;
    font-size: 1.5rem;
    cursor: pointer;
    color: red;
    transition: transform 0.2s ease-in-out;
}

.modal-close:hover {
    transform: scale(1.2);
    /* Animation au survol */
}

button {
    
    border: none;
    cursor: pointer;
    font-size: 1.5rem;
    padding: 0.5rem;
    color: red;
    transition: background-color 0.3s ease;
}


/* Ballons: Responsivité */
.balloon {
    animation: float 6s ease-in-out infinite;
   
}

/* Masquer les ballons sur les petits écrans */
@media (max-width: 768px) {
    .balloon-container {
        display: none;
        /* Cache les ballons sur les petits écrans */
    }

    .alternative-content {
        display: block;
        /* Affiche le contenu alternatif sur les petits écrans */
    }
}

.modal-fade-enter-active,
.modal-fade-leave-active {
    transition: opacity 0.3s ease;
}

.modal-fade-enter,
.modal-fade-leave-to {
    opacity: 0;
}

/* Autres styles existants... */
</style>