<script setup>
import { usePage } from '@inertiajs/vue3';
import { ref, reactive } from 'vue';
import axios from 'axios';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import CookieConsent from '@/Components/CookieConsent.vue';
import '@fortawesome/fontawesome-free/css/all.css';

const { props } = usePage();
const projects = reactive(props.projects || []); // Initialiser projects comme un tableau vide par défaut
const user = props.auth.user;

const commentContent = ref('');
const showCommentBox = ref(null); // To control which project's comment box is shown

const showMenu = ref(null);

const toggleMenu = (projectId) => {
    showMenu.value = (showMenu.value === projectId) ? null : projectId;
};

const toggleCommentBox = (projectId) => {
    showCommentBox.value = showCommentBox.value === projectId ? null : projectId;
};

const toggleDescription = (project) => {
    // Vérifie si la propriété `showFullDescription` existe, sinon l'initialiser
    if (project.showFullDescription === undefined) {
        project.showFullDescription = false;
    }
    // Bascule entre description tronquée et complète
    project.showFullDescription = !project.showFullDescription;
};

const truncatedDescription = (description) => {
    if (!description) return '';
    // Tronquer si la description dépasse 100 caractères
    return description.length > 100 ? description.substring(0, 100) + '...' : description;
};;

// Fonction pour modifier le projet
const editProject = (projectId) => {
    // Redirection vers la page de modification (vous devez avoir une route pour cela)
    window.location.href = route('projects.edit', projectId);
};

const deleteProject = async (projectId) => {
    if (confirm('Êtes-vous sûr de vouloir supprimer ce projet ?')) {
        try {
            // Envoi de la requête DELETE au serveur pour supprimer le projet
            const response = await axios.delete(`/projects/${projectId}`);

            if (response.status === 200) {
                console.log('Projet supprimé avec succès');

                // Supprimer dynamiquement le projet de la liste côté client
                const index = projects.findIndex(project => project.id === projectId);
                if (index !== -1) {
                    projects.splice(index, 1); // Retirer le projet supprimé de la liste de projets
                    alert('Le projet a été supprimé avec succès !');
                }
            }
        } catch (error) {
            // Affichage de l'erreur dans la console
            console.error('Erreur lors de la suppression du projet', error);

            // Affichage des informations sur la réponse du serveur si elle est disponible
            if (error.response) {
                console.error('Détails de l\'erreur:', error.response.data);
                console.error('Statut HTTP:', error.response.status);
                alert(`Erreur lors de la suppression du projet: ${error.response.data.message || 'Problème inconnu'}`);
            } else {
                alert('Une erreur est survenue lors de la suppression.');
            }
        }
    }
};


// Function to like a project and increase the like count
function likeProject(project) {
    if (!user) {
        alert('Veuillez vous inscrire ou vous connecter pour liker des projets.');
    
} else {
    const isLikedByUser = project.isLikedByUser;

    axios.post(`/projects/${project.id}/like`)
        .then(response => {
            if (response.data && response.data.likes) {
                // Met à jour le compteur de likes et l'état du like
                project.likes = response.data.likes;
                project.isLikedByUser = !isLikedByUser; // Bascule l'état
            } else {
                console.error("Réponse inattendue du serveur", response);
            }
        })
        .catch(error => {
            console.error("Erreur lors du like du projet", error.response || error);
        });
    }
};


function submitComment(project) {
    if (!user) {
        alert('Veuillez vous inscrire ou vous connecter pour commenter des projets.');
    } else {
        // S'assurer que le contenu du commentaire n'est pas vide
        if (commentContent.value.trim() !== '') {
            axios.post(`/projects/${project.id}/comments`, {
                content: commentContent.value // Assurez-vous que le bon champ est envoyé
            })
                .then(response => {
                    const newComment = response.data.comment; // Assurez-vous que le backend renvoie correctement le commentaire

                    // Ajoute dynamiquement le nouveau commentaire à la liste des commentaires
                    if (!project.comments) {
                        project.comments = [];
                    }
                    project.comments.push(newComment);

                    // Réinitialiser le champ de saisie de commentaire
                    project.hasCommentedByUser = true;
                    commentContent.value = '';
                    showCommentBox.value = null;
                    

                    // Afficher un message de succès ou autre si nécessaire
                })
                .catch(error => {
                    console.error('Erreur lors de la publication du commentaire:', error.response);
                });
        } else {
            alert('Le commentaire ne peut pas être vide.');
        }
    }
}

