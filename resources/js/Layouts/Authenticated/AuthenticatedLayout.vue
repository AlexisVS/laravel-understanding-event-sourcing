<script setup lang="ts">
import Header from "@/Layouts/Authenticated/partials/Header.vue";
import NavigationMenu from "@/Layouts/Authenticated/partials/NavigationMenu.vue";

</script>

<template>
    <div>
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            <NavigationMenu/>

            <Header>
                <slot name="header"/>
            </Header>

            <main>
                <slot/>
            </main>
        </div>
    </div>
</template>
