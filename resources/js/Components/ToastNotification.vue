<template>
    <div v-if="visible" class="fixed bottom-5 right-5 bg-green-500 text-white p-4 rounded shadow-lg z-50">
        <p>{{ message }}</p>
    </div>
</template>

<script setup>
import { ref, watchEffect } from 'vue';

const props = defineProps({
    message: String,
    duration: {
        type: Number,
        default: 5000  // Durée de la notification en millisecondes
    }
});

const visible = ref(true);

// Masquer la notification après la durée spécifiée
watchEffect(() => {
    if (message) {
        visible.value = true;
        setTimeout(() => {
            visible.value = false;
        }, props.duration);
    }
});
</script>

<style scoped>
/* Ajouter des styles spécifiques au toast */
</style>