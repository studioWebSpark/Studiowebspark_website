<script setup>
import { usePage } from '@inertiajs/vue3';
import { reactive, ref } from 'vue';
import axios from 'axios';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import CookieConsent from '@/Components/CookieConsent.vue';

const { props } = usePage();
const projects = reactive(props.projects || []);
const user = props.auth.user;

const commentContent = ref('');
const showCommentBox = ref(null); // To control which project's comment box is shown

const showMenu = ref(null);

const toggleMenu = (projectId) => {
    showMenu.value = (showMenu.value === projectId) ? null : projectId;
};

// Fonction pour modifier le projet
const editProject = (projectId) => {
    // Redirection vers la page de modification (vous devez avoir une route pour cela)
    window.location.href = route('projects.edit', projectId);
};

const deleteProject = async (projectId) => {
    if (confirm('Êtes-vous sûr de vouloir supprimer ce projet ?')) {
        try {
            const response = await axios.delete(`/projects/${projectId}`);
            if (response.status === 200) {
                console.log('Projet supprimé avec succès');

                // Supprimer dynamiquement le projet de la liste sans recharger la page
                const index = projects.findIndex(project => project.id === projectId);
                if (index !== -1) {
                    projects.splice(index, 1); // Retirer le projet supprimé de la liste
                }
            }
        } catch (error) {
            console.error('Erreur lors de la suppression du projet', error);
        }
    }
};

function toggleCommentBox(projectId) {
    if (showCommentBox.value === projectId) {
        showCommentBox.value = null; // Close the input if already open
    } else {
        showCommentBox.value = projectId;
    }
}

// Function to like a project and increase the like count
function likeProject(project) {
    if (!user) {
        alert('Veuillez vous inscrire ou vous connecter pour liker des projets.');
    } else {
        axios.post(`/projects/${project.id}/like`)
            .then(response => {
                project.likes = response.data.likes; 
            })
            .catch(error => {
                console.error('Erreur lors du like du projet', error.response);
            });
    }
}

// Function to submit a comment
function submitComment(project) {
    if (!user) {
        alert('Veuillez vous inscrire ou vous connecter pour commenter des projets.');
    } else {
        if (commentContent.value.trim() !== '') {
            axios.post(`/projects/${project.id}/comments`, { content: commentContent.value })
                .then(response => {
                    const newComment = response.data;
                    if (!project.comments) {
                        project.comments = [];
                    }
                    project.comments.push(newComment);
                    commentContent.value = '';
                    showCommentBox.value = null;
                })
                .catch(error => {
                    console.error('Erreur lors de la publication du commentaire', error.response);
                });
        }
    }
}

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
const createProject = () => {
    window.location.href = route('projects.create');
};
</script>

<template>
    <AuthenticatedLayout>
        <CookieConsent />
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold">Mes Projets</h1>
                <!-- Bouton pour ajouter un projet -->
                <button @click="createProject"
                    class="bg-blue-500 text-white font-semibold py-2 px-4 rounded hover:bg-blue-600">
                    Ajouter un Projet
                </button>
            </div>
            <div v-if="projects.length > 0" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div v-for="project in projects" :key="project.id" class="bg-white shadow-md rounded-lg p-4">
                    <p class="text-gray-500 mb-2">
                        Projet créé par :
                        <strong v-if="project.user">{{ project.user.name }} </strong>
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
                                <button @click=" deleteProject(project.id)"
                                    class="block w-full text-left text-red-600 px-4 py-2 rounded-lg hover:bg-red-100">
                                    Supprimer
                                </button>
                            </div>
                        </div>
                    </div>
                    </p>






                    <h3 class="text-xl font-semibold">{{ project.title }}</h3>
                    <p class="text-gray-700 mb-4">{{ project.description }}</p>
                    <img :src="`/storage/${project.image}`" alt="Project Image" class="w-full h-auto mb-4 rounded-lg"
                        v-if="project.image" />

                    <!-- Like button with like count -->
                    <div class="flex justify-between items-center">
                        <div class="relative" @mouseover="showTooltip(project)" @mouseleave="hideTooltip(project)">
                            <button v-if="user" @click="likeProject(project)" class="btn btn-primary">
                                Like ({{ project.likes.length || 0 }})
                            </button>
                            <button v-else @click="() => alert('Please sign in or register to like projects.')">
                                Like ({{ project.likes.length || 0 }})
                            </button>

                            <!-- Tooltip for users who liked the project -->
                            <div v-if="project.likes.length > 0"
                                class="absolute bg-white border rounded shadow-md p-2 w-64 hidden tooltip"
                                :id="`tooltip-${project.id}`">
                                <strong>Aimé par:</strong>
                                <ul>
                                    <li v-for="like in project.likes" :key="like.id">{{ like.name }}</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Comment button to toggle the comment input -->
                        <button @click="toggleCommentBox(project.id)" class="btn btn-comment">Comment</button>
                    </div>

                    <!-- Comment input box shown when the user clicks "Comment" -->
                    <div v-if="showCommentBox === project.id" class="comment-box mt-4">
                        <input type="text" v-model="commentContent" placeholder="Ajouter un commentaire..."
                            class="input-comment mb-2 w-full p-2 border rounded">
                        <button @click="submitComment(project)" class="btn btn-comment">Submit</button>
                    </div>

                    <!-- Comments section -->
                    <div class="comments mt-4">
                        <div v-for="comment in project.comments" :key="comment.id" class="mt-2 p-2 border-t">
                            <strong v-if="comment.user && comment.user.name">{{ comment.user.name }}:</strong>
                            <strong v-else>Utilisateur inconnu:</strong> {{ comment.content }}
                        </div>
                    </div>
                </div>
            </div>

            <div v-else class="text-center py-10">
                <p class="text-gray-600 text-xl mb-5">Aucun projet disponible pour le moment.</p>
            </div>
        </div>
    </AuthenticatedLayout>
</template>