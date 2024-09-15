<script setup>
import CookieConsent from '@/Components/CookieConsent.vue';
import Navbar from '@/Components/NavBar.vue';



</script>

<template>

    <Head title="Termes et Conditions">
        <meta name="description"
            content="Lisez nos termes et conditions pour comprendre les règles d'utilisation de notre site et nos services." />
        <meta property="og:title" content="Termes et Conditions - Règles d'utilisation" />
        <meta property="og:description"
            content="Découvrez les règles d'utilisation de notre site et nos conditions générales de vente." />
        <meta property="og:image" content="URL_DE_VOTRE_IMAGE_OG" />
        <meta property="og:url" content="URL_DE_VOTRE_PAGE_TERMES" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Termes et Conditions - Règles d'utilisation" />
        <meta name="twitter:description"
            content="Veuillez lire attentivement nos termes et conditions avant d'utiliser notre site." />
        <meta name="twitter:image" content="URL_DE_VOTRE_IMAGE_TWITTER" />
    </Head>

    <Navbar>

        <CookieConsent />
        <div class="min-h-screen  p-6" id="privacy">
            <!-- Header -->
            <header class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-800">Termes et Conditions & Politique de Confidentialité</h1>
                <p class="text-lg text-gray-600 mt-4">Veuillez lire attentivement nos termes et conditions ainsi que
                    notre
                    politique de confidentialité.</p>
            </header>

            <div class="max-w-5xl mx-auto">
                <!-- Section: Termes et Conditions -->
                <section class="bg-white rounded-lg shadow-lg p-8 mb-12">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Termes et Conditions</h2>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        En accédant à ce site, vous acceptez d'être lié par les présents termes et conditions
                        d'utilisation,
                        toutes les lois et réglementations applicables, et vous convenez que vous êtes responsable du
                        respect des lois locales applicables.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        L'utilisation de ce site est régie par les lois applicables en vigueur dans votre pays ou
                        région. Si
                        vous n'acceptez pas ces termes, vous êtes interdit d'utiliser ou d'accéder à ce site.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Nous nous réservons le droit de modifier ou de remplacer les termes à tout moment. Veuillez
                        consulter régulièrement cette page pour rester informé des mises à jour.
                    </p>
                </section>

                <!-- Section: Politique de Confidentialité -->
                <section class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Politique de Confidentialité</h2>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Nous nous engageons à protéger votre vie privée. Toutes les informations recueillies sur ce site
                        seront tenues strictement confidentielles et ne seront ni vendues, ni réutilisées, ni louées, ni
                        prêtées, ni divulguées.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Nous ne collectons que les informations personnelles que vous nous fournissez volontairement,
                        telles
                        que votre nom, adresse électronique, ou tout autre renseignement que vous nous soumettez via le
                        formulaire de contact.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Vos informations personnelles sont stockées de manière sécurisée et ne seront utilisées que pour
                        les
                        besoins strictement nécessaires, tels que vous informer des mises à jour de notre politique de
                        confidentialité.
                    </p>
                </section>
            </div>
        </div>
    </Navbar>
</template>

<style scoped></style>