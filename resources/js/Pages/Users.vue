<script setup>

import Nav from "../Shared/Nav.vue";
import {Link} from "@inertiajs/vue3";
import Layout from "@/Shared/Layout.vue";

defineProps({
    time: String,
});
</script>

<template>
    <Layout>
        <h1 class="text-4xl font-bold text-red-400">
            Users page
        </h1>
        <div class="mt-[1000px]">
            <p>The current time is : {{ time }}</p>
            <Link href="/users" class="text-blue-400" preserve-scroll>Refresh</Link>
        </div>
    </Layout>
</template>

<style scoped>

</style>
