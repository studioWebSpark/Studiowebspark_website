<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import CookieConsent from '@/Components/CookieConsent.vue';
import { ref } from 'vue';
import Footer from '@/Components/Footer.vue';
const imageUrl = `${window.location.origin}/images/file.png`;
const categories = [
    {
        name: 'Développement Web',
        skills: [
            {
                icon: 'https://via.placeholder.com/40x40?text=JS', // Remplace par les URL des icônes
                title: 'JavaScript',
                description: 'Langage de programmation pour le développement web côté client et serveur.'
            },
            {
                icon: 'https://via.placeholder.com/40x40?text=Vue', // Remplace par les URL des icônes
                title: 'Vue.js',
                description: 'Framework JavaScript pour construire des interfaces utilisateur interactives.'
            }
        ]
    },
    {
        name: 'Design',
        skills: [
            {
                icon: 'https://via.placeholder.com/40x40?text=Tailwind', // Remplace par les URL des icônes
                title: 'Tailwind CSS',
                description: 'Framework CSS utilitaire pour créer des designs réactifs et modernes.'
            }
        ]
    },
    {
        name: 'Design',
        skills: [
            {
                icon: 'https://via.placeholder.com/40x40?text=Tailwind', // Remplace par les URL des icônes
                title: 'Tailwind CSS',
                description: 'Framework CSS utilitaire pour créer des designs réactifs et modernes.'
            }
        ]
    }
];

const selectedCategory = ref(null);
const activeCategory = ref(null);

