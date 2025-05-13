<script setup>

import {Link} from "@inertiajs/vue3";
import Layout from "../Shared/Layout.vue";
import Pagination from "@/Shared/Pagination.vue";

defineProps({
    users: Object,
});
</script>

<template>
    <Layout>
        <h1 class="text-4xl font-bold text-red-400">
            Users page
        </h1>

        <div class="overflow-x-auto mt-4">
            <table class="min-w-full bg-white border border-gray-200 w-full">
                <tbody>
                <tr
                    v-for="user in users.data"
                    :key="user.id"
                    class="border-b hover:bg-gray-200"
                >
                    <td class="px-6 py-4 text-sm text-gray-700 w-full">{{ user.name }}</td>
                    <td class="px-6 py-4">
                        <Link
                            :href="`/users/${user.id}/edit`"
                            class="px-4 py-2 bg-blue-500 cursor-pointer text-white text-sm rounded hover:bg-blue-600"
                        >Edit</Link>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

        <!-- Paginator -->
        <div class="mt-6">
            <Pagination :links="users.links" />
        </div>

    </Layout>
</template>

<style scoped>

</style>