const deleteComment = (project, comment) => {
    if (!confirm('Êtes-vous sûr de vouloir supprimer ce commentaire ?')) {
        return;
    }

    // Envoyer une requête au serveur pour supprimer le commentaire
    axios.delete(`/projects/${project.id}/comments/${comment.id}`)
        .then(response => {
            // Supprimer le commentaire de la liste des commentaires côté frontend
            const index = project.comments.findIndex(c => c.id === comment.id);
            if (index !== -1) {
                project.comments.splice(index, 1); // Supprimer le commentaire localement
            }
        })
        .catch(error => {
            console.error("Erreur lors de la suppression du commentaire", error.response);
        });
};

// Tooltip functions
function showTooltip(project) {
    const tooltip = document.querySelector(`#tooltip-${project.id}`);
    if (tooltip) {
        tooltip.style.display = 'block';
    }
}

function hideTooltip(project) {
    const tooltip = document.querySelector(`#tooltip-${project.id}`);
    if (tooltip) {
        tooltip.style.display = 'none';
    }
}

// Fonction pour rediriger vers la page de création du projet
const handleCreateProject = () => {
    if (!user) {
        alert('Veuillez vous inscrire ou vous connecter pour ajouter un projet.');
        // Optionnel : Rediriger vers la page de connexion
        
    } else {
        createProject(); // Si l'utilisateur est connecté, appeler la fonction de création de projet
    }
};
const createProject = () => {
    // Utiliser la fonction `route` si tu as nommé ta route en Laravel avec `projects.create`
    window.location.href = route('projects.create');
};


function redirectToLogin() {
    alert('Veuillez vous inscrire ou vous connecter pour liker ou commenter.');
    window.location.href = '/register'; // Redirection vers la page de connexion
}

</script>

