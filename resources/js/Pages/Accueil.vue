<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import CookieConsent from '@/Components/CookieConsent.vue';
import Footer from '@/Components/Footer.vue';
import AccueilHead from '@/Components/Accueil/Header.vue';
import Partenaire from '@/Components/Accueil/Partner.vue';
import Step from '@/Components/Accueil/Step.vue';
import Chatbox from '@/Components/Chatbox.vue';
import Feature from '@/Components/Accueil/Feature.vue';
import { Head } from '@inertiajs/vue3';
import Faq from '@/Components/Accueil/Faq.vue';





</script>
<template>

    <Head title="Accueil" />

    <AuthenticatedLayout>

        <CookieConsent />

        <AccueilHead />

        <Partenaire />

        <Feature />

        <Step />

        <Chatbox />
        <Faq />

        <Footer />

    </AuthenticatedLayout>
</template>
