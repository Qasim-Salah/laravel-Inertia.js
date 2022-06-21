<template>
    <div class="min-h-screen bg-gray-100 overflow-x-hidden">
        <NavbarComponent/>
        <div class="px-6 py-8">
            <slot/>
        </div>
        <FooterComponent/>
    </div>
</template>

<script>
import NavbarComponent from "./Components/NavbarComponent";
import FooterComponent from "./Components/FooterComponent";

export default {
    name: "MasterComponent",
    components: {
        NavbarComponent,
        FooterComponent,
    },
};
</script>
