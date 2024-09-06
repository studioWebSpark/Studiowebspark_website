<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { onMounted } from 'vue';
import CookieConsent from '@/Components/CookieConsent.vue';
import Footer from '@/Components/Footer.vue';



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
</script>
<style scoped>
/* Ajoutez vos styles personnalisés ici */
#live-chat {
    z-index: 9999;
    /* Assurez-vous que le chatbox n'interfère pas avec le contenu */
}
</style>

<template>

    <Head title="Accueil" />

    <AuthenticatedLayout>
        <CookieConsent />


        <section class="pt-12  sm:pt-16">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="max-w-2xl mx-auto text-center">
                    <h1 class="px-6 text-lg text-gray-600 font-inter"> Développez votre entreprise avec des sites web et
                        applications performants</h1>
                    <p
                        class="mt-5 text-4xl font-bold leading-tight text-gray-900 sm:leading-tight sm:text-5xl lg:text-6xl lg:leading-tight font-pj">
                        Solutions de développement Web et d'applications adaptées à vos
                        <span class="relative inline-flex sm:inline">
                            <span
                                class="bg-gradient-to-r from-[#44BCFF] via-[#FF44EC] to-[#FF675E] blur-lg filter opacity-30 w-full h-full absolute inset-0"></span>
                            <span class="relative"> besoins </span>
                        </span>
                    </p>

                    <div class="px-8 sm:items-center sm:justify-center sm:px-0 sm:space-x-5 sm:flex mt-9">
                        <a href="#" title=""
                            class="inline-flex items-center justify-center w-full px-8 py-3 text-lg font-bold text-white transition-all duration-200 bg-gray-900 border-2 border-transparent sm:w-auto rounded-xl font-pj hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                            role="button">
                            Découvrez mes projets
                        </a>

                        <a href="#" title=""
                            class="inline-flex items-center justify-center w-full px-6 py-3 mt-4 text-lg font-bold text-gray-900 transition-all duration-200 border-2 border-gray-400 sm:w-auto sm:mt-0 rounded-xl font-pj focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 hover:bg-gray-900 focus:bg-gray-900 hover:text-white focus:text-white hover:border-gray-900 focus:border-gray-900"
                            role="button">
                            <svg class="w-5 h-5 mr-2" viewBox="0 0 18 18" fill="none" stroke="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.18003 13.4261C6.8586 14.3918 5 13.448 5 11.8113V5.43865C5 3.80198 6.8586 2.85821 8.18003 3.82387L12.5403 7.01022C13.6336 7.80916 13.6336 9.44084 12.5403 10.2398L8.18003 13.4261Z"
                                    stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            Proposez votre projet
                        </a>
                    </div>

                    <p class="mt-8 text-base text-gray-500 font-inter">Première consultation gratuite · Pas de carte de
                        crédit requise</p>
                </div>
            </div>

            <div class="pb-12 ">
                <div class="relative">
                    <div class="absolute inset-0 h-2/3"></div>
                    <div class="relative mx-auto">
                        <div class="lg:max-w-6xl lg:mx-auto">
                            <img class="transform scale-110"
                                src="https://cdn.rareblocks.xyz/collection/clarity/images/hero/2/illustration.png"
                                alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-10 sm:py-16 lg:py-24">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 gap-12 text-center sm:grid-cols-2 md:grid-cols-3 lg:gap-y-16">
                    <div>
                        <div class="relative flex items-center justify-center mx-auto">
                            <svg class="text-blue-100" width="72" height="75" viewBox="0 0 72 75" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M63.6911 28.8569C68.0911 48.8121 74.6037 61.2674 53.2349 65.9792C31.8661 70.6909 11.6224 61.2632 7.22232 41.308C2.82229 21.3528 3.6607 12.3967 25.0295 7.68503C46.3982 2.97331 59.2911 8.90171 63.6911 28.8569Z" />
                            </svg>
                            <svg class="absolute text-blue-600 w-9 h-9" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                            </svg>
                        </div>
                        <h3 class="mt-8 text-lg font-semibold text-black">Secured Payments</h3>
                        <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit
                            aliqua
                            dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                    </div>

                    <div>
                        <div class="relative flex items-center justify-center mx-auto">
                            <svg class="text-orange-100" width="62" height="64" viewBox="0 0 62 64" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M62 13.001C62 33.4355 53.9345 64.001 33.5 64.001C13.0655 64.001 0 50.435 0 30.0005C0 9.56596 2.56546 4.00021 23 4.00021C43.4345 4.00021 62 -7.43358 62 13.001Z" />
                            </svg>
                            <svg class="absolute text-orange-600 w-9 h-9" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="mt-8 text-lg font-semibold text-black">Fast & Easy to Load</h3>
                        <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit
                            aliqua
                            dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                    </div>

                    <div>
                        <div class="relative flex items-center justify-center mx-auto">
                            <svg class="text-green-100" width="66" height="68" viewBox="0 0 66 68" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M65.5 30C65.5 50.4345 46.4345 68 26 68C5.56546 68 0 50.4345 0 30C0 9.56546 12.5655 0 33 0C53.4345 0 65.5 9.56546 65.5 30Z" />
                            </svg>
                            <svg class="absolute text-green-600 w-9 h-9" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                            </svg>
                        </div>
                        <h3 class="mt-8 text-lg font-semibold text-black">Light & Dark Version</h3>
                        <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit
                            aliqua
                            dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                    </div>

                    <div>
                        <div class="relative flex items-center justify-center mx-auto">
                            <svg class="text-purple-100" width="66" height="68" viewBox="0 0 66 68" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M65.5 30C65.5 50.4345 46.4345 68 26 68C5.56546 68 0 50.4345 0 30C0 9.56546 12.5655 0 33 0C53.4345 0 65.5 9.56546 65.5 30Z" />
                            </svg>
                            <svg class="absolute text-purple-600 w-9 h-9" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                            </svg>
                        </div>
                        <h3 class="mt-8 text-lg font-semibold text-black">Light & Dark Version</h3>
                        <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit
                            aliqua
                            dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                    </div>

                    <div>
                        <div class="relative flex items-center justify-center mx-auto">
                            <svg class="text-gray-100" width="65" height="70" viewBox="0 0 65 70" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M64.5 26C64.5 46.4345 56.4345 70 36 70C15.5655 70 0 53.9345 0 33.5C0 13.0655 13.0655 0 33.5 0C53.9345 0 64.5 5.56546 64.5 26Z" />
                            </svg>
                            <svg class="absolute text-gray-600 w-9 h-9" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="mt-8 text-lg font-semibold text-black">Fast & Easy to Load</h3>
                        <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit
                            aliqua
                            dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                    </div>

                    <div>
                        <div class="relative flex items-center justify-center mx-auto">
                            <svg class="text-yellow-100" width="78" height="78" viewBox="0 0 78 78" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.49996 28.0002C4.09993 47.9554 14.1313 66.7885 35.5 71.5002C56.8688 76.2119 68.0999 58.4553 72.5 38.5001C76.9 18.5449 68.3688 12.711 47 7.99931C25.6312 3.28759 12.9 8.04499 8.49996 28.0002Z" />
                            </svg>
                            <svg class="absolute text-yellow-500 w-9 h-9" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                            </svg>
                        </div>
                        <h3 class="mt-8 text-lg font-semibold text-black">Secured Payments</h3>
                        <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit
                            aliqua
                            dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                    </div>

                    <div>
                        <div class="relative flex items-center justify-center mx-auto">
                            <svg class="text-gray-100" width="62" height="64" viewBox="0 0 62 64" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M62 13.001C62 33.4355 53.9345 64.001 33.5 64.001C13.0655 64.001 0 50.435 0 30.0005C0 9.56596 2.56546 4.00021 23 4.00021C43.4345 4.00021 62 -7.43358 62 13.001Z">
                                </path>
                            </svg>
                            <svg class="absolute text-gray-600 w-9 h-9" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                            </svg>
                        </div>
                        <h3 class="mt-8 text-lg font-semibold text-black">Light & Dark Version</h3>
                        <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit
                            aliqua
                            dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                    </div>

                    <div>
                        <div class="relative flex items-center justify-center mx-auto">
                            <svg class="text-rose-100" width="72" height="75" viewBox="0 0 72 75" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M63.6911 28.8569C68.0911 48.8121 74.6037 61.2674 53.2349 65.9792C31.8661 70.6909 11.6224 61.2632 7.22232 41.308C2.82229 21.3528 3.6607 12.3967 25.0295 7.68503C46.3982 2.97331 59.2911 8.90171 63.6911 28.8569Z" />
                            </svg>
                            <svg class="absolute text-rose-600 w-9 h-9" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                            </svg>
                        </div>
                        <h3 class="mt-8 text-lg font-semibold text-black">Secured Payments</h3>
                        <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit
                            aliqua
                            dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                    </div>

                    <div>
                        <div class="relative flex items-center justify-center mx-auto">
                            <svg class="text-lime-100" width="62" height="65" viewBox="0 0 62 65" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0 13.0264C0 33.4609 8.06546 64.0264 28.5 64.0264C48.9345 64.0264 62 50.4604 62 30.0259C62 9.59135 59.4345 4.0256 39 4.0256C18.5655 4.0256 0 -7.40819 0 13.0264Z" />
                            </svg>

                            <svg class="absolute text-lime-600 w-9 h-9" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="mt-8 text-lg font-semibold text-black">Fast & Easy to Load</h3>
                        <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit
                            aliqua
                            dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                    </div>
                </div>
            </div>
        </section>


        <section class=" mb-20">
            <div class="mt-12 sm:mt-16">
                <svg class="w-auto h-4 mx-auto text-gray-300" viewBox="0 0 172 16" fill="none" stroke="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 11 1)" />
                    <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 46 1)" />
                    <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 81 1)" />
                    <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 116 1)" />
                    <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 151 1)" />
                    <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 18 1)" />
                    <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 53 1)" />
                    <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 88 1)" />
                    <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 123 1)" />
                    <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 158 1)" />
                    <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 25 1)" />
                    <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 60 1)" />
                    <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 95 1)" />
                    <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 130 1)" />
                    <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 165 1)" />
                    <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 32 1)" />
                    <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 67 1)" />
                    <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 102 1)" />
                    <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 137 1)" />
                    <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 172 1)" />
                    <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 39 1)" />
                    <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 74 1)" />
                    <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 109 1)" />
                    <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 144 1)" />
                </svg>
            </div>

            <div
                class="max-w-3xl mx-auto mt-12 space-y-8 sm:space-y-0 sm:flex sm:items-center sm:justify-center sm:mt-16 sm:gap-x-16">
                <div>
                    <img class="w-auto mx-auto h-11"
                        src="https://cdn.rareblocks.xyz/collection/clarity/images/team/1/logo-waverio.svg" alt="" />
                </div>

                <div>
                    <img class="w-auto mx-auto h-11"
                        src="https://cdn.rareblocks.xyz/collection/clarity/images/team/1/logo-squarestone.svg" alt="" />
                </div>

                <div>
                    <img class="w-auto mx-auto h-11"
                        src="https://cdn.rareblocks.xyz/collection/clarity/images/team/1/logo-creaty.svg" alt="" />
                </div>
            </div>

        </section>

        <section class="py-10 sm:py-16 lg:py-24">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="max-w-2xl mx-auto text-center">
                    <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">How does it
                        work?
                    </h2>
                    <p class="max-w-lg mx-auto mt-4 text-base leading-relaxed text-gray-600">Amet minim mollit non
                        deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis.</p>
                </div>

                <div class="relative mt-12 lg:mt-20">
                    <div class="absolute inset-x-0 hidden xl:px-44 top-2 md:block md:px-20 lg:px-28">
                        <img class="w-full"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/steps/2/curved-dotted-line.svg"
                            alt="" />
                    </div>

                    <div class="relative grid grid-cols-1 text-center gap-y-12 md:grid-cols-3 gap-x-12">
                        <div>
                            <div
                                class="flex items-center justify-center w-16 h-16 mx-auto bg-white border-2 border-gray-200 rounded-full shadow">
                                <span class="text-xl font-semibold text-gray-700"> 1 </span>
                            </div>
                            <h3 class="mt-6 text-xl font-semibold leading-tight text-black md:mt-10">Create a free
                                account</h3>
                            <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit
                                aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                        </div>

                        <div>
                            <div
                                class="flex items-center justify-center w-16 h-16 mx-auto bg-white border-2 border-gray-200 rounded-full shadow">
                                <span class="text-xl font-semibold text-gray-700"> 2 </span>
                            </div>
                            <h3 class="mt-6 text-xl font-semibold leading-tight text-black md:mt-10">Build your
                                website
                            </h3>
                            <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit
                                aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                        </div>

                        <div>
                            <div
                                class="flex items-center justify-center w-16 h-16 mx-auto bg-white border-2 border-gray-200 rounded-full shadow">
                                <span class="text-xl font-semibold text-gray-700"> 3 </span>
                            </div>
                            <h3 class="mt-6 text-xl font-semibold leading-tight text-black md:mt-10">Release &
                                Launch
                            </h3>
                            <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit
                                aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-10  sm:py-16 lg:py-24">
            <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                <div class="max-w-2xl mx-auto text-center">
                    <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Integrate with
                        apps
                    </h2>
                    <p class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-gray-600">Amet minim mollit non
                        deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis.</p>
                </div>

                <div class="grid grid-cols-1 gap-6 mt-12 lg:mt-16 xl:gap-10 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="overflow-hidden bg-white rounded shadow">
                        <div class="p-8">
                            <div class="flex items-center">
                                <img class="flex-shrink-0 w-12 h-auto"
                                    src="https://cdn.rareblocks.xyz/collection/celebration/images/integration/3/gmail-logo.png"
                                    alt="" />
                                <div class="ml-5 mr-auto">
                                    <p class="text-xl font-semibold text-black">Gmail</p>
                                    <p class="mt-px text-sm text-gray-600">Direct Integration</p>
                                </div>
                                <svg class="hidden w-5 h-5 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </div>
                            <p class="text-base leading-relaxed text-gray-600 mt-7">Lorem ipsum dolor sit amet,
                                consectetur adipis cing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                        </div>
                    </div>

                    <div class="overflow-hidden bg-white rounded shadow">
                        <div class="p-8">
                            <div class="flex items-center">
                                <img class="flex-shrink-0 w-12 h-auto"
                                    src="https://cdn.rareblocks.xyz/collection/celebration/images/integration/3/slack-logo.png"
                                    alt="" />
                                <div class="ml-5 mr-auto">
                                    <p class="text-xl font-semibold text-black">Slack</p>
                                    <p class="mt-px text-sm text-gray-600">Direct Integration</p>
                                </div>
                                <svg class="block w-6 h-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </div>
                            <p class="text-base leading-relaxed text-gray-600 mt-7">Lorem ipsum dolor sit amet,
                                consectetur adipis cing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                        </div>
                    </div>

                    <div class="overflow-hidden bg-white rounded shadow">
                        <div class="p-8">
                            <div class="flex items-center">
                                <img class="flex-shrink-0 w-12 h-auto"
                                    src="https://cdn.rareblocks.xyz/collection/celebration/images/integration/3/shopify-logo.png"
                                    alt="" />
                                <div class="ml-5 mr-auto">
                                    <p class="text-xl font-semibold text-black">Shopify</p>
                                    <p class="mt-px text-sm text-gray-600">Direct Integration</p>
                                </div>
                                <svg class="hidden w-5 h-5 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </div>
                            <p class="text-base leading-relaxed text-gray-600 mt-7">Lorem ipsum dolor sit amet,
                                consectetur adipis cing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                        </div>
                    </div>

                    <div class="overflow-hidden bg-white rounded shadow">
                        <div class="p-8">
                            <div class="flex items-center">
                                <img class="flex-shrink-0 w-12 h-auto"
                                    src="https://cdn.rareblocks.xyz/collection/celebration/images/integration/3/intercom-logo.png"
                                    alt="" />
                                <div class="ml-5 mr-auto">
                                    <p class="text-xl font-semibold text-black">Intercom</p>
                                    <p class="mt-px text-sm text-gray-600">Direct Integration</p>
                                </div>
                                <svg class="hidden w-5 h-5 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </div>
                            <p class="text-base leading-relaxed text-gray-600 mt-7">Lorem ipsum dolor sit amet,
                                consectetur adipis cing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                        </div>
                    </div>

                    <div class="overflow-hidden bg-white rounded shadow">
                        <div class="p-8">
                            <div class="flex items-center">
                                <img class="flex-shrink-0 w-12 h-auto"
                                    src="https://cdn.rareblocks.xyz/collection/celebration/images/integration/3/twitter-logo.png"
                                    alt="" />
                                <div class="ml-5 mr-auto">
                                    <p class="text-xl font-semibold text-black">Twitter</p>
                                    <p class="mt-px text-sm text-gray-600">Direct Integration</p>
                                </div>
                                <svg class="hidden w-5 h-5 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </div>
                            <p class="text-base leading-relaxed text-gray-600 mt-7">Lorem ipsum dolor sit amet,
                                consectetur adipis cing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                        </div>
                    </div>

                    <div class="overflow-hidden bg-white rounded shadow">
                        <div class="p-8">
                            <div class="flex items-center">
                                <img class="flex-shrink-0 w-12 h-auto"
                                    src="https://cdn.rareblocks.xyz/collection/celebration/images/integration/3/sketch-logo.png"
                                    alt="" />
                                <div class="ml-5 mr-auto">
                                    <p class="text-xl font-semibold text-black">Sketch</p>
                                    <p class="mt-px text-sm text-gray-600">Direct Integration</p>
                                </div>
                                <svg class="hidden w-5 h-5 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </div>
                            <p class="text-base leading-relaxed text-gray-600 mt-7">Lorem ipsum dolor sit amet,
                                consectetur adipis cing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mt-12 text-center">
                    <a href="#" title=""
                        class="inline-flex p-3 font-medium text-blue-600 transition-all duration-200 hover:text-blue-700 focus:text-blue-700 hover:underline">
                        Check all 1,593 applications </a>
                </div>
            </div>
        </section>

        <section class="py-10  sm:py-16 lg:py-24">
            <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                <div class="max-w-2xl mx-auto text-center">
                    <h2 class="text-3xl font-bold leading-tight text-gray-900 sm:text-4xl lg:text-5xl">Contact us
                    </h2>
                    <p class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-gray-500">Amet minim mollit non
                        deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis.</p>
                </div>

                <div class="max-w-5xl mx-auto mt-12 sm:mt-16">
                    <div class="grid grid-cols-1 gap-6 px-8 text-center md:px-0 md:grid-cols-3">
                        <div class="overflow-hidden bg-white rounded-xl">
                            <div class="p-6">
                                <svg class="flex-shrink-0 w-10 h-10 mx-auto text-gray-400"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <p class="mt-6 text-lg font-medium text-gray-900">+1-316-555-0116</p>
                                <p class="mt-1 text-lg font-medium text-gray-900">+1-446-526-0117</p>
                            </div>
                        </div>

                        <div class="overflow-hidden bg-white rounded-xl">
                            <div class="p-6">
                                <svg class="flex-shrink-0 w-10 h-10 mx-auto text-gray-400"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <p class="mt-6 text-lg font-medium text-gray-900">contact@example.com</p>
                                <p class="mt-1 text-lg font-medium text-gray-900">hr@example.com</p>
                            </div>
                        </div>

                        <div class="overflow-hidden bg-white rounded-xl">
                            <div class="p-6">
                                <svg class="flex-shrink-0 w-10 h-10 mx-auto text-gray-400"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <p class="mt-6 text-lg font-medium leading-relaxed text-gray-900">8502 Preston Rd.
                                    Ingle, Maine 98380, USA</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 overflow-hidden bg-white rounded-xl">
                        <div class="px-6 py-12 sm:p-12">
                            <h3 class="text-3xl font-semibold text-center text-gray-900">Send us a message</h3>

                            <form action="#" method="POST" class="mt-14">
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-5 gap-y-4">
                                    <div>
                                        <label for="" class="text-base font-medium text-gray-900"> Your name
                                        </label>
                                        <div class="mt-2.5 relative">
                                            <input type="text" name="" id="" placeholder="Enter your full name"
                                                class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md focus:outline-none focus:border-blue-600 caret-blue-600" />
                                        </div>
                                    </div>

                                    <div>
                                        <label for="" class="text-base font-medium text-gray-900"> Email address
                                        </label>
                                        <div class="mt-2.5 relative">
                                            <input type="email" name="" id="" placeholder="Enter your full name"
                                                class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md focus:outline-none focus:border-blue-600 caret-blue-600" />
                                        </div>
                                    </div>

                                    <div>
                                        <label for="" class="text-base font-medium text-gray-900"> Phone number
                                        </label>
                                        <div class="mt-2.5 relative">
                                            <input type="tel" name="" id="" placeholder="Enter your full name"
                                                class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md focus:outline-none focus:border-blue-600 caret-blue-600" />
                                        </div>
                                    </div>

                                    <div>
                                        <label for="" class="text-base font-medium text-gray-900"> Company name
                                        </label>
                                        <div class="mt-2.5 relative">
                                            <input type="text" name="" id="" placeholder="Enter your full name"
                                                class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md focus:outline-none focus:border-blue-600 caret-blue-600" />
                                        </div>
                                    </div>

                                    <div class="sm:col-span-2">
                                        <label for="" class="text-base font-medium text-gray-900"> Message </label>
                                        <div class="mt-2.5 relative">
                                            <textarea name="" id="" placeholder=""
                                                class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md resize-y focus:outline-none focus:border-blue-600 caret-blue-600"
                                                rows="4"></textarea>
                                        </div>
                                    </div>

                                    <div class="sm:col-span-2">
                                        <button type="submit"
                                            class="inline-flex items-center justify-center w-full px-4 py-4 mt-2 text-base font-semibold text-white transition-all duration-200 bg-blue-600 border border-transparent rounded-md focus:outline-none hover:bg-blue-700 focus:bg-blue-700">
                                            Send
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-10 sm:pt-16 lg:pt-24">
            <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-12 gap-y-12 gap-x-8 xl:gap-x-12">
                    <div class="col-span-2 md:col-span-4 xl:pr-8">
                        <img class="w-auto h-9" src="https://cdn.rareblocks.xyz/collection/celebration/images/logo.svg"
                            alt="" />

                        <p class="text-base leading-relaxed text-gray-600 mt-7">Amet minim mollit non deserunt
                            ullamco
                            est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>

                        <a href="#" title=""
                            class="inline-flex items-center justify-center px-6 py-4 font-semibold text-white transition-all duration-200 bg-blue-600 rounded-md hover:bg-blue-700 focus:bg-blue-700 mt-7">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                            Start Live Chat
                        </a>
                    </div>

                    <div class="lg:col-span-2">
                        <p class="text-base font-semibold text-gray-900">Company</p>

                        <ul class="mt-6 space-y-5">
                            <li>
                                <a href="#" title=""
                                    class="flex text-sm text-gray-800 transition-all duration-200 hover:text-orange-600 focus:text-orange-600">
                                    About </a>
                            </li>

                            <li>
                                <a href="#" title=""
                                    class="flex text-sm text-gray-800 transition-all duration-200 hover:text-orange-600 focus:text-orange-600">
                                    Features </a>
                            </li>

                            <li>
                                <a href="#" title=""
                                    class="flex text-sm text-gray-800 transition-all duration-200 hover:text-orange-600 focus:text-orange-600">
                                    Works </a>
                            </li>

                            <li>
                                <a href="#" title=""
                                    class="flex text-sm text-gray-800 transition-all duration-200 hover:text-orange-600 focus:text-orange-600">
                                    Career </a>
                            </li>
                        </ul>
                    </div>

                    <div class="lg:col-span-2">
                        <p class="text-base font-semibold text-gray-900">Help</p>

                        <ul class="mt-6 space-y-4">
                            <li>
                                <a href="#" title=""
                                    class="flex text-sm text-gray-800 transition-all duration-200 hover:text-orange-600 focus:text-orange-600">
                                    Customer Support </a>
                            </li>

                            <li>
                                <a href="#" title=""
                                    class="flex text-sm text-gray-800 transition-all duration-200 hover:text-orange-600 focus:text-orange-600">
                                    Delivery Details </a>
                            </li>

                            <li>
                                <a href="#" title=""
                                    class="flex text-sm text-gray-800 transition-all duration-200 hover:text-orange-600 focus:text-orange-600">
                                    Terms & Conditions </a>
                            </li>

                            <li>
                                <a href="#" title=""
                                    class="flex text-sm text-gray-800 transition-all duration-200 hover:text-orange-600 focus:text-orange-600">
                                    Privacy Policy </a>
                            </li>
                        </ul>
                    </div>

                    <div class="lg:col-span-2">
                        <p class="text-base font-semibold text-gray-900">Resources</p>

                        <ul class="mt-6 space-y-5">
                            <li>
                                <a href="#" title=""
                                    class="flex text-sm text-gray-800 transition-all duration-200 hover:text-orange-600 focus:text-orange-600">
                                    Free eBooks </a>
                            </li>

                            <li>
                                <a href="#" title=""
                                    class="flex text-sm text-gray-800 transition-all duration-200 hover:text-orange-600 focus:text-orange-600">
                                    Development Tutorial </a>
                            </li>

                            <li>
                                <a href="#" title=""
                                    class="flex text-sm text-gray-800 transition-all duration-200 hover:text-orange-600 focus:text-orange-600">
                                    How to - Blog </a>
                            </li>

                            <li>
                                <a href="#" title=""
                                    class="flex text-sm text-gray-800 transition-all duration-200 hover:text-orange-600 focus:text-orange-600">
                                    YouTube Playlist </a>
                            </li>
                        </ul>
                    </div>

                    <div class="lg:col-span-2">
                        <p class="text-base font-semibold text-gray-900">Extra Links</p>

                        <ul class="mt-6 space-y-5">
                            <li>
                                <a href="#" title=""
                                    class="flex text-sm text-gray-800 transition-all duration-200 hover:text-orange-600 focus:text-orange-600">
                                    Customer Support </a>
                            </li>

                            <li>
                                <a href="#" title=""
                                    class="flex text-sm text-gray-800 transition-all duration-200 hover:text-orange-600 focus:text-orange-600">
                                    Delivery Details </a>
                            </li>

                            <li>
                                <a href="#" title=""
                                    class="flex text-sm text-gray-800 transition-all duration-200 hover:text-orange-600 focus:text-orange-600">
                                    Terms & Conditions </a>
                            </li>

                            <li>
                                <a href="#" title=""
                                    class="flex text-sm text-gray-800 transition-all duration-200 hover:text-orange-600 focus:text-orange-600">
                                    Privacy Policy </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <hr class="mt-16 mb-10 border-gray-200" />

                <div class="sm:flex sm:items-center sm:justify-between">
                    <p class="text-sm text-gray-600">© Copyright 2021, All Rights Reserved by Postcraft</p>

                    <ul class="flex items-center mt-5 space-x-3 md:order-3 sm:mt-0">
                        <li>
                            <a href="#" title=""
                                class="flex items-center justify-center text-gray-800 transition-all duration-200 bg-transparent border border-gray-300 rounded-full w-7 h-7 focus:bg-orange-600 hover:text-white focus:text-white hover:bg-orange-600 hover:border-orange-600 focus:border-orange-600">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path
                                        d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z">
                                    </path>
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a href="#" title=""
                                class="flex items-center justify-center text-gray-800 transition-all duration-200 bg-transparent border border-gray-300 rounded-full w-7 h-7 focus:bg-orange-600 hover:text-white focus:text-white hover:bg-orange-600 hover:border-orange-600 focus:border-orange-600">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path
                                        d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127A22.336 22.336 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z">
                                    </path>
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a href="#" title=""
                                class="flex items-center justify-center text-gray-800 transition-all duration-200 bg-transparent border border-gray-300 rounded-full w-7 h-7 focus:bg-orange-600 hover:text-white focus:text-white hover:bg-orange-600 hover:border-orange-600 focus:border-orange-600">
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
                            <a href="#" title=""
                                class="flex items-center justify-center text-gray-800 transition-all duration-200 bg-transparent border border-gray-300 rounded-full w-7 h-7 focus:bg-orange-600 hover:text-white focus:text-white hover:bg-orange-600 hover:border-orange-600 focus:border-orange-600">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.026 2c-5.509 0-9.974 4.465-9.974 9.974 0 4.406 2.857 8.145 6.821 9.465.499.09.679-.217.679-.481 0-.237-.008-.865-.011-1.696-2.775.602-3.361-1.338-3.361-1.338-.452-1.152-1.107-1.459-1.107-1.459-.905-.619.069-.605.069-.605 1.002.07 1.527 1.028 1.527 1.028.89 1.524 2.336 1.084 2.902.829.091-.645.351-1.085.635-1.334-2.214-.251-4.542-1.107-4.542-4.93 0-1.087.389-1.979 1.024-2.675-.101-.253-.446-1.268.099-2.64 0 0 .837-.269 2.742 1.021a9.582 9.582 0 0 1 2.496-.336 9.554 9.554 0 0 1 2.496.336c1.906-1.291 2.742-1.021 2.742-1.021.545 1.372.203 2.387.099 2.64.64.696 1.024 1.587 1.024 2.675 0 3.833-2.33 4.675-4.552 4.922.355.308.675.916.675 1.846 0 1.334-.012 2.41-.012 2.737 0 .267.178.577.687.479C19.146 20.115 22 16.379 22 11.974 22 6.465 17.535 2 12.026 2z">
                                    </path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

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
