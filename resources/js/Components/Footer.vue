<script setup>
import ApplicationLogo from './ApplicationLogo.vue';
import { useForm } from '@inertiajs/vue3';
import { ref } from 'vue';

const message = ref('');

const form = useForm({
    email: ''
});

const submitForm = () => {
    form.post('/newsletter-subscribe', {
        preserveScroll: true,
        onSuccess: () => {
            message.value = 'Merci de vous être abonné à notre newsletter !';
            form.reset(); 

           
            setTimeout(() => {
                message.value = '';
            }, 2000); 
        },
        onError: () => {
            message.value = ''; 
        }
    });
};

</script>

<template>



    <section class="py-10 bg-gray-50 sm:pt-16 lg:pt-24">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="grid grid-cols-2 md:col-span-3 lg:grid-cols-6 gap-y-16 gap-x-12">
                <div class="col-span-2 md:col-span-3 lg:col-span-2 lg:pr-8">
                    <ApplicationLogo class="w-auto h-12" />

                    <p class="text-base leading-relaxed text-gray-600 mt-7">Allumez l’étincelle de
                        votre présence en ligne avec des solutions sur mesure.</p>

                    <ul class="flex items-center space-x-3 mt-9">


                        <li>
                            <a href="https://www.instagram.com/studiowebspark/" title="réseaux sociaux"
                                class="flex items-center justify-center text-white transition-all duration-200 bg-gray-800 rounded-full w-7 h-7 hover:bg-blue-600 focus:bg-blue-600"
                                target="_blank" rel="noopener noreferrer">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path
                                        d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248 4.623 4.623 0 0 0 0-9.248zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008z">
                                    </path>
                                    <circle cx="16.806" cy="7.207" r="1.078"></circle>
                                    <path
                                        d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419 4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217zm-1.218 9.532a5.043 5.043 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711 4.985 4.985 0 0 1-1.67.311c-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.96 4.96 0 0 1-1.669-.311 2.985 2.985 0 0 1-1.719-1.711 5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311 2.991 2.991 0 0 1 1.712 1.712 5.08 5.08 0 0 1 .311 1.669c.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011z">
                                    </path>
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a href="https://github.com/studioWebSpark/" title="réseaux sociaux"
                                class="flex items-center justify-center text-white transition-all duration-200 bg-gray-800 rounded-full w-7 h-7 hover:bg-blue-600 focus:bg-blue-600"
                                target="_blank" rel="noopener noreferrer">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.026 2c-5.509 0-9.974 4.465-9.974 9.974 0 4.406 2.857 8.145 6.821 9.465.499.09.679-.217.679-.481 0-.237-.008-.865-.011-1.696-2.775.602-3.361-1.338-3.361-1.338-.452-1.152-1.107-1.459-1.107-1.459-.905-.619.069-.605.069-.605 1.002.07 1.527 1.028 1.527 1.028.89 1.524 2.336 1.084 2.902.829.091-.645.351-1.085.635-1.334-2.214-.251-4.542-1.107-4.542-4.93 0-1.087.389-1.979 1.024-2.675-.101-.253-.446-1.268.099-2.64 0 0 .837-.269 2.742 1.021a9.582 9.582 0 0 1 2.496-.336 9.554 9.554 0 0 1 2.496.336c1.906-1.291 2.742-1.021 2.742-1.021.545 1.372.203 2.387.099 2.64.64.696 1.024 1.587 1.024 2.675 0 3.833-2.33 4.675-4.552 4.922.355.308.675.916.675 1.846 0 1.334-.012 2.41-.012 2.737 0 .267.178.577.687.479C19.146 20.115 22 16.379 22 11.974 22 6.465 17.535 2 12.026 2z">
                                    </path>
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a href=" https://www.linkedin.com/in/mesut-kircil-6a029b288/" title="LinkedIn"
                                class="flex items-center justify-center text-white transition-all duration-200 bg-gray-800 rounded-full w-7 h-7 hover:bg-blue-600 focus:bg-blue-600"
                                target="_blank" rel="noopener noreferrer">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path
                                        d="M20.447 20.452H16.87v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.137 1.445-2.137 2.937v5.669h-3.583V9h3.44v1.561h.049c.48-.909 1.654-1.864 3.404-1.864 3.637 0 4.31 2.391 4.31 5.499v6.255zM5.337 7.433a2.073 2.073 0 0 1-2.074-2.073 2.073 2.073 0 0 1 2.073-2.073c1.143 0 2.073.93 2.073 2.073a2.073 2.073 0 0 1-2.073 2.073zM7.119 20.452H3.553V9h3.566v11.452zM22.225 0H1.771C.79 0 0 .774 0 1.728v20.543C0 23.225.79 24 1.771 24h20.451C23.21 24 24 23.225 24 22.271V1.728C24 .774 23.21 0 22.225 0z" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>

                <div>
                    <p class="text-sm font-semibold tracking-widest text-gray-700 uppercase">Compagnie</p>

                    <ul class="mt-6 space-y-4">
                        <li>
                            <a href="/portfolio" title=""
                                class="flex text-base text-black transition-all duration-200 hover:text-green-600 focus:text-green-600">
                                Portfolio </a>
                        </li>

                        <li>
                            <a href="#avantage" title=""
                                class="flex text-base text-black transition-all duration-200 hover:text-green-600 focus:text-green-600">
                                Les Avantages </a>
                        </li>

                        <li>
                            <a href="#fonctionnement" title=""
                                class="flex text-base text-black transition-all duration-200 hover:text-green-600 focus:text-green-600">
                                Fonctionnement </a>
                        </li>

                       
                    </ul>
                </div>

                <div>
                    <p class="text-sm font-semibold tracking-widest text-gray-700 uppercase">Aide</p>

                    <ul class="mt-6 space-y-4">
                        <li>
                            <a href="/termes-and-privacy" title="termes et conditions"
                                class="flex text-base text-black transition-all duration-200 hover:text-green-600 focus:text-green-600">
                                Termes & Conditions </a>
                        </li>

                        <li>
                            <a href="/termes-and-privacy" title=" Politique de confidentialité" 
                                class="flex text-base text-black transition-all duration-200 hover:text-green-600 focus:text-green-600">
                                Politique de confidentialité </a>
                        </li>
                    </ul>
                </div>

                <div class="col-span-2 md:col-span-1 lg:col-span-2 lg:pl-8">
                    <p class="text-sm font-semibold tracking-widest text-gray-700 uppercase">Abonnez-vous à la
                        newsletter</p>

                    <form @submit.prevent="submitForm" class="mt-6">
                        <div>
                            <label for="email" class="sr-only">Email</label>
                            <input v-model="form.email" type="email" id="email" placeholder="Entrez votre email"
                                class="block w-full p-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md focus:outline-none" />
                            <!-- Affichage des erreurs de validation -->
                            <p v-if="form.errors.email" class="mt-2 text-red-600">{{ form.errors.email }}</p>
                        </div>

                        <button type="submit" :disabled="form.processing"
                            class="inline-flex items-center justify-center px-6 py-4 mt-3 font-semibold text-white transition-all duration-200 bg-gray-900 rounded-md hover:bg-gray-600 focus:bg-green-700">
                            S'abonner
                        </button>

                        <!-- Message de succès -->
                        <p v-if="message" class="mt-3 text-green-600">{{ message }}</p>
                    </form>
                </div>
            </div>

            <hr class="mt-16 mb-10 border-gray-200" />

            <p class="text-sm text-center text-gray-600">
                © Copyright 2024, Tous droits réservés par Studiowebspark</p>
        </div>
    </section>
</template>
<style scoped>
html {
    scroll-behavior: smooth;
}
</style>