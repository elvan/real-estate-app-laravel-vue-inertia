<template>
    <Link href="/">Main Page</Link>&nbsp;
    <Link href="/hello">Show Page</Link>
    <div v-if="flashSuccess" class="success">
        {{ flashSuccess }}
    </div>
    <div>{{ y }}</div>
    <slot>Default</slot>
</template>

<script setup>
import { Link, usePage } from '@inertiajs/inertia-vue3';
import { computed } from 'vue';

const page = usePage();
const flashSuccess = computed(() => page.props.value.flash.success);
</script>

<style scoped>
.success {
    background-color: green;
    color: white;
}
</style>
