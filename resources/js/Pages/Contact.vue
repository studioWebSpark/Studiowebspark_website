<script setup>
import Navbar from '@/Components/NavBar.vue';
import { Head } from '@inertiajs/vue3';
import CookieConsent from '@/Components/CookieConsent.vue';
import { useForm } from '@inertiajs/vue3';
import { ref } from 'vue';
import ToastNotification from '@/Components/ToastNotification.vue';
import Footer from '@/Components/Footer.vue';

const form = useForm({
    name: '',
    email: '',
    message: '',
    phone: ''
});

const successMessage = ref('');

const submitForm = () => {
    form.post(route('contact.store'), {
        preserveScroll: true,
        onSuccess: () => {
            form.reset();
            successMessage.value = 'Votre message a été envoyé avec succès. Nous vous contacterons bientôt.';
            setTimeout(() => {
                successMessage.value = '';
            }, 5000);
        }
    });
};


const balloons = [
    {
      
        id: 1,
        title: 'Une Idée',
        colorClass: 'bg-blue-500', 
        textColorClass: 'text-white',
        top: '20%',
        left: '0%',
        
    },
    {
        
        id: 2,
        title: 'Un Problème',
        colorClass: 'bg-red-500', 
        textColorClass: 'text-white',
        top: '50%',
        left: '20%',

    },
    {
     
        id: 3,
        title: 'Un Projets',
        colorClass: 'bg-yellow-500', 
        textColorClass: 'text-white', 
        top: '10%',
        left: '50%',

    },
    {
        id: 4,
        title: 'Solution',
        colorClass: 'bg-green-500', 
        textColorClass: 'text-white', 
        top: '80%',
        left: '10%',
    },
    {
        id: 5,
        title: 'Solidarité',
        colorClass: 'bg-purple-500',
        textColorClass: 'text-white',
        top: '40%',
        left: '70%',
    },
    {
        id: 6,
        title: 'Echange',
        colorClass: 'bg-orange-500',
        textColorClass: 'text-white',
        top: '110%',
        left: '10%',
    },
    {
        id: 7,
        title: 'Pro',
        colorClass: 'bg-gray-500',
        textColorClass: 'text-white',
        top: '70%',
        left: '50%',
    },
    {
        id: 8,
        title: 'Personnel',
        colorClass: 'bg-blue-200',
        textColorClass: 'text-white',
        top: '100%',
        left: '70%',
    },
    
   
];

function getBalloonStyle(balloon) {
    return {
        top: balloon.top,
        left: balloon.left,
        transform: `translate(-${balloon.left}, -${balloon.top})` // Ajuste le ballon pour qu'il soit centré à la position
    };
}
</script>

<template>

    <Head title="Contact">
        <meta name="description"
            content="Contactez-nous pour toute question ou demande d'information. Nous sommes là pour vous aider." />
        <meta property="og:title" content="Contact - Nous contacter" />
        <meta property="og:description"
            content="Vous avez une question ou besoin d'information ? Contactez-nous via notre formulaire ou par téléphone." />
    </Head>
    <CookieConsent />

    <Navbar>
        <CookieConsent />


        <section class="py-10 sm:py-16 lg:py-24 bg-cover bg-center">
            <div class="max-w-6xl px-4 mx-auto sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:items-stretch md:grid-cols-2 gap-x-12 lg:gap-x-20 gap-y-10">
                    <div class="flex flex-col justify-between lg:py-5">
                        <div>
                            <h2
                                class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:leading-tight lg:text-5xl">
                                Contactez-nous pour un
                                devis
                                personnalisé</h2>
                            <p class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-black"> Vous avez un projet
                                en tête ? Remplissez le formulaire ci-dessous pour nous envoyer
                                un
                                message.</p>

                        </div>

                        <div class="hidden md:mt-auto md:block">
                            <section class="pt-10 pb-8 overflow-hidden sm:pt-16 lg:pt-24 mb-20">
                                <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl mb-20">

                                    <div class="relative h-96 balloon-container" id="balloon">
                                        <div v-for="balloon in balloons" :key="balloon.id"
                                            class="absolute flex items-center justify-center group cursor-pointer balloon"
                                            :style="getBalloonStyle(balloon)">
                                            <div
                                                :class="`${balloon.colorClass} ${balloon.textColorClass} w-24 h-24 flex items-center justify-center rounded-full font-bold`">
                                                {{ balloon.title }} <!-- Titre du ballon -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                    <div class="lg:pl-12">
                        <div class="overflow-hidden bg-white rounded-md">
                            <div class="p-6 sm:p-10">
                                <h3 class="text-3xl font-bold text-center mb-6 text-gray-800">Envoyez-nous un message
                                </h3>

                                <form @submit.prevent="submitForm">
                                    <div class="mb-4">
                                        <label class="block text-gray-700 font-semibold mb-2" for="name">Nom
                                            complet</label>
                                        <input v-model="form.name" type="text" id="name"
                                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                                            placeholder="Votre nom complet" required>
                                        <div v-if="form.errors.name" class="text-red-500 text-sm mt-2">{{
                                            form.errors.name
                                            }}</div>
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-gray-700 font-semibold mb-2" for="email">Adresse
                                            email</label>
                                        <input v-model="form.email" type="email" id="email"
                                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                                            placeholder="Votre adresse email" required>
                                        <div v-if="form.errors.email" class="text-red-500 text-sm mt-2">{{
                                            form.errors.email
                                            }}</div>
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-gray-700 font-semibold mb-2" for="phone">Numéro de
                                            téléphone</label>
                                        <input v-model="form.phone" type="text" id="phone"
                                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                                            placeholder="Votre numéro de téléphone" required>
                                        <div v-if="form.errors.phone" class="text-red-500 text-sm mt-2">{{
                                            form.errors.phone
                                            }}</div>
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-gray-700 font-semibold mb-2"
                                            for="message">Message</label>
                                        <textarea v-model="form.message" id="message"
                                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                                            rows="5" placeholder="Décrivez votre projet ou votre demande"
                                            required></textarea>
                                        <div v-if="form.errors.message" class="text-red-500 text-sm mt-2">{{
                                            form.errors.message }}
                                        </div>
                                    </div>
                                    <button type="submit" :disabled="form.processing"
                                        class="w-full bg-blue-500 text-white font-semibold py-3 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-200">
                                        Envoyer la demande
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </section>
    </Navbar>
    <Footer />
</template>

<style scoped>
.group:hover .group-hover\:bounce {
    animation: bounce 1s ease;
}

.balloon {
    animation: float 6s ease-in-out infinite;

}

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
</style>