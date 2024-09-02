<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div>
        <div class="">
            <header class="py-4 md:py-6">
                <!-- Primary Navigation Menu -->
                <div class="container px-4 mx-auto sm:px-6 lg:px-8">
                    <div class="flex items-center justify-between">
                        <div class="flex-shrink-0">
                            <!-- Logo -->
                            <Link :href="route('accueil')">
                            <ApplicationLogo class="w-auto h-12" />
                            </Link>
                        </div>

                        <!-- Navigation Links -->
                        <div
                            class="hidden lg:flex lg:ml-16 lg:items-center lg:justify-center lg:space-x-10 xl:space-x-16 ">

                            <NavLink :href="route('portfolio')" :active="route().current('portfolio')"
                                class="text-base font-medium text-gray-900 transition-all duration-200  focus:outline-none font-pj hover:text-opacity-50 focus:right-1 focus:right-gray-900 focus:ring-offset-2">
                                Portfolio
                            </NavLink>
                            <NavLink :href="route('projets.index')" :active="route().current('projets.*')" class=" text-base font-medium text-gray-900 transition-all duration-200
                                focus:outline-none font-pj hover:text-opacity-50 focus:right-1 focus:right-gray-900
                                focus:ring-offset-2">
                                Projets
                            </NavLink>
                            <NavLink :href="route('blogs.index')" :active="route().current('blogs.*')"
                                class="text-base font-medium text-gray-900 transition-all duration-200  focus:outline-none font-pj hover:text-opacity-50 focus:right-1 focus:right-gray-900 focus:ring-offset-2">
                                Blogs
                            </NavLink>
                            <NavLink :href="route('contact')" :active="route().current('contact')"
                                class="text-base font-medium text-gray-900 transition-all duration-200  focus:outline-none font-pj hover:text-opacity-50 focus:right-1 focus:right-gray-900 focus:ring-offset-2">
                                Contact
                            </NavLink>
                        </div>

                        <!-- User Authentication Links -->
                        <div class="hidden lg:ml-auto lg:flex lg:items-center lg:space-x-10">
                            <template v-if="$page.props.auth.user">
                                <div class="ms-3 relative">
                                    <Dropdown>
                                        <template #trigger>
                                            <button
                                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-900  hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                                {{ $page.props.auth.user.name }}
                                                <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </template>
                                        <template #content>
                                            <div class="max-h-60 overflow-y-auto">
                                                <DropdownLink :href="route('dashboard')" method="post" as="button">
                                                    Dashboard
                                                </DropdownLink>
                                                <DropdownLink :href="route('profile.edit')"> Profile </DropdownLink>
                                                <DropdownLink :href="route('logout')" method="post" as="button">
                                                    Deconnexion
                                                </DropdownLink>
                                            </div>
                                        </template>
                                    </Dropdown>
                                </div>
                            </template>
                            <template v-else>
                                <NavLink :href="route('login')"
                                    class="inline-flex items-center justify-centertext-base font-medium text-gray-900 transition-all duration-200 focus:outline-none font-pj hover:text-opacity-50 ml-10 ">
                                    Connexion
                                </NavLink>
                                <NavLink :href="route('register')"
                                    class="inline-flex items-center justify-center pt-3 px-6 py-3 text-base font-medium leading-7 text-white transition-all duration-200 bg-gray-900 border border-transparent rounded-xl hover:bg-gray-600 font-pj focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900">
                                    Inscription
                                </NavLink>
                            </template>
                        </div>

                        <!-- Hamburger -->
                        <div class="-me-2 flex items-center lg:hidden">
                            <button @click="showingNavigationDropdown = !showingNavigationDropdown"
                                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path
                                        :class="{ 'hidden': showingNavigationDropdown, 'inline-flex': !showingNavigationDropdown }"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16" />
                                    <path
                                        :class="{ 'hidden': !showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Responsive Navigation Menu -->
            <div :class="{ block: showingNavigationDropdown, hidden: !showingNavigationDropdown }" class="lg:hidden">
                <div class="pt-2 pb-3 space-y-1">
                    <ResponsiveNavLink :href="route('accueil')" :active="route().current('accueil')"> Accueil
                    </ResponsiveNavLink>
                    <ResponsiveNavLink :href="route('portfolio')" :active="route().current('portfolio')"> Portfolio
                    </ResponsiveNavLink>
                    <ResponsiveNavLink :href="route('projets.index')" :active="route().current('projets.*')"> Projets
                    </ResponsiveNavLink>
                    <ResponsiveNavLink :href="route('blogs.index')" :active="route().current('blogs.*')"> Blogs
                    </ResponsiveNavLink>
                    <ResponsiveNavLink :href="route('contact')" :active="route().current('contact')"> Contact
                    </ResponsiveNavLink>
                </div>

                <!-- Responsive Settings Options -->
                <div class="pt-4 pb-1 border-t border-gray-200">
                    <div class="px-4">

                        <div class="font-medium text-sm text-gray-500">
                            {{ $page.props.auth.user ? $page.props.auth.user.email : '' }}
                        </div>
                    </div>

                    <div class="mt-3 space-y-1">
                        <template v-if="$page.props.auth.user">
                            <DropdownLink :href="route('dashboard')" method="post" as="button"> Dashboard
                            </DropdownLink>
                            <ResponsiveNavLink :href="route('profile.edit')"> Profile </ResponsiveNavLink>
                            <ResponsiveNavLink :href="route('logout')" method="post" as="button"> Log Out
                            </ResponsiveNavLink>
                        </template>
                        <template v-else>
                            <ResponsiveNavLink :href="route('login')"> Connexion </ResponsiveNavLink>
                            <ResponsiveNavLink :href="route('register')"
                                class="inline-flex items-center justify-center pt-3 px-6 py-3 text-base font-medium leading-7 text-white transition-all duration-200 bg-gray-900 border border-transparent rounded-xl hover:bg-gray-600 font-pj focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900">
                                Inscription</ResponsiveNavLink>
                        </template>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page Heading -->
        <header class="bg-white shadow" v-if="$slots.header">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <slot name="header" />
            </div>
        </header>

        <!-- Page Content -->
        <main>
            <slot />
        </main>
    </div>
</template>