<script setup>



import { ref } from 'vue';

const balloons = [
    {
        id: 1,
        image: 'https://via.placeholder.com/100x100?text=1',
        title: 'Ballon 1',
        colorClass: 'bg-blue-500', // Couleur de fond (Bleu vif)
        textColorClass: 'text-white', // Couleur du texte (Blanc)
        number: 1, // Numéro du ballon
        top: '20%',
        left: '0%',
        project: {
            title: 'Projet 1',
            description: 'Description générale du Projet 1',
            images: [
                {
                    src: '/storage/freelances/2.png',
                    title: 'Image 1',
                    description: 'Ceci est la description de l\'image 1 du projet 1.'
                },
                {
                    src: 'https://via.placeholder.com/100x100?text=Projet1_Image2',
                    title: 'Image 2',
                    description: 'Ceci est la description de l\'image 2 du projet 1.'
                },
                {
                    src: 'https://via.placeholder.com/100x100?text=Projet1_Image3',
                    title: 'Image 3',
                    description: 'Ceci est la description de l\'image 3 du projet 1.'
                }
            ],
            url: '#'
        }
    },
    // Ajoutez les autres ballons ici en changeant `number` et `colorClass` selon vos besoins
    {
        id: 2,
        image: 'https://via.placeholder.com/100x100?text=2',
        title: 'Ballon 2',
        colorClass: 'bg-red-500',
        textColorClass: 'text-white',
        number: 2,
        top: '76%',
        left: '28%',
        project: {
            title: 'Projet 2',
            description: 'Description du Projet 2',
            images: [
                'https://img.freepik.com/photos-gratuite/vue-verticale-du-celebre-rocher-plage-santa-giulia_268835-3733.jpg?ga=GA1.1.604283763.1719259924',
                'https://via.placeholder.com/100x100?text=Projet1_Image2',
                'https://via.placeholder.com/100x100?text=Projet1_Image3'
            ],
            url: '#'
        }
    },
    {
        id: 3,
        image: 'https://via.placeholder.com/100x100?text=Ballon3',
        title: 'Ballon 3',
        top: '30%',
        left: '16%',
        project: {
            title: 'Projet 3',
            description: 'Description du Projet 3',
            projectImage: 'https://via.placeholder.com/100x100?text=Projet3',
            url: '#'
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


const openModal = (project) => {
    selectedProject.value = project;
    currentImageIndex.value = 0;
    isModalOpen.value = true;
};

const closeModal = () => {
    isModalOpen.value = false;
};

const nextImage = () => {
    if (selectedProject.value && selectedProject.value.images) {
        currentImageIndex.value = (currentImageIndex.value + 1) % selectedProject.value.images.length;
    }
};

const previousImage = () => {
    if (selectedProject.value && selectedProject.value.images) {
        currentImageIndex.value = (currentImageIndex.value - 1 + selectedProject.value.images.length) % selectedProject.value.images.length;
    }
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
                <p class="inline-flex items-center justify-center px-8 py-4 text-base font-semibold text-gray-900 transition-all duration-200 border-2 border-gray-200 rounded-md mt-9 hover:bg-gray-900 hover:text-white hover:border-gray-900 focus:bg-gray-900 focus:text-white focus:border-gray-900"
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

        <!-- Contenu alternatif pour mobile -->
        <div class="alternative-content block hidden md:hidden">
            <div v-for="balloon in balloons" :key="balloon.id" class="mb-4 p-4 bg-white shadow rounded-lg">
                <h3 class="text-xl font-bold text-black mb-2">{{ balloon.project.title }}</h3>
                <img :src="balloon.image" alt="Project Image" class="w-full h-32 object-cover rounded mb-2"
                    loading="lazy" />
                <p class="text-sm text-gray-600">{{ balloon.project.description }}</p>
                <a :href="balloon.project.url" class="text-indigo-500 hover:underline mt-2 inline-block">Voir le
                    projet</a>
            </div>
        </div>

        <!-- Modal -->
        <transition name="modal-fade">
            <div v-if="isModalOpen"
                class="modal-overlay fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50"
                @click="closeModal">
                <div class="modal-content relative flex flex-col md:flex-row bg-white p-6 rounded-lg max-w-5xl mx-auto"
                    @click.stop>
                    <!-- Bouton de fermeture -->
                    <button class="modal-close absolute top-2 right-2 text-gray-600 hover:text-red-900"
                        @click="closeModal">
                        x
                    </button>

                    <!-- Carrousel d'images (positionné à gauche) -->
                    <div class="relative w-full md:w-1/2">
                        <img :src="selectedProject.images[currentImageIndex].src" alt="Project Image"
                            class="w-full h-60 object-cover rounded-lg mb-4" />

                        <!-- Titre et description de l'image -->


                        <!-- Boutons de navigation du carrousel -->
                        <div
                            class="absolute flex justify-between items-center w-full top-1/2 transform -translate-y-1/2 px-4">
                            <button id="slider-button-left"
                                class="swiper-button-prev group !p-2 flex justify-center items-center border border-solid border-indigo-600 !w-10 !h-10 transition-all duration-500 rounded-full hover:bg-indigo-600"
                                @click="previousImage">
                                <svg class="h-5 w-5 text-indigo-600 group-hover:text-white"
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                    fill="none">
                                    <path d="M10.0002 11.9999L6 7.99971L10.0025 3.99719" stroke="currentColor"
                                        stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>

                            <button id="slider-button-right"
                                class="swiper-button-next group !p-2 flex justify-center items-center border border-solid border-indigo-600 !w-10 !h-10 transition-all duration-500 rounded-full hover:bg-indigo-600"
                                @click="nextImage">
                                <svg class="h-5 w-5 text-indigo-600 group-hover:text-white"
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                    fill="none">
                                    <path d="M5.99984 4.00012L10 8.00029L5.99748 12.0028" stroke="currentColor"
                                        stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <!-- Détails du projet (positionné à droite) -->
                    <div class="mt-4 pl-6">
                        <h4 class="text-lg font-bold">{{ selectedProject.images[currentImageIndex].title }}</h4>
                        <p class="text-sm text-gray-600">{{ selectedProject.images[currentImageIndex].description }}
                        </p>
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

.modal-content {
    position: relative;
    width: 100%;
    max-width: 900px;
    max-height: 600px;
    background: white;
    padding: 2rem;
    border-radius: 1rem;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    display: flex;
    flex-direction: row;

}
.modal-content img {
    width: 100%;
    /* Assurer que l'image prend tout l'espace possible */
    height: auto;
    /* Maintenir le ratio */
    max-height: 350px;
    /* Limiter la hauteur de l'image */
    border-radius: 0.75rem;
    /* Bordure arrondie autour de l'image */
    object-fit: cover;
    /* Recadrer l'image pour qu'elle occupe l'espace disponible */
    margin-bottom: 1rem;
    /* Espace sous l'image */
}

/* Garde les boutons du carrousel */
.swiper-button-prev,
.swiper-button-next {
    width: 40px;
    /* Augmente la taille des boutons */
    height: 40px;
}

/* Ajustement des détails du projet */
.modal-content h3 {
    font-size: 1.5rem;
    /* Augmente légèrement la taille du titre */
    font-weight: bold;
    color: #333;
}

.modal-content p {
    font-size: 1rem;
    color: #555;
    margin-bottom: 1.5rem;
}

.modal-content a {
    font-size: 1rem;
    font-weight: 600;
    color: #007bff;
    /* Bleu pour le lien */
    text-decoration: none;
    transition: color 0.3s ease;
}

.modal-content a:hover {
    color: #0056b3;
}

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
    background: white;
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
    width: 6vw;
    /* Utilise une largeur relative à la vue pour les rendre adaptables */
    height: 6vw;
    font-size: 1.2rem;
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