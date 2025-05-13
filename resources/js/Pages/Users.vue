<script setup>

import Nav from "../Shared/Nav.vue";
import {Link} from "@inertiajs/vue3";
import Layout from "@/Shared/Layout.vue";

defineProps({
    users: Array,
});
</script>

<template>
    <Layout>
        <h1 class="text-4xl font-bold text-red-400">
            Users page
        </h1>
        <ul>
            <li
                v-for="user in users"
                :key="user.id"
                v-text="user.name"
            ></li>
        </ul>
    </Layout>
</template>

<style scoped>

</style>
