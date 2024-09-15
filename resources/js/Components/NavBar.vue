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
                    <div class="flex items-center">
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

                            <NavLink :href="route('contact')" :active="route().current('contact')"
                                class="text-base font-medium text-gray-900 transition-all duration-200  focus:outline-none font-pj hover:text-opacity-50 focus:right-1 focus:right-gray-900 focus:ring-offset-2">
                                Contact
                            </NavLink>
                        </div>




                        <!-- Hamburger -->
                        <div class="flex items-center lg:hidden ml-auto">
                            <button @click="showingNavigationDropdown = !showingNavigationDropdown"
                                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <!-- Icone de menu burger -->
                                    <path
                                        :class="{ 'hidden': showingNavigationDropdown, 'inline-flex': !showingNavigationDropdown }"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16" />
                                    <!-- Icone de fermeture -->
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
                <div class="pt-2 pb-3 space-y-1 ">
                    <ResponsiveNavLink :href="route('portfolio')" :active="route().current('portfolio')"> Portfolio
                    </ResponsiveNavLink>
                    <ResponsiveNavLink :href="route('contact')" :active="route().current('contact')"> Contact
                    </ResponsiveNavLink>
                </div>

            </div>
        </div>

        <!-- Page Heading -->
        <header class="" v-if="$slots.header">
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