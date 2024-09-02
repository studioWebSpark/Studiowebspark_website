<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import CookieConsent from '@/Components/CookieConsent.vue';

const props = defineProps({
    projets: Array
});
</script>

<template>

    <Head title="Projets - Liste" />
    <CookieConsent />
    <AuthenticatedLayout>
        <div class="p-6 max-w-3xl mx-auto">
            <h1 class="text-3xl font-bold mb-6">Liste des Projets</h1>
            <div v-for="projet in projets" :key="projet.id" class="bg-white shadow-md rounded-lg p-6 mb-4">
                <h3 class="text-xl font-semibold mb-2">{{ projet.title }}</h3>
                <p class="text-gray-700 mb-4">{{ projet.description.substring(0, 100) }}...</p>
                <a :href="route('projets.show', projet.id)" class="text-blue-500 hover:underline">Voir plus</a>
                <a :href="route('projets.edit', projet.id)" class="ml-4 text-blue-500 hover:underline">Éditer</a>
            </div>
            <a :href="route('projets.create')" class="text-blue-500 hover:underline">Créer un nouveau projet</a>
        </div>
       
    </AuthenticatedLayout>
</template>
