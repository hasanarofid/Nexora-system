<script setup>
import { Head } from '@inertiajs/vue3';
import FrontendLayout from '@/Layouts/FrontendLayout.vue';
import HeroSection from '@/Components/Frontend/HeroSection.vue';
import CategoryGrid from '@/Components/Frontend/CategoryGrid.vue';
import TopCreatorsSection from '@/Components/Frontend/TopCreatorsSection.vue';
import FeaturesSection from '@/Components/Frontend/FeaturesSection.vue';
import EcosystemSection from '@/Components/Frontend/EcosystemSection.vue';
</script>

<template>
    <Head title="Find Best Wedding Content Creator" />

    <FrontendLayout>
        <!-- Hero Banner -->
        <HeroSection />

        <!-- Mobile specific features banner -->
        <div class="md:hidden px-4 mt-2 mb-8 space-y-3">
            <div class="bg-[#1a1a1a] rounded-xl border border-gray-800 p-4 flex gap-4 items-center">
                <div class="bg-gray-800 rounded-lg p-2.5">
                    <svg class="w-6 h-6 text-[#cba358]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <div>
                    <h3 class="text-white text-sm font-bold">Same Day Delivery</h3>
                    <p class="text-[10px] text-gray-400 mt-1">Edit cepat & siap upload di hari yang sama. Momen Anda, langsung jadi cerita.</p>
                </div>
            </div>

            <button class="w-full bg-gradient-to-r from-[#cba358] to-[#9a7b3c] text-black font-bold p-4 rounded-xl flex justify-between items-center text-left">
                <div>
                    <div class="text-sm font-bold">Join as WCC</div>
                    <div class="text-[10px] font-medium mt-0.5 opacity-80">Mulai perjalananmu bersama Nexora Moments</div>
                </div>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </button>
        </div>

        <!-- Top Creators -->
        <TopCreatorsSection />

        <!-- Features (Desktop layout uses cards, mobile might just list them) -->
        <FeaturesSection />

        <!-- Ecosystem Section (Built for the new creator era) -->
        <EcosystemSection />

    </FrontendLayout>
</template>
