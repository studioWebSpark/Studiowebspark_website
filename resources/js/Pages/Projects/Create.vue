<script setup>
import { useForm } from '@inertiajs/vue3';

const form = useForm({
    title: '',
    description: '',
    image: null, // Changez ici pour une seule image
});

const handleFileChange = (event) => {
    form.image = event.target.files[0]; // Prenez seulement le premier fichier
};

const submit = () => {
    form.post(route('projects.store'), {
        // Incluez cette option pour traiter le fichier correctement
        transform: (data) => {
            const formData = new FormData();
            for (let key in data) {
                formData.append(key, data[key]);
            }
            return formData;
        }
    });
};
</script>
<template>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold mb-6">Créer un projet</h1>

        <form @submit.prevent="submit" class="bg-white shadow-md rounded-lg p-6">
            <div class="mb-4">
                <label class="block text-gray-700">Titre du projet</label>
                <input v-model="form.title" type="text" placeholder="Titre"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Description</label>
                <textarea v-model="form.description" placeholder="Description"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"></textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Images du projet</label>
                <input type="file" @change="handleFileChange" multiple
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 text-white font-semibold py-2 px-4 rounded hover:bg-blue-600">
                    Créer
                </button>
            </div>
        </form>
    </div>
</template>

