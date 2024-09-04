<script setup>
import { ref } from 'vue';
import axios from 'axios';
import { usePage } from '@inertiajs/vue3';

const page = usePage();
const project = page.props.project;

// Les champs du formulaire
const title = ref(project.title);
const description = ref(project.description);
const image = ref(null);

// Prévisualisation de l'image
const previewImage = ref(null);

const handleFileChange = (event) => {
    const file = event.target.files[0];
    if (file) {
        image.value = file;
        previewImage.value = URL.createObjectURL(file); // Prévisualisation immédiate de l'image
    }
};

// Fonction pour envoyer la requête via Axios
const submit = async () => {
    const formData = new FormData();
    formData.append('title', title.value);
    formData.append('description', description.value);

    // Ajouter l'image seulement si elle est sélectionnée
    if (image.value) {
        formData.append('image', image.value);
    }

    try {
        const response = await axios.post(`/projects/${project.id}/update-image`, formData, {
            headers: {
                'Content-Type': 'multipart/form-data',
            },
        });

        // Si la requête est un succès, rediriger vers la page des projets
        if (response.status === 200) {
            console.log('Projet mis à jour avec succès', response.data);

            // Redirection vers la page des projets après la mise à jour
            window.location.href = '/projects';  // Redirection vers /projects
        }
    } catch (error) {
        console.error('Erreur lors de la mise à jour du projet', error);
    }
};
</script>

<template>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold mb-6">Modifier le projet</h1>

        <div class="mb-4">
            <label class="block text-gray-700">Titre du projet</label>
            <input v-model="title" type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Description</label>
            <textarea v-model="description" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"></textarea>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Changer l'image</label>
            <input type="file" @change="handleFileChange"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
        </div>

        <div v-if="previewImage" class="mb-4">
            <img :src="previewImage" alt="Prévisualisation de l'image" class="w-full h-auto rounded-lg" />
        </div>

        <button @click="submit" class="bg-blue-500 text-white font-semibold py-2 px-4 rounded hover:bg-blue-600">
            Mettre à jour
        </button>
    </div>
</template>