<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import TextLink from '@/components/TextLink.vue';
import { logout } from '@/routes';

defineOptions({
    layout: {
        title: 'Email verification',
        description: 'Email verification is not enabled for this application.',
    },
});
</script>

<template>
    <Head title="Email verification" />

    <h1>Email verification</h1>

    <div class="space-y-6 text-center">
        <p>Email verification is not enabled for this application.</p>
        <TextLink :href="logout()" as="button" class="mx-auto block text-sm">
            Log out
        </TextLink>
    </div>
</template>
