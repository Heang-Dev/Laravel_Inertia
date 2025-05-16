<script setup>
import { computed } from "vue";
import { usePage } from "@inertiajs/vue3";
import Nav from "./Nav.vue";

const { props } = usePage();

const username = computed(() => {
    return props.auth?.user?.username ?? "Guest";
});
</script>

<template>
    <section class="p-6 bg-green-300">
        <header class="flex justify-between">
            <div class="flex items-end gap-2">
                <h1 class="text-3xl font-bold">
                    My App
                </h1>
                <p>
                    Welcome Back, <span>{{ username }}</span>!
                </p>
            </div>
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
    span {
        font-weight: bold;
        color: #e11a28;
    }
</style>
