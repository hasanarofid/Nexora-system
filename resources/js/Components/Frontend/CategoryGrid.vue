<template>
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <!-- Desktop Header -->
        <div class="hidden md:flex justify-between items-center mb-8">
            <div class="flex items-center gap-4">
                <span class="text-sm font-semibold text-gray-400">Popular Searches:</span>
                <div class="flex gap-2">
                    <span class="bg-[#1a1a1a] border border-gray-800 text-xs px-3 py-1 rounded-full text-gray-300">Jakarta</span>
                    <span class="bg-[#1a1a1a] border border-gray-800 text-xs px-3 py-1 rounded-full text-gray-300">Bandung</span>
                    <span class="bg-[#1a1a1a] border border-gray-800 text-xs px-3 py-1 rounded-full text-gray-300">Bali</span>
                    <span class="bg-[#1a1a1a] border border-gray-800 text-xs px-3 py-1 rounded-full text-gray-300">Surabaya</span>
                    <span class="bg-[#1a1a1a] border border-gray-800 text-xs px-3 py-1 rounded-full text-gray-300">Yogyakarta</span>
                </div>
            </div>
        </div>

        <div class="md:hidden flex justify-between items-center mb-4">
            <h2 class="text-sm font-bold text-white">Pilih Kategori Event</h2>
            <a href="#" class="text-xs text-[#cba358]">Lihat Semua</a>
        </div>

        <!-- Categories Grid -->
        <div class="grid grid-cols-2 md:grid-cols-5 gap-3 md:gap-4 border md:border-gray-800 md:bg-[#1a1a1a] md:p-2 md:rounded-xl border-none">
            <button v-for="category in categories" :key="category.name" 
                class="relative overflow-hidden group md:flex md:items-center md:gap-3 md:p-3 md:rounded-lg md:hover:bg-gray-800 md:transition md:text-left
                h-32 rounded-xl bg-gray-900 border border-gray-800 flex flex-col justify-end p-3">
                
                <!-- Desktop Icon -->
                <div class="hidden md:flex flex-shrink-0 w-10 h-10 rounded-full bg-gray-800/50 items-center justify-center text-[#cba358] group-hover:scale-110 transition-transform">
                    <svg class="w-5 h-5" v-html="category.iconPath" fill="none" stroke="currentColor" viewBox="0 0 24 24"></svg>
                </div>
                
                <!-- Desktop Text -->
                <div class="hidden md:block">
                    <h3 class="text-sm font-bold text-white group-hover:text-[#cba358] transition" :class="{'text-[#cba358]': category.active}">{{ category.name }}</h3>
                    <p class="text-[10px] text-gray-400">{{ category.desc }}</p>
                </div>

                <!-- Mobile Image Background Mock -->
                <div class="absolute inset-0 md:hidden opacity-40 mix-blend-overlay bg-gradient-to-t from-black via-black/50 to-transparent z-0">
                    <!-- Real implementation would have a background image here -->
                </div>

                <!-- Mobile Text -->
                <div class="relative z-10 md:hidden text-center w-full">
                    <h3 class="text-sm font-bold text-white leading-tight">{{ category.name }}</h3>
                    <p class="text-[9px] text-gray-300 mt-1 line-clamp-1">{{ category.desc }}</p>
                </div>
            </button>
            
            <div class="hidden md:flex items-center justify-center border-l border-gray-800 pl-4">
                <a href="#" class="text-xs text-gray-400 hover:text-[#cba358] transition flex items-center gap-1">
                    See All Categories
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </a>
            </div>
        </div>
    </section>
</template>

<script setup>
import { ref } from 'vue';

const categories = ref([
    {
        name: 'Wedding',
        desc: 'Most Popular',
        active: true,
        iconPath: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>' // Just a heart placeholder
    },
    {
        name: 'Engagement',
        desc: 'Capture Love',
        active: false,
        iconPath: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4"></path>'
    },
    {
        name: 'Birthday',
        desc: 'Special Moments',
        active: false,
        iconPath: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z"></path>'
    },
    {
        name: 'Corporate',
        desc: 'Professional Event',
        active: false,
        iconPath: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>'
    },
    {
        name: 'Event',
        desc: 'All Occasions',
        active: false,
        iconPath: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>'
    }
]);
</script>
