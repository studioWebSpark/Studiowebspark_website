<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
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
</script>

<template>

    <Head title="Contactez-nous " />
    <CookieConsent />

    <AuthenticatedLayout>
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

                    <div class="md:hidden">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-6 h-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-6 h-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-6 h-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-6 h-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>

                        <blockquote class="mt-6">
                            <p class="text-lg leading-relaxed text-white">You made it so simple. My new site is so much
                                faster and easier to work with than my old site. I just choose the page, make the change
                                and
                                click save.</p>
                        </blockquote>

                        <div class="flex items-center mt-8">
                            <img class="flex-shrink-0 object-cover w-10 h-10 rounded-full"
                                src="https://cdn.rareblocks.xyz/collection/celebration/images/contact/4/avatar.jpg"
                                alt="" />
                            <div class="ml-4">
                                <p class="text-base font-semibold text-white">Jenny Wilson</p>
                                <p class="mt-px text-sm text-gray-400">Product Designer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </AuthenticatedLayout>
    <Footer />
</template>

<style scoped>

</style>