<script setup>

import Nav from "../Shared/Nav.vue";
import {Link} from "@inertiajs/vue3";

defineProps({
    time: String,
});
</script>

<template>
    <h1 class="text-4xl font-bold">
        Users page
    </h1>

    <Nav />

    <div class="mt-[1000px]">
        <p>The current time is : {{ time }}</p>
        <Link href="/users" class="text-blue-400" preserve-scroll>Refresh</Link>
    </div>
</template>

<style scoped>

</style>