const selectCategory = (category) => {
    selectedCategory.value = category;
    activeCategory.value = category;
};

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
            description: 'Description du Projet 1',
            images: [
                'https://img.freepik.com/photos-gratuite/vue-verticale-du-celebre-rocher-plage-santa-giulia_268835-3733.jpg?ga=GA1.1.604283763.1719259924',
                'https://via.placeholder.com/100x100?text=Projet1_Image2',
                'https://via.placeholder.com/100x100?text=Projet1_Image3'
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

    <Head title="Portfolio" />
    <CookieConsent />

    <AuthenticatedLayout>
        <section class="pt-12 bg-gradient-to-b from-gray-50 via-white to-gray-50">
            <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                <div class="grid max-w-md grid-cols-1 mx-auto lg:grid-cols-12 gap-x-6 gap-y-8 lg:max-w-none">
                    <div class="self-center lg:col-span-4">
                        <h1 class="text-3xl font-bold text-gray-900 sm:text-4xl xl:text-5xl">
                            Hey 👋 Je suis Mesut
                        </h1>
                        <p class="mt-5 text-base font-normal leading-7 text-gray-500">
                            Développeur web freelance pour les nouveaux entrepreneurs et les petites entreprises.
                        </p>
                        <div class="relative inline-flex mt-9 group">
                            <div
                                class="absolute transitiona-all duration-1000 opacity-70 inset-0 bg-gradient-to-r from-[#44BCFF] via-[#FF44EC] to-[#FF675E] rounded-xl blur-lg filter group-hover:opacity-100 group-hover:duration-200">
                            </div>

                            <a href="#" title=""
                                class="relative inline-flex items-center justify-center px-8 py-3 sm:text-sm sm:py-3.5 text-base font-semibold text-white transition-all duration-200 bg-indigo-600 border border-transparent rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600"
                                role="button">
                                Plus d'infos ?
                            </a>
                        </div>
                    </div>

                    <div class="self-end lg:order-last lg:pb-20 lg:col-span-3">
                        <p class="text-xs font-bold tracking-widest text-gray-500 uppercase">
                            ⚡️ Mes services
                        </p>

                        <div class="mt-6 space-y-6 lg:space-y-8">
                            <div class="relative overflow-hidden">
                                <div class="flex items-start lg:items-center">
                                    <img class="object-cover w-12 h-12 rounded-lg shrink-0"
                                        src="https://landingfoliocom.imgix.net/store/collection/clarity-blog/images/hero/1/thumbnail-1.png"
                                        alt="">
                                    <p class="ml-5 text-base font-bold leading-6 text-gray-900">
                                        <a href="#" title="">
                                            Création de site web & application  
                                            <span class="absolute inset-0" aria-hidden="true"></span>
                                        </a>
                                    </p>
                                </div>
                            </div>

                            <div class="relative overflow-hidden">
                                <div class="flex items-start lg:items-center">
                                    <img class="object-cover w-12 h-12 rounded-lg shrink-0"
                                        src="https://landingfoliocom.imgix.net/store/collection/clarity-blog/images/hero/1/thumbnail-2.png"
                                        alt="">
                                    <p class="ml-5 text-base font-bold leading-6 text-gray-900">
                                        <a href="#" title="">
                                            UI & UX Design
                                            <span class="absolute inset-0" aria-hidden="true"></span>
                                        </a>
                                    </p>
                                </div>
                            </div>

                            <div class="relative overflow-hidden">
                                <div class="flex items-start lg:items-center">
                                    <img class="object-cover w-12 h-12 rounded-lg shrink-0"
                                        src="https://landingfoliocom.imgix.net/store/collection/clarity-blog/images/hero/1/thumbnail-3.png"
                                        alt="">
                                    <p class="ml-5 text-base font-bold leading-6 text-gray-900">
                                        <a href="#" title="">
                                            Réseau social & E-commerce
                                            <span class="absolute inset-0" aria-hidden="true"></span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="self-end lg:col-span-5">
                        <img class="w-full mx-auto" :src="imageUrl" alt="Personnage 3D">
                    </div>
                </div>
            </div>
        </section>

        <section class="py-10  sm:py-16 lg:py-24">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="max-w-2xl mx-auto text-center">
                    <h2 class="text-2xl font-bold text-gray-800 sm:text-4xl sm:leading-tight">Découvrez nos Valeurs </h2>
                </div>

                <div
                    class="grid items-center max-w-4xl grid-cols-2 mx-auto mt-12 md:mt-20 md:grid-cols-4 gap-x-10 gap-y-16">
                    <div>
                        <img class="object-contain w-full h-6 mx-auto"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-1.png" alt="" />
                    </div>

                    <div>
                        <img class="object-contain w-full h-8 mx-auto"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-2.png" alt="" />
                    </div>

                    <div>
                        <img class="object-contain w-full h-8 mx-auto"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-3.png" alt="" />
                    </div>

                    <div>
                        <img class="object-contain w-full mx-auto h-7"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-4.png" alt="" />
                    </div>

                    <div class="hidden md:block">
                        <img class="object-contain w-full h-8 mx-auto"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-5.png" alt="" />
                    </div>

                    <div class="hidden md:block">
                        <img class="object-contain w-full h-8 mx-auto"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-6.png" alt="" />
                    </div>

                    <div class="hidden md:block">
                        <img class="object-contain w-full h-8 mx-auto"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-7.png" alt="" />
                    </div>

                    <div class="hidden md:block">
                        <img class="object-contain w-full h-8 mx-auto"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-8.png" alt="" />
                    </div>

                    <div class="hidden md:block">
                        <img class="object-contain w-full h-8 mx-auto"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-9.png" alt="" />
                    </div>

                    <div class="hidden md:block">
                        <img class="object-contain w-full mx-auto h-7"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-10.png" alt="" />
                    </div>

                    <div class="hidden md:block">
                        <img class="object-contain w-full h-8 mx-auto"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-11.png" alt="" />
                    </div>

                    <div class="hidden md:block">
                        <img class="object-contain w-full h-8 mx-auto"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-12.png" alt="" />
                    </div>
                </div>

                <div class="flex items-center justify-center mt-10 space-x-3 md:hidden">
                    <div class="w-2.5 h-2.5 rounded-full bg-blue-600 block"></div>
                    <div class="w-2.5 h-2.5 rounded-full bg-gray-300 block"></div>
                    <div class="w-2.5 h-2.5 rounded-full bg-gray-300 block"></div>
                </div>

                <p class="mt-10 text-base text-center text-gray-500 md:mt-20">and, 1000+ more companies</p>
            </div>
        </section>

        <section class="py-10 sm:py-16 lg:py-24">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Mes Compétences</h2>
                    <div class="mt-6 flex flex-wrap justify-center gap-4">
                        <!-- Boucle sur les catégories -->
                        <div v-for="category in categories" :key="category.name" @click="selectCategory(category)"
                            :class="[
                                'inline-flex items-center justify-center px-8 py-4 text-base font-semibold transition-all duration-200 border-2 rounded-md mt-9 cursor-pointer',
                                category === activeCategory
                                    ? 'text-white bg-black border-black' // Classe pour la catégorie active
                                    : 'text-gray-900 border-gray-200 hover:bg-black hover:text-white hover:border-black focus:bg-black focus:text-white focus:border-black' // Classe pour les autres catégories
                            ]" role="button" tabindex="0">
                            {{ category.name }}
                        </div>
                    </div>
                </div>

                <div v-if="selectedCategory"
                    class="grid grid-cols-1 text-center sm:grid-cols-2 lg:grid-cols-4 gap-y-8 sm:gap-12">
                    <!-- Boucle sur les compétences de la catégorie sélectionnée -->
                    <div v-for="skill in selectedCategory.skills" :key="skill.title" class="flex flex-col items-center">
                        <div
                            :class="`flex items-center justify-center w-20 h-20 mx-auto ${skill.bgColor} rounded-full`">
                            <img :src="skill.icon" alt="Skill Icon" class="w-9 h-9" />
                        </div>
                        <h3 class="mt-8 text-lg font-semibold text-black">{{ skill.title }}</h3>
                        <p class="mt-4 text-sm text-gray-600">{{ skill.description }}</p>
                    </div>
                </div>
            </div>
        </section>


        <section class="pt-10 pb-8 overflow-hidden sm:pt-16 lg:pt-24 mb-40">
            <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl mb-40">
                <div class="max-w-2xl mx-auto text-center">
                    <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Connect with all
                        apps</h2>
                    <p class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-gray-600">Amet minim mollit non
                        deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis.</p>
                    <a href="#" title=""
                        class="inline-flex items-center justify-center px-8 py-4 text-base font-semibold text-gray-900 transition-all duration-200 border-2 border-gray-200 rounded-md mt-9 hover:bg-gray-900 hover:text-white hover:border-gray-900 focus:bg-gray-900 focus:text-white focus:border-gray-900"
                        role="button">
                        Check all apps
                    </a>
                </div>

                <div class="relative mt-12 h-96 balloon-container">
                    <div v-for="balloon in balloons" :key="balloon.id"
                        class="absolute flex items-center justify-center group cursor-pointer balloon"
                        :style="getBalloonStyle(balloon)" @click="openModal(balloon.project)">
                        <!-- Image du ballon avec texte -->
                        <div
                            :class="`${balloon.colorClass} ${balloon.textColorClass} w-24 h-24 flex items-center justify-center rounded-full text-2xl font-bold`">
                            {{ balloon.id }}
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contenu alternatif pour mobile -->
            <div class="alternative-content hidden sm:hidden md:hidden">
                <div v-for="balloon in balloons" :key="balloon.id" class="mb-4 p-4 bg-white shadow rounded-lg">
                    <h3 class="text-xl font-bold text-black mb-2">{{ balloon.project.title }}</h3>
                    <img :src="balloon.image" alt="Project Image" class="w-full h-32 object-cover rounded mb-2" />
                    <p class="text-sm text-gray-600">{{ balloon.project.description }}</p>
                    <a :href="balloon.project.url" class="text-indigo-500 hover:underline mt-2 inline-block">Voir le
                        projet</a>
                </div>
            </div>

            <!-- Modal -->

            <div v-if="isModalOpen" class="modal-overlay" @click="closeModal">
                <div class="modal-content relative" @click.stop>
                    <!-- Bouton de fermeture avec une nouvelle icône -->
                    <button class="modal-close absolute top-2 right-2 text-gray-600 hover:text-gray-900"
                        @click="closeModal">
                        x <!-- Icône de fermeture Font Awesome -->
                    </button>

                    <!-- Carrousel d'images -->
                    <div class="relative">
                        <img :src="selectedProject.images[currentImageIndex]" alt="Project Image"
                            class="w-full h-30 object-cover rounded-lg mb-4" />

                        <!-- Boutons de navigation du carrousel -->
                        <div class="absolute flex justify-center items-center m-auto left-0 right-0 w-fit bottom-12">
                            <button id="slider-button-left"
                                class="swiper-button-prev group !p-2 flex justify-center items-center border border-solid border-indigo-600 !w-12 !h-12 transition-all duration-500 rounded-full  hover:bg-indigo-600 !-translate-x-16"
                                @click="previousImage">
                                <svg class="h-5 w-5 text-indigo-600 group-hover:text-white"
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                    fill="none">
                                    <path d="M10.0002 11.9999L6 7.99971L10.0025 3.99719" stroke="currentColor"
                                        stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <button id="slider-button-right"
                                class="swiper-button-next group !p-2 flex justify-center items-center border border-solid border-indigo-600 !w-12 !h-12 transition-all duration-500 rounded-full hover:bg-indigo-600 !translate-x-16"
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

                    <!-- Détails du projet -->
                    <h3 class="text-xl font-semibold mb-2">{{ selectedProject.title }}</h3>
                    <p class="text-base mb-4 text-gray-700">{{ selectedProject.description }}</p>
                    <a :href="selectedProject.url" class="text-indigo-600 hover:underline text-lg font-medium">View
                        Project</a>
                </div>
            </div>
        </section>
        <section class="py-12  sm:py-16 lg:py-20">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="text-center">
                    <h2 class="text-3xl font-bold leading-tight text-gray-900 sm:text-4xl xl:text-5xl font-pj">Make
                        every step user-centric</h2>
                    <p class="mt-4 text-base leading-7 text-gray-600 sm:mt-8 font-pj">Lorem ipsum dolor sit amet,
                        consectetur adipis elit</p>
                </div>

                <div
                    class="grid grid-cols-1 mt-10 text-center sm:mt-16 sm:grid-cols-2 sm:gap-x-12 gap-y-12 md:grid-cols-3 md:gap-0 xl:mt-24">
                    <div class="md:p-8 lg:p-14">
                        <svg class="mx-auto" width="46" height="46" viewBox="0 0 46 46" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M45 29V23C45 10.85 35.15 1 23 1C10.85 1 1 10.85 1 23V29" stroke="#161616"
                                stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M13 29H1V41C1 43.209 2.791 45 5 45H13V29Z" fill="#D4D4D8" stroke="#161616"
                                stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M45 29H33V45H41C43.209 45 45 43.209 45 41V29Z" fill="#D4D4D8" stroke="#161616"
                                stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        <h3 class="mt-12 text-xl font-bold text-gray-900 font-pj">Support</h3>
                        <p class="mt-5 text-base text-gray-600 font-pj">Lorem ipsum dolor sit amet, consectetur
                            adipis
                            elit. Sit enim nec, proin faucibus nibh et sagittis a. Lacinia purus ac amet.</p>
                    </div>

                    <div class="md:p-8 lg:p-14 md:border-l md:border-gray-200">
                        <svg class="mx-auto" width="46" height="46" viewBox="0 0 46 46" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M27 27H19V45H27V27Z" stroke="#161616" stroke-width="2" stroke-miterlimit="10"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M9 37H1V45H9V37Z" fill="#D4D4D8" stroke="#161616" stroke-width="2"
                                stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M45 17H37V45H45V17Z" fill="#D4D4D8" stroke="#161616" stroke-width="2"
                                stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M5 17L15 7L23 15L37 1" stroke="#161616" stroke-width="2" stroke-miterlimit="10"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M28 1H37V10" stroke="#161616" stroke-width="2" stroke-miterlimit="10"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <h3 class="mt-12 text-xl font-bold text-gray-900 font-pj">Sales</h3>
                        <p class="mt-5 text-base text-gray-600 font-pj">Lorem ipsum dolor sit amet, consectetur
                            adipis
                            elit. Sit enim nec, proin faucibus nibh et sagittis a. Lacinia purus ac amet.</p>
                    </div>

                    <div class="md:p-8 lg:p-14 md:border-l md:border-gray-200">
                        <svg class="mx-auto" width="42" height="42" viewBox="0 0 42 42" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M41 1H1V41H41V1Z" stroke="#161616" stroke-width="2" stroke-miterlimit="10"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M18 7H7V20H18V7Z" stroke="#161616" stroke-width="2" stroke-miterlimit="10"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M18 26H7V35H18V26Z" stroke="#161616" stroke-width="2" stroke-miterlimit="10"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M35 7H24V35H35V7Z" fill="#D4D4D8" stroke="#161616" stroke-width="2"
                                stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <h3 class="mt-12 text-xl font-bold text-gray-900 font-pj">Onboarding</h3>
                        <p class="mt-5 text-base text-gray-600 font-pj">Lorem ipsum dolor sit amet, consectetur
                            adipis
                            elit. Sit enim nec, proin faucibus nibh et sagittis a. Lacinia purus ac amet.</p>
                    </div>

                    <div class="md:p-8 lg:p-14 md:border-t md:border-gray-200">
                        <svg class="mx-auto" width="42" height="42" viewBox="0 0 42 42" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.66667 25H6C3.23858 25 1 27.2386 1 30V37C1 39.7614 3.23858 42 6 42H36C38.7614 42 41 39.7614 41 37V30C41 27.2386 38.7614 25 36 25H31.8333C30.2685 25 29 26.2685 29 27.8333C29 29.3981 27.7315 30.6667 26.1667 30.6667H15.3333C13.7685 30.6667 12.5 29.3981 12.5 27.8333C12.5 26.2685 11.2315 25 9.66667 25Z"
                                fill="#D4D4D8" />
                            <path d="M9 9H33" stroke="#161616" stroke-width="2" stroke-miterlimit="10"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M9 17H33" stroke="#161616" stroke-width="2" stroke-miterlimit="10"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M1 25H13V31H29V25H41" stroke="#161616" stroke-width="2" stroke-miterlimit="10"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M37 1H5C2.79086 1 1 2.79086 1 5V37C1 39.2091 2.79086 41 5 41H37C39.2091 41 41 39.2091 41 37V5C41 2.79086 39.2091 1 37 1Z"
                                stroke="#161616" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        <h3 class="mt-12 text-xl font-bold text-gray-900 font-pj">Product</h3>
                        <p class="mt-5 text-base text-gray-600 font-pj">Lorem ipsum dolor sit amet, consectetur
                            adipis
                            elit. Sit enim nec, proin faucibus nibh et sagittis a. Lacinia purus ac amet.</p>
                    </div>

                    <div class="md:p-8 lg:p-14 md:border-l md:border-gray-200 md:border-t">
                        <svg class="mx-auto" width="46" height="42" viewBox="0 0 46 42" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M30.562 18.4609C30.0511 17.9392 29.4292 17.5392 28.7426 17.2907C28.0559 17.0422 27.3221 16.9516 26.5956 17.0256C25.8692 17.0996 25.1687 17.3362 24.5462 17.718C23.9237 18.0998 23.3952 18.6169 23 19.2309C22.6049 18.6167 22.0764 18.0995 21.4539 17.7176C20.8315 17.3357 20.1309 17.099 19.4044 17.025C18.6779 16.951 17.944 17.0417 17.2573 17.2903C16.5706 17.5389 15.9488 17.939 15.438 18.4609C14.5163 19.4035 14.0002 20.6695 14.0002 21.9879C14.0002 23.3063 14.5163 24.5722 15.438 25.5149L23 33.1999L30.564 25.5159C31.485 24.5726 32.0004 23.3064 32 21.988C31.9997 20.6696 31.4835 19.4037 30.562 18.4609Z"
                                fill="#D4D4D8" stroke="#161616" stroke-width="2" stroke-miterlimit="10"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M41 41H5C3.93913 41 2.92172 40.5786 2.17157 39.8284C1.42143 39.0783 1 38.0609 1 37V1H17L22 9H45V37C45 38.0609 44.5786 39.0783 43.8284 39.8284C43.0783 40.5786 42.0609 41 41 41Z"
                                stroke="#161616" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        <h3 class="mt-12 text-xl font-bold text-gray-900 font-pj">Quality</h3>
                        <p class="mt-5 text-base text-gray-600 font-pj">Lorem ipsum dolor sit amet, consectetur
                            adipis
                            elit. Sit enim nec, proin faucibus nibh et sagittis a. Lacinia purus ac amet.</p>
                    </div>

                    <div class="md:p-8 lg:p-14 md:border-l md:border-gray-200 md:border-t">
                        <svg class="mx-auto" width="44" height="44" viewBox="0 0 44 44" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M25 7C34.941 7 43 15.059 43 25C43 34.941 34.941 43 25 43C15.059 43 7 34.941 7 25"
                                stroke="#161616" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M19 1C9.059 1 1 9.059 1 19H19V1Z" fill="#D4D4D8" stroke="#161616" stroke-width="2"
                                stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <h3 class="mt-12 text-xl font-bold text-gray-900 font-pj">Result</h3>
                        <p class="mt-5 text-base text-gray-600 font-pj">Lorem ipsum dolor sit amet, consectetur
                            adipis
                            elit. Sit enim nec, proin faucibus nibh et sagittis a. Lacinia purus ac amet.</p>
                    </div>
                </div>
            </div>
        </section>
        <Footer />

    </AuthenticatedLayout>
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
    max-width: 600px;
    background: white;
    padding: 1.5rem;
    border-radius: 0.5rem;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.modal-close {
    position: absolute;
    top: 0.5rem;
    right: 0.5rem;
    background: transparent;
    border: none;
    font-size: 1.5rem;
    cursor: pointer;
}

button {
    background: white;
    border: none;
    cursor: pointer;
    font-size: 1.5rem;
    padding: 0.5rem;
    border-radius: 50%;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    transition: background-color 0.3s ease;
}

button:hover {
    background: #f0f0f0;
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

/* Autres styles existants... */
</style>