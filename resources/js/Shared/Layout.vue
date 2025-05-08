<script setup>

import Nav from "./Nav.vue";
</script>

<template>
    <section class="p-6 bg-green-300">
        <header class="flex justify-between">
            <h1 class="text-3xl font-bold">
                My App
            </h1>
            <Nav />
        </header>
    </section>
    <section class="p-6">
        <div class="max-w-7xl mx-auto">
            <slot />
        </div>
    </section>
</template>

<style scoped>

</style>
