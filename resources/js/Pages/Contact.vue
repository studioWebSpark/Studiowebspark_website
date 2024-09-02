<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import CookieConsent from '@/Components/CookieConsent.vue';
</script>

<template>

    <Head title="Dashboard" />
    <CookieConsent />

    <AuthenticatedLayout>

    </AuthenticatedLayout>
</template>
