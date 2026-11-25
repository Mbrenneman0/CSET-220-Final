<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import { dashboard, login, register } from '@/routes';
</script>

<template>
    <Head title="Welcome" />

    <div>
        <nav v-if="$page.props.auth">
            <Link v-if="$page.props.auth.user" :href="dashboard()">
                Dashboard
            </Link>
            <template v-else>
                <Link :href="login()">Log in</Link>
                <Link :href="register()">Register</Link>
            </template>
        </nav>

        <!-- Add your own custom content here -->
        <main>
            <h1>Old People...</h1>
        </main>
    </div>
</template>
