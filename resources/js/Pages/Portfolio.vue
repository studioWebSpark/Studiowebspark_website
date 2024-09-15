<script setup>
import Navbar from '@/Components/NavBar.vue';
import { Head } from '@inertiajs/vue3';
import CookieConsent from '@/Components/CookieConsent.vue';
import Footer from '@/Components/Footer.vue';
import PortfolioHead from '@/Components/PortFolio/Header.vue';
import Skills from '@/Components/PortFolio/Skills.vue';

// Chargement asynchrone des composants non critiques
import { defineAsyncComponent } from 'vue';
const Balloons = defineAsyncComponent(() => import('@/Components/PortFolio/Balloons.vue'));
const Services = defineAsyncComponent(() => import('@/Components/PortFolio/Services.vue'));
</script>

<template>

    <Head title="Portfolio">
        <meta name="description"
            content="Découvrez mon portfolio, mes compétences et les services que je propose en tant que développeur web et d'application." />
        <meta property="og:title" content="Portfolio - Développeur Web et Application" />
        <meta property="og:description"
            content="Découvrez mes projets, mes compétences et les services que je propose pour vos besoins numériques." />
    </Head>
    <CookieConsent />

    <Navbar>

        <PortfolioHead />

        <Skills />

        <Balloons />

        <Services />


        <Footer />

    </Navbar>
</template>
