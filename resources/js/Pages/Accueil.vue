<script setup>
import Navbar from '@/Components/NavBar.vue';
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

    <Head title="Accueil">
        <meta name="description"
            content="Bienvenue sur la page d'accueil de notre site. Découvrez nos services, nos partenaires et les fonctionnalités que nous proposons pour booster votre activité." />
        <meta property="og:title" content="Accueil - Boostez votre activité avec nous" />
        <meta property="og:description"
            content="Découvrez nos services, nos partenaires, et comment nous pouvons vous aider à développer votre activité en ligne." />
    </Head>

    <Navbar>

        <CookieConsent />

        <AccueilHead />

        <Partenaire />

        <Feature />

        <Step />

        <Chatbox />
        <Faq />

        <Footer />

    </Navbar>
</template>
