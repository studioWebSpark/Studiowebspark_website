<script setup>
import { ref } from 'vue';

const activeFAQ = ref(null);

const faqs = [
    {
        question: "Comment se déroule le processus de prise de contact ?",
        answer: "Vous pouvez me contacter via le formulaire de contact ou par le Live Chat situé en bas à droite . Nous fixerons un rendez-vous pour discuter de vos besoins et des objectifs de votre projet."
    },
    {
        question: "Quels types de services proposez-vous ?",
        answer: "Je propose une large gamme de services pour répondre à vos besoins : \n\n • Conception et Développement de Sites Web Personnalisés \n • Amélioration et Optimisation de Sites Web \n • Fonctionnalités Avancées pour Booster la Productivité \n\n Mon expertise couvre l'intégration front-end, le développement back-end avec Laravel, ainsi que la maintenance et l'optimisation des performances de vos projets."
    },
    {
        question: "Comment fonctionne la phase de planification du projet ?",
        answer: "Après avoir pris connaissance de vos besoins, j'établis une proposition technique détaillant les différentes étapes de la conception à la mise en ligne du site ou de l'application."
    },
    {
        question: "Quel est le délai moyen pour terminer un projet ?",
        answer: "Cela dépend de la complexité du projet, mais en général, un site web basique prend environ 1 à 2 semaines, tandis qu'une application web plus complexe peut prendre 1 à 2 mois tout dépend de la demande."
    },
    {
        question: "Quels outils utilisez-vous pour le développement ?",
        answer: "J'utilise principalement Vue.js pour le front-end, Laravel pour le back-end, et TailwindCSS pour le design. Je travaille également avec Git pour la gestion des versions et Trello pour la gestion de projet."
    },
    {
        question: "Quels types de paiements acceptez-vous ?",
        answer: "J'accepte les virements bancaires, PayPal, Revolut et d'autres solutions de paiement en ligne, selon ce qui est le plus pratique pour vous."
    },
    {
        question: "Proposez-vous des contrats de maintenance ?",
        answer: "Oui, je propose des contrats de maintenance pour assurer la mise à jour régulière du site ou de l'application, ainsi que pour corriger tout bug ou problème de performance."
    },
    {
        question: "Comment puis-je suivre l’avancement de mon projet ?",
        answer: "Je mets en place des points réguliers via des outils comme Trello ou Slack pour vous tenir informé(e) de l'avancement, avec des mises à jour hebdomadaires ou selon le besoin."
    },
    {
        question: "Quel type de support technique proposez-vous après la mise en ligne ?",
        answer: "Je propose un support 24/7 pour répondre à toute question ou résoudre tout problème technique. Vous pouvez également souscrire à un contrat de maintenance."
    },
    {
        question: "Quels sont vos tarifs pour les projets ?",
        answer: "Mes tarifs varient selon la taille et la complexité du projet. Je propose des tarifs horaires ou des forfaits fixes après évaluation des besoins. N'hésitez pas à me contacter pour un devis personnalisé."
    }
];


</script>

  <template>
    <section class="py-10 sm:py-16 lg:py-24">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 text-center">
            <!-- Titre et sous-titre -->
            <h2 class="text-3xl font-bold text-black sm:text-4xl lg:text-5xl">Les Questions Fréquents (FAQ)</h2>
            <p class="max-w-xl mx-auto mt-4 text-base text-gray-600">
                Voici les questions fréquentes que mes clients me posent concernant les étapes du développement web et
                la gestion de projets.
            </p>



            <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-8 text-left ">
                <div v-for="(faq, index) in faqs" :key="index"
                    class="bg- p-6 rounded-lg transform transition-transform duration-300 hover:scale-110 hover:rotate-10">
                    <div class="flex items-start">

                        <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-black bg-gray-200  rounded-full"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 9a3 3 0 016 0c0 1.333-.667 2-2 3-.667.5-1 1-1 2m0 3h.01" />
                            </svg>
                        </div>

                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-black">{{ faq.question }}</h3>
                            <p class="mt-2 text-gray-600">{{ faq.answer }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <h2 class="text-2xl font-bold mb-5">Vous n'avez pas trouvé la
                    réponse que
                    vous cherchez ?</h2>

                <p class="text-green-600">Vous pouvez discuter avec nous via le
                    Live Chat en bas à
                    droite.</p>
                <p>
                    Sinon <a href="/contact" class="hover:underline"> Contactez-nous</a>
                </p>
               
            </div>
        </div>
    </section>
</template>


<style scoped>
.rotate-180 {
    transform: rotate(180deg);
}
</style>