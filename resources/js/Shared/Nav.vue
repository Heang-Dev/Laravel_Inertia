<script setup>

import NavLink from "./NavLink.vue";
</script>

<template>
    <nav>
        <ul class="flex list-inside space-x-8 text-lg">
            <li>
                <NavLink href="/" :active="$page.component === 'Home'">
                    Home
                </NavLink>
            </li>
            <li>
                <NavLink href="/users" :active="$page.component === 'Users'">
                    Users
                </NavLink>
            </li>
            <li>
                <NavLink href="/settings" :active="$page.component === 'Settings'">
                    Settings
                </NavLink>
            </li>
            <li>
                <NavLink href="/logout" method="post">
                    Log Out
                </NavLink>
            </li>
        </ul>
    </nav>
</template>

<style scoped>

</style>
