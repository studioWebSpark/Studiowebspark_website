<script setup>
import { Head } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

const props = defineProps({
    blog: Object
});
</script>

<template>
  <AuthenticatedLayout>
    <Head title="Blog - Détails" />
    <div class="p-6 max-w-3xl mx-auto">
      <h1 class="text-3xl font-bold mb-6">{{ blog.title }}</h1>
      <img :src="`/storage/${blog.image}`" alt="" class="w-full h-auto mb-4"/>
      <p>{{ blog.content }}</p>
      <p class="mt-4">Écrit par : {{ blog.user.name }}</p>
    </div>
  </AuthenticatedLayout>
</template>