<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import CookieConsent from '@/Components/CookieConsent.vue';
import { ref } from 'vue';
import Footer from '@/Components/Footer.vue';
import PortfolioHead from '@/Components/PortFolio/Header.vue';
import Skills from '@/Components/PortFolio/Skills.vue';
import Balloons from '@/Components/PortFolio/Balloons.vue';


</script>

<template>

    <Head title="Portfolio" />
    <CookieConsent />

    <AuthenticatedLayout>

        <PortfolioHead />

        <Skills />

        <Balloons />

        // Services

        
        <Footer />

    </AuthenticatedLayout>
</template>
