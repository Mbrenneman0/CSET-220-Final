<script setup lang="ts">
import { Head } from '@inertiajs/vue3';

defineOptions({
    layout: {
        title: 'Reset password',
        description: 'Password resets are not enabled for this application.',
    },
});
</script>

<template>
    <Head title="Reset password" />

    <h1>Reset password</h1>

    <p class="text-center text-sm text-muted-foreground">
        Password resets are not enabled for this application.
    </p>
</template>
