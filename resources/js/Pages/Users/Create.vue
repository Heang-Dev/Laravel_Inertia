<script setup>

import Layout from "@/Shared/Layout.vue";
import { useForm} from "@inertiajs/vue3";

defineProps({
    errors: Object,
})

let form = useForm({
    name: '',
    email: '',
    password: '',
})

let submitFrom = () => {
    form.post('/users');

}
</script>

<template>
    <Layout>
        <h1 class="text-3xl font-bold">Create New User</h1>

        <form @submit.prevent="submitFrom" class="max-w-md mx-auto mt-8">
            <div class="mb-6">
                <label
                    class="block mb-2 uppercase font-bold text-xs text-gray-700"
                    for="name"
                >
                    Name
                </label>
                <input
                    v-model="form.name"
                    class="border border-gray-400 p-2 w-full"
                    type="text"
                    name="name"
                    id="name"
                    required
                >
                <div
                    v-if="form.errors.name"
                    v-text="form.errors.name"
                    class="text-red-500 text-xs mt-1"
                ></div>
            </div>
            <div class="mb-6">
                <label
                    class="block mb-2 uppercase font-bold text-xs text-gray-700"
                    for="email"
                >
                    Email
                </label>
                <input
                    v-model="form.email"
                    class="border border-gray-400 p-2 w-full"
                    type="email"
                    name="email"
                    id="email"
                    required
                >
                <div
                    v-if="form.errors.email"
                    v-text="form.errors.email"
                    class="text-red-500 text-xs mt-1"
                ></div>
            </div>
            <div class="mb-6">
                <label
                    class="block mb-2 uppercase font-bold text-xs text-gray-700"
                    for="password"
                >
                    Password
                </label>
                <input
                    v-model="form.password"
                    class="border border-gray-400 p-2 w-full"
                    type="password"
                    name="password"
                    id="password"
                    required
                >
                <div
                    v-if="form.errors.password"
                    v-text="form.errors.password"
                    class="text-red-500 text-xs mt-1"
                ></div>
            </div>
            <div>
                <button
                    type="submit"
                    :disabled="form.processing"
                    class="bg-blue-400 disabled:bg-gray-600 cursor-pointer disabled:cursor-not-allowed text-white rounded py-2 px-4 hover:bg-blue-500"
                >
                    Submit
                </button>
            </div>
        </form>
    </Layout>
</template>

<style scoped>

</style>
