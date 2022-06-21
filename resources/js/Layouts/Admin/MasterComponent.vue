<template>
    <div class="flex h-screen bg-gray-200">
        <!-- sidebar -->
        <SidebarComponent/>
        <!-- end sidebar -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- header -->
            <HeaderComponent/>
            <!-- end header -->
            <!-- content -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                <slot/>
            </main>
            <!-- end content -->
        </div>
    </div>
</template>

<script>
import HeaderComponent from "./components/HeaderComponent.vue";
import SidebarComponent from "./components/SidebarComponent.vue";

export default {
    name: 'MasterComponent',

    components: {SidebarComponent, HeaderComponent},
};
</script>
