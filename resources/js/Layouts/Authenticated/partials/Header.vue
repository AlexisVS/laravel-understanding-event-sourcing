<script setup lang="ts">

</script>

<template>
    <header class="bg-white dark:bg-gray-800 shadow" v-if="$slots.header">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <slot name="header"/>
        </div>
    </header>
</template>

<style scoped>

</style>
