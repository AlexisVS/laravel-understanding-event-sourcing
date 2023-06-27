<script setup lang="ts">
import {Head, Link} from '@inertiajs/vue3';
import GuestLayout from "@/Layouts/GuestLayout.vue";

defineProps<{
    canLogin?: boolean;
    canRegister?: boolean;
}>();
</script>

<template>
    <Head title="Welcome"/>

    <guest-layout
    :can-login="canLogin"
    :can-register="canRegister"
    >

    </guest-layout>
</template>

