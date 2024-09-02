<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import CookieConsent from '@/Components/CookieConsent.vue';

const props = defineProps({
    blogs: Array
});
</script>

<template>

    <Head title="Blog - Liste" />
    <CookieConsent />
    <AuthenticatedLayout>
        <div class="p-6 max-w-3xl mx-auto">
            <h1 class="text-3xl font-bold mb-6">Liste des Articles de Blog</h1>
            <div v-for="blog in blogs" :key="blog.id" class="bg-white shadow-md rounded-lg p-6 mb-4">
                <h3 class="text-xl font-semibold mb-2">{{ blog.title }}</h3>
                <p class="text-gray-700 mb-4">{{ blog.content.substring(0, 100) }}...</p>
                <a :href="route('blogs.show', blog.id)" class="text-blue-500 hover:underline">Voir plus</a>
                <a :href="route('blogs.edit', blog.id)" class="ml-4 text-blue-500 hover:underline">Éditer</a>
            </div>
            <a :href="route('blogs.create')" class="text-blue-500 hover:underline">Créer un nouvel article</a>
        </div>
    </AuthenticatedLayout>
</template>