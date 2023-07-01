<script setup lang="ts">

import PrimaryNavigationMenu from "@/Layouts/Authenticated/partials/PrimaryNavigationMenu.vue";
import ResponsiveNavigationMenu from "@/Layouts/Authenticated/partials/ResponsiveNavigationMenu.vue";
import {ref} from "vue";

const showingNavigationDropdown = ref(false);

const toggleNavigationDropdown = () => {
    showingNavigationDropdown.value = !showingNavigationDropdown.value
}
</script>

<template>
    <nav class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
        <PrimaryNavigationMenu
            :showing-navigation-dropdown="showingNavigationDropdown"
            :toggle-navigation-dropdown="toggleNavigationDropdown"
        />

        <ResponsiveNavigationMenu
            :showing-navigation-dropdown="showingNavigationDropdown"
        />
    </nav>
</template>

<style scoped>

</style>
