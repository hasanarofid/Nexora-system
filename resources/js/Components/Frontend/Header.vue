<template>
    <header class="absolute top-0 left-0 w-full z-50 bg-transparent pt-4">
        <div class="max-w-[1600px] mx-auto px-4 sm:px-8 lg:px-16">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <Link href="/" class="flex-shrink-0 flex items-center gap-2 cursor-pointer">
                    <div class="flex flex-col">
                        <span class="text-2xl tracking-widest font-serif text-[#cba358] uppercase leading-none">Nexora</span>
                        <span class="text-[10px] tracking-[0.3em] text-[#cba358] uppercase mt-1">Moments</span>
                    </div>
                </Link>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex space-x-8 items-center">
                    <Link href="/explore" :class="[$page.url.startsWith('/explore') || $page.url.startsWith('/creator') ? 'text-[#cba358] border-b-2 border-[#cba358] pb-1' : 'text-white hover:text-[#cba358]']" class="text-sm font-medium transition">Explore Creators</Link>
                    <a href="#" class="text-sm font-medium text-white hover:text-[#cba358] transition">How It Works</a>
                    <a href="#" class="text-sm font-medium text-white hover:text-[#cba358] transition">For Creators</a>
                    <a href="#" class="text-sm font-medium text-white hover:text-[#cba358] transition">Pricing</a>
                    <a href="#" class="text-sm font-medium text-white hover:text-[#cba358] transition">About Us</a>
                    <a href="#" class="text-sm font-medium text-white hover:text-[#cba358] transition">Help</a>
                </nav>

                <!-- Desktop Actions -->
                <div class="hidden md:flex items-center space-x-6">
                    <a href="#" class="text-sm font-medium text-[#cba358] border border-[#cba358] px-5 py-2 rounded-md hover:bg-[#cba358] hover:text-black transition">Become a Creator</a>
                    <a href="#" class="text-sm font-medium text-white hover:text-[#cba358] transition">Login</a>
                    <a href="#" class="text-sm font-medium bg-[#cba358] text-black px-6 py-2 rounded-md hover:bg-[#b08d48] transition">Sign Up</a>
                </div>

                <!-- Mobile Notifications & Menu (Mock) -->
                <div class="flex md:hidden items-center gap-4">
                    <button class="text-gray-300 hover:text-white">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                    </button>
                </div>
            </div>
        </div>
    </header>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
</script>
