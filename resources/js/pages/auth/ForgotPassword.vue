<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import TextLink from '@/components/TextLink.vue';
import { login } from '@/routes';

defineOptions({
    layout: {
        title: 'Forgot password',
        description: 'Password resets are not enabled for this application.',
    },
});
</script>

<template>
    <Head title="Forgot password" />

    <h1>Forgot password</h1>

    <div class="space-y-6">
        <p class="text-center text-sm text-muted-foreground">
            Password resets are not enabled for this application.
        </p>

        <div class="space-x-1 text-center text-sm text-muted-foreground">
            <span>Or, return to</span>
            <TextLink :href="login()">log in</TextLink>
        </div>
    </div>
</template>
