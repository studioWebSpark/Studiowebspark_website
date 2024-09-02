<script setup>
import { ref } from 'vue';
import { Head, useForm } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

const props = defineProps({
    blog: Object
});

const form = useForm({
    title: props.blog.title,
    content: props.blog.content
});

function submit() {
    form.put(route('blogs.update', props.blog.id));
}
</script>

<template>

    <Head title="Éditer l'Article de Blog" />
    <AuthenticatedLayout>
        <div class="p-6 max-w-2xl mx-auto">
            <h1 class="text-3xl font-bold mb-6">Éditer l'Article</h1>
            <form @submit.prevent="submit" class="bg-white shadow-md rounded-lg p-6">
                <div class="mb-4">
                    <label for="title" class="block text-gray-700 font-semibold mb-2">Titre</label>
                    <input id="title" v-model="form.title" type="text" class="w-full px-3 py-2 border rounded-lg" />
                </div>
                <div class="mb-4">
                    <label for="content" class="block text-gray-700 font-semibold mb-2">Contenu</label>
                    <textarea id="content" v-model="form.content" rows="6"
                        class="w-full px-3 py-2 border rounded-lg"></textarea>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Mettre à
                    jour</button>
            </form>
        </div>
    </AuthenticatedLayout>
</template>