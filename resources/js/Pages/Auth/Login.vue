<script setup>

import {useForm} from "@inertiajs/vue3";

let form = useForm({
    email: '',
    password: '',
})

const submitFrom = () => {
    form.post('/login');
}
</script>

<template>
    <main class="grid place-items-center min-h-screen">
        <section class="bg-white p-8 rounded mx-auto border">
            <h1 class="text-3xl font-bold mb-8 text-center">Login</h1>
            <form @submit.prevent="submitFrom" class="max-w-md">
                <div class="mb-6">
                    <label
                        class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="email"
                    >
                        Email
                    </label>
                    <input
                        v-model="form.email"
                        class="border rounded p-2 w-full"
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
                        class="border rounded p-2 w-full"
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
                        Login
                    </button>
                </div>
            </form>
        </section>
    </main>
</template>

<style scoped>

</style>
