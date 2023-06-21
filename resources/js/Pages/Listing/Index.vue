<template>
    <div v-for="listing in listings" :key="listing.id">
        <div>
            <Link :href="`/listing/${listing.id}`">
                <ListingAddress :listing="listing" />
            </Link>
        </div>
        <div>
            <Link :href="`/listing/${listing.id}/edit`">Edit</Link>
        </div>
        <div>
            <Link :href="`/listing/${listing.id}`" method="DELETE">Delete</Link>
        </div>
    </div>
</template>

<script setup>
import ListingAddress from '@/Components/ListingAddress.vue';
import { Link } from '@inertiajs/inertia-vue3';
defineProps({
    listings: Array,
});
</script>
