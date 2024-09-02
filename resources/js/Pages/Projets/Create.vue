<script setup>
import { useForm } from '@inertiajs/vue3';
import { Head } from '@inertiajs/vue3';

const form = useForm({
    title: '',
    description: ''
});

function submit() {
    form.post(route('projets.store'));
}
</script>

<template>

    <Head title="Créer un Projet" />
    <AuthenticatedLayout>
        <div class="p-6 max-w-2xl mx-auto">
            <h1 class="text-3xl font-bold mb-6">Créer un Nouveau Projet</h1>
            <form @submit.prevent="submit" class="bg-white shadow-md rounded-lg p-6">
                <div class="mb-4">
                    <label for="title" class="block text-gray-700 font-semibold mb-2">Titre</label>
                    <input id="title" v-model="form.title" type="text" class="w-full px-3 py-2 border rounded-lg" />
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 font-semibold mb-2">Description</label>
                    <textarea id="description" v-model="form.description" rows="6"
                        class="w-full px-3 py-2 border rounded-lg"></textarea>
                </div>
                
                <button type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Enregistrer</button>
            </form>
        </div>
    </AuthenticatedLayout>
</template>