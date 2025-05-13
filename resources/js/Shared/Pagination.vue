<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
    links: Array
});
</script>

<template>
    <div class="flex gap-2">
        <Component
            v-for="link in links"
            :key="link.label"
            :is="link.url ? Link : 'span'"
            :href="link.url"
            v-html="link.label"
            class="px-2 py-1 text-white rounded"
            :class="
                link.url ?
                    'cursor-pointer hover:bg-pink-400'
                    : 'bg-gray-300 text-gray-500 hover:bg-gray-700 cursor-not-allowed',
                link.active ?
                    'bg-red-500'
                    : 'bg-blue-500'"
        />
    </div>
</template>

<style scoped>
</style>
