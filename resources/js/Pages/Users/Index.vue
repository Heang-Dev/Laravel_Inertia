<script setup>

import {Link, router} from "@inertiajs/vue3";
import { ref, watch } from "vue";
import Layout from "../../Shared/Layout.vue";
import Pagination from "../../Shared/Pagination.vue";
import { debounce } from "lodash";

const props = defineProps({
    users: Object,
    filters: Object,
    can: Object,
});

let search = ref(props.filters.search);

watch(search, debounce(function (value) {
    console.log('Triggered')
    router.get('/users', { search: value }, { preserveState: true, replace: true });
}, 500));
</script>

<template>
    <Layout>
        <div class="flex w-full justify-between items-center mb-4">
            <div class="flex justify-center items-end gap-4">
                <h1 class="text-4xl font-bold text-red-400">
                    Users page
                </h1>
                <Link
                    v-if="can.createUser"
                    href="/users/create"
                    class="text-blue-500"
                >
                    New User
                </Link>
            </div>

            <input
                type="text"
                placeholder="Search...."
                class="px-6 py-2 text-lg bg-gray-200 rounded-full focus:outline-none"
                v-model="search"
            />
        </div>

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
                            v-if="user.can.edit"
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
