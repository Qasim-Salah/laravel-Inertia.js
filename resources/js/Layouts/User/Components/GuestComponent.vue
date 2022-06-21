<template>
    <div class="min-h-screen bg-gray-100 overflow-x-hidden">
        <NavbarComponent/>
        <div class="px-6 py-8">
            <slot/>
        </div>
    </div>
</template>

<script>
import NavbarComponent from "./NavbarComponent";

export default {
    name: "GuestComponent",
    components: {
        NavbarComponent,
    },
};
</script>