<template>
    <AuthenticatedLayout>
        <CookieConsent />
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold">Mes Projets</h1>
                <!-- Bouton pour ajouter un projet -->
                <button @click="handleCreateProject"
                    class="bg-blue-500 text-white font-semibold py-2 px-4 rounded hover:bg-blue-600">
                    Ajouter un Projet
                </button>
            </div>

            <!-- Liste des projets -->
            <div v-if="projects.length > 0" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div v-for="project in projects" :key="project.id" class="bg-white shadow-md rounded-lg p-4 h-auto">
                    <p class="text-gray-500 mb-2">
                        Projet créé par :
                        <strong v-if="project.user">{{ project.user.name }} </strong>
                    </p>

                    <div class="relative ">
                        <!-- Bouton des trois petits points -->
                        <button @click="toggleMenu(project.id)"
                            class="text-gray-500 hover:text-gray-700 absolute bottom-0 right-2">
                            &#x2022;&#x2022;&#x2022;
                        </button>

                        <!-- Menu contextuel pour modifier/supprimer -->
                        <div v-if="showMenu === project.id"
                            class="absolute right-0 mt-2 w-40 bg-white shadow-lg rounded-lg z-10">
                            <div class="p-2">
                                <button @click="editProject(project.id)"
                                    class="block w-full text-left text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-100">
                                    Modifier
                                </button>
                               
                                <button @click="deleteProject(project.id)"
                                    class="block w-full text-left text-red-600 px-4 py-2 rounded-lg hover:bg-red-100">
                                    Supprimer
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Titre du projet avec "Afficher plus" -->
                    <h3 class="text-xl font-semibold">
                        {{ project.showFullDescription ? project.title : truncatedDescription(project.title) }}

                    </h3>
                    <p class="text-gray-700 mb-4">
                        <!-- Affichage conditionnel de la description -->
                        <span v-if="project.showFullDescription">{{ project.description }}</span>
                        <span v-else>{{ truncatedDescription(project.description) }}</span>

                        <!-- Bouton "plus" ou "moins" pour basculer entre tronqué et complet -->
                        <span @click="toggleDescription(project)" class="text-blue-500 cursor-pointer">
                            {{ project.showFullDescription ? '...moins' : '...plus' }}
                        </span>
                    </p>

                    <!-- Image centrée avec taille fixe -->
                    <img :src="`/storage/${project.image}`" alt="Project Image"
                        class="w-full h-64 object-cover mb-4 rounded-lg mx-auto" v-if="project.image" />

                    <!-- Like et Comment -->
                    <div class="flex justify-between items-center">
                        <div class="relative" @mouseover="showTooltip(project)" @mouseleave="hideTooltip(project)">


                            <!-- Bouton like avec icône de cœur -->
                            <button @click="likeProject(project)" class="flex items-center space-x-2">
                                <!-- Changement de l'icône et de la couleur selon l'état du like -->
                                <i
                                    :class="[project.isLikedByUser ? 'fa-regular fa-heart ' : 'fa-solid fa-heart text-red-500']"></i>
                                <span>{{ project.likes.length || 0 }}</span>
                                <span>J'aime</span>
                            </button>

                            <!-- <button v-else @click="redirectToLogin" class="flex items-center space-x-2">
                                <i class="fa-regular fa-heart "></i>
                                <span>{{ project.likes.length || 0 }}</span>
                                <span>J'aime</span>
                            </button> -->

                            <!-- Tooltip pour les utilisateurs qui ont liké -->
                            <div v-if="project.likes.length > 0"
                                class="absolute bg-white border rounded shadow-md p-2 w-64 hidden tooltip"
                                :id="`tooltip-${project.id}`">
                                <strong>Aimé par :</strong>
                                <ul>
                                    <li v-for="like in project.likes" :key="like.id">{{ like.name }}</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Comment button avec icône Font Awesome -->
                        <!-- Bouton Comment avec icône Font Awesome -->
                        <!-- Bouton Comment avec icône Font Awesome -->
                        <button @click="toggleCommentBox(project.id)" class="flex items-center space-x-2">
                            <i
                                :class="[project.hasCommentedByUser ? 'fa-regular fa-comment text-blue-500' : 'fa-regular fa-comment']"></i>
                            <span>{{ project.comments.length || 0 }}</span>
                            <span>Commentaires</span>
                        </button>
                    </div>

                    <!-- Boîte pour ajouter un commentaire -->
                    <div v-if="showCommentBox === project.id" class="comment-box mt-4">
                        <input type="text" v-model="commentContent" placeholder="Ajouter un commentaire..."
                            class="input-comment mb-2 w-full p-2 border rounded">
                        <button @click="submitComment(project)" class="btn btn-comment">Envoyer</button>
                    </div>

                    <!-- Section des commentaires (affichés uniquement si on clique sur "Commentaires") -->
                    <div v-if="showCommentBox === project.id" class="comments mt-4">
                        <div v-for="comment in project.comments" :key="comment.id" class="mt-2 p-2 border-t">
                            <strong v-if="comment.user && comment.user.name">{{ comment.user.name }}:</strong>
                            {{ comment.content }}
                            <button v-if="comment.user_id === user.id" @click="deleteComment(project, comment)"
                                class="text-red-500 ml-4">
                                <i class="fas fa-trash-alt"></i> Supprimer
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Alerte si aucun projet -->
            <div v-else class="text-center py-10">
                <p class="text-gray-600 text-xl mb-5">Aucun projet disponible pour le moment.</p>
            </div>
        </div>

        
    </AuthenticatedLayout>
</template>

