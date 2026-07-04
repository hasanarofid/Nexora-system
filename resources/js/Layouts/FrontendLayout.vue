<template>
    <div class="min-h-screen bg-[#0d0d0d] text-white font-sans selection:bg-[#cba358] selection:text-black pb-16 md:pb-0">
        <!-- Header for Desktop & Mobile -->
        <Header />

        <!-- Main Content -->
        <main>
            <slot />
        </main>

        <!-- Footer -->
        <Footer />

        <!-- Mobile Bottom Navigation (Visible only on small screens) -->
        <MobileBottomNav class="md:hidden" />
    </div>
</template>

<script setup>
import Header from '@/Components/Frontend/Header.vue';
import Footer from '@/Components/Frontend/Footer.vue';
import MobileBottomNav from '@/Components/Frontend/MobileBottomNav.vue';
</script>
