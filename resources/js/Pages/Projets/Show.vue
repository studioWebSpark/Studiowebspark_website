<script setup>
import { Head } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

const props = defineProps({
    projet: Object
});
</script>

<template>
    <AuthenticatedLayout>

        <Head title="Projet - Détails" />
        <div class="p-6 max-w-3xl mx-auto">
            <h1 class="text-3xl font-bold mb-6">{{ projet.title }}</h1>
            <img :src="`/storage/${projet.image}`" alt="" class="w-full h-auto mb-4" />
            <p>{{ projet.description }}</p>
            <p class="mt-4">Créé par : {{ projet.user.name }}</p>
        </div>
    </AuthenticatedLayout>
</template>