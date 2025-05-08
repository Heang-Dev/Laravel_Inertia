<script setup>

import {Link} from "@inertiajs/vue3";

defineProps({
    active: Boolean,
    href: String,
})
</script>

<template>
    <li>
        <Link
            class="text-black hover:underline"
            :class="{'font-bold underline text-red-500': active}"
            :href='href'
            >
                <slot />
        </Link>
    </li>
</template>

<style scoped>

</style>
