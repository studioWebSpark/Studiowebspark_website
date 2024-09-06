<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import CookieConsent from '@/Components/CookieConsent.vue';
import { useForm } from '@inertiajs/vue3'; 
import { ref } from 'vue';
import ToastNotification from '@/Components/ToastNotification.vue';

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
        <div class="bg-gray-100 min-h-screen flex items-center justify-center">
            <div class="bg-white shadow-lg rounded-lg p-8 max-w-lg w-full">
                <h1 class="text-4xl font-bold text-center mb-6 text-gray-800">Contactez-nous pour un devis personnalisé
                </h1>
                <p class="text-center text-gray-600 mb-8">
                    Vous avez un projet en tête ? Remplissez le formulaire ci-dessous pour nous envoyer un message.
                </p>
                <ToastNotification v-if="successMessage" :message="successMessage" duration="5000" />
                <form @submit.prevent="submitForm">
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2" for="name">Nom complet</label>
                        <input v-model="form.name" type="text" id="name"
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                            placeholder="Votre nom complet" required>
                        <div v-if="form.errors.name" class="text-red-500 text-sm mt-2">{{ form.errors.name }}</div>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2" for="email">Adresse email</label>
                        <input v-model="form.email" type="email" id="email"
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                            placeholder="Votre adresse email" required>
                        <div v-if="form.errors.email" class="text-red-500 text-sm mt-2">{{ form.errors.email }}</div>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2" for="phone">Numéro de téléphone</label>
                        <input v-model="form.phone" type="text" id="phone"
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                            placeholder="Votre numéro de téléphone" required>
                        <div v-if="form.errors.phone" class="text-red-500 text-sm mt-2">{{ form.errors.phone }}</div>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2" for="message">Message</label>
                        <textarea v-model="form.message" id="message"
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                            rows="5" placeholder="Décrivez votre projet ou votre demande" required></textarea>
                        <div v-if="form.errors.message" class="text-red-500 text-sm mt-2">{{ form.errors.message }}
                        </div>
                    </div>
                    <button type="submit" :disabled="form.processing"
                        class="w-full bg-blue-500 text-white font-semibold py-3 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-200">
                        Envoyer la demande
                    </button>
                </form>
            </div>
        </div>
    </AuthenticatedLayout>
</template>



