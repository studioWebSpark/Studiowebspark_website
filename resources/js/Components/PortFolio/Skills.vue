<script setup>
import { ref, onMounted , onUnmounted} from 'vue';



const categories = [
    {
        name: 'Développement Web - Frontend',
        skills: [
            {
                icon: 'storage/logo/tech/html5.png', // Remplace par les URL des icônes
                title: 'HTML 5',
                description: 'Langage de balisage pour structurer et présenter le contenu sur le web.'
            },
            {
                icon: 'storage/logo/tech/css3.png', // Remplace par les URL des icônes
                title: 'CSS 3',
                description: 'Langage de style pour la mise en page et le design des sites web.'
            },
            {
                icon: 'storage/logo/tech/javascript.png', // Remplace par les URL des icônes
                title: 'JavaScript',
                description: 'Langage de programmation pour rendre les pages web interactives.'
            },
            {
                icon: 'storage/logo/tech/vuejs.png', // Remplace par les URL des icônes
                title: 'Vue.js',
                description: 'Framework JavaScript pour construire des interfaces utilisateur interactives.'
            },

        ]
    },
    {
        name: 'Développement Web - Backend',
        skills: [
            {
                icon: 'storage/logo/tech/php.png', // Remplace par les URL des icônes
                title: 'PHP',
                description: 'Langage de programmation côté serveur pour construire des applications dynamiques.'
            },
            {
                icon: 'storage/logo/tech/laravel.png', // Remplace par les URL des icônes
                title: 'Laravel',
                description: 'Framework PHP pour le développement d’applications web robustes et scalables.'
            },
            {
                icon: 'storage/logo/tech/symfony.png', // Remplace par les URL des icônes
                title: 'Symfony',
                description: 'Framework PHP pour le développement web professionnel et de haute qualité.'
            },
            {
                icon: 'storage/logo/tech/nodejs.png', // Remplace par les URL des icônes
                title: 'Node.js & Express.js',
                description: 'Environnement d’exécution JavaScript côté serveur pour construire des applications web.'
            },

            {
                icon: 'storage/logo/tech/mysql.png', // Remplace par les URL des icônes
                title: 'MySQL',
                description: 'Système de gestion de base de données relationnelle utilisé pour stocker les données.'
            },
            {
                icon: 'storage/logo/tech/mongodb.png', // Remplace par les URL des icônes
                title: 'MongoDB',
                description: 'Système de gestion de base de données relationnelle avec des fonctionnalités avancées.'
            }
        ]
    },
    {
        name: 'Design',
        skills: [
            {
                icon: 'storage/logo/figma.png', // Remplace par l'URL de l'icône Figma
                title: 'Figma',
                description: 'Outil de design collaboratif pour créer des interfaces utilisateur interactives.'
            },
            {
                icon: 'storage/logo/style/sketch.png', // Remplace par l'URL de l'icône Sketch
                title: 'Sketch',
                description: 'Outil de design pour la création de maquettes et d’interfaces web.'
            },
            {
                icon: 'storage/logo/style/adobe.png', // Remplace par l'URL de l'icône Adobe Express
                title: 'Adobe Express',
                description: 'Application de design pour la création rapide de visuels et de contenus.'
            },
            {
                icon: 'storage/logo/style/googlefonts.png', // Remplace par l'URL de l'icône Google Fonts
                title: 'Google Fonts',
                description: 'Bibliothèque de polices en ligne pour une typographie de qualité et cohérente sur le web.'
            },
            {
                icon: 'storage/logo/style/boxicons.png', // Remplace par l'URL de l'icône Boxicons
                title: 'Boxicons',
                description: 'Collection d’icônes vectorielles gratuites pour les projets web et applications.'
            }
        ]
    },

    {
        name: 'Outils de Développement',
        skills: [
            {
                icon: 'storage/logo/tech/git.png', // Remplace par les URL des icônes
                title: 'Git',
                description: 'Système de contrôle de version distribué pour suivre les modifications du code.'
            },
            {
                icon: 'storage/logo/github.png', // Remplace par les URL des icônes
                title: 'GitHub',
                description: 'Plateforme de collaboration et d’hébergement de code basé sur Git.'
            },
            {
                icon: 'storage/logo/vscode.png', // Remplace par les URL des icônes
                title: 'Visual Studio Code',
                description: 'Editeur de code léger et puissant utilisé pour le développement web.'
            },
            {
                icon: 'storage/logo/tech/trello.png', // Remplace par les URL des icônes
                title: 'Trello',
                description: 'Outil de gestion de projet pour organiser les tâches et le flux de travail.'
            }
        ]
    }
];

const selectedCategory = ref(null);
const activeCategory = ref(null);


const handleResize = () => {
    isMobile.value = window.innerWidth <= 640; // Définir la largeur max pour les mobiles
};

onMounted(() => {
    handleResize();
    window.addEventListener('resize', handleResize);
});

onUnmounted(() => {
    window.removeEventListener('resize', handleResize);
});
const selectCategory = (category) => {
    selectedCategory.value = category;
    activeCategory.value = category;
};


const isMobile = ref(false);

</script>

<template>
    <section class="py-10 sm:py-16 lg:py-24">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Mes Compétences</h2>
                <p class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-gray-600">
                    Découvrez mes compétences en développement web, design, et technologies modernes, que j’utilise pour
                    créer des solutions digitales sur mesure, optimisées pour la performance et l’innovation.
                </p>
                <p v-if="!isMobile" class="inline-flex items-center justify-center px-8 py-4 text-base font-semibold text-gray-900 transition-all duration-200 border-2 border-gray-200 rounded-md mt-9 hover:bg-gray-900 hover:text-white hover:border-gray-900 focus:bg-gray-900 focus:text-white focus:border-gray-900 :hidden"
                    role="button">
                    Cliquez sur une catégorie pour en savoir plus
                </p>

                <!-- Affichage pour desktop/tablette -->
                <div v-if="!isMobile" class="mt-6 flex flex-wrap justify-center gap-4">
                    <div v-for="category in categories" :key="category.name" @click="selectCategory(category)" :class="[
                        'inline-flex items-center justify-center px-8 py-4 text-base font-semibold transition-all duration-200 border-2 rounded-md mt-9 cursor-pointer',
                        category === activeCategory
                            ? 'text-white bg-black border-black'
                            : 'text-gray-900 border-gray-200 hover:bg-black hover:text-white hover:border-black focus:bg-black focus:text-white focus:border-black'
                    ]" role="button" tabindex="0">
                        {{ category.name }}
                    </div>
                </div>

                <!-- Affichage pour mobile -->
                <div v-else class="mt-6">
                    <div v-for="category in categories" :key="category.name" class="mb-12">
                        <!-- Augmenter le mb-8 à mb-12 pour plus d'espace -->
                        <h3 class="text-lg font-semibold text-black mb-4"> <!-- Ajout d'une marge sous le titre -->
                            {{ category.name }}
                        </h3>
                        <div class="grid grid-cols-2 gap-6 mt-6">
                            <!-- Augmentation du gap pour espacer les compétences -->
                            <div v-for="skill in category.skills" :key="skill.title" class="flex flex-col items-center">
                                <img :src="skill.icon" alt="Skill Icon" class="w-12 h-12 mb-4" />
                                <!-- Agrandissement des icônes et ajout d'une marge en bas -->
                                <h4 class="text-sm font-semibold mb-2">{{ skill.title }}</h4>
                                <!-- Ajout de marge sous les titres -->
                                <p class="text-xs text-gray-600 text-center">{{ skill.description }}</p>
                                <!-- Centrer le texte et ajuster l'espacement -->
                            </div>
                        </div>
                    </div>
                </div>
                <div v-if="selectedCategory"
                    class="grid grid-cols-1 text-center sm:grid-cols-2 lg:grid-cols-4 gap-y-8 sm:gap-12 mt-20">
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
        </div>
    </section>
</template>

<style scoped>
@media (max-width: 640px) {
    h3 {
        font-size: 1.25rem;
        /* Augmenter légèrement la taille des titres des catégories sur mobile */
    }

    img {
        width: 3rem;
        /* Agrandir les icônes pour plus de visibilité */
        height: 3rem;
    }
}
</style>