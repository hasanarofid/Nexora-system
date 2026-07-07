<script setup>
import { Head, Link } from '@inertiajs/vue3';
import FrontendLayout from '@/Layouts/FrontendLayout.vue';
import { ref } from 'vue';

const creators = ref([
  { name: 'Alindra Creator', location: 'Jakarta, Indonesia', rating: 4.9, reviews: 128, price: 'Rp1.800.000', date: 'Tersedia 25 Mei 2024', image: '/images/creators/creator-1.jpg', isIphone: true, views: '12.4K', sameDay: true },
  { name: 'Moments by Ravi', location: 'Bandung', rating: 4.8, reviews: 96, price: 'Rp1.500.000', date: 'Tersedia 18 Mei 2024', image: '/images/creators/creator-2.jpg', isIphone: true, views: '9.8K', sameDay: true },
  { name: 'Citra Wedding Content', location: 'Bali', rating: 4.9, reviews: 142, price: 'Rp2.200.000', date: 'Tersedia 20 Mei 2024', image: '/images/creators/creator-3.jpg', isIphone: true, views: '15.7K', sameDay: true },
  { name: 'Storyteller.id', location: 'Surabaya', rating: 4.7, reviews: 84, price: 'Rp1.600.000', date: 'Tersedia 26 Mei 2024', image: '/images/creators/creator-4.jpg', isIphone: true, views: '8.2K', sameDay: true },
  { name: 'Reeliza Studio', location: 'Yogyakarta', rating: 4.8, reviews: 113, price: 'Rp1.900.000', date: 'Tersedia 28 Mei 2024', image: '/images/creators/creator-5.jpg', isIphone: true, views: '11.3K', sameDay: true },
  { name: 'Klip Wedding', location: 'Jakarta', rating: 4.5, reviews: 59, price: 'Rp1.200.000', date: 'Tersedia 30 Mei 2024', image: '/images/creators/creator-1.jpg', isIphone: true, views: '7.6K', sameDay: true },
  { name: 'Jepretin Aja', location: 'Tangerang', rating: 4.8, reviews: 101, price: 'Rp1.400.000', date: 'Tersedia 21 Mei 2024', image: '/images/creators/creator-2.jpg', isIphone: true, views: '10.1K', sameDay: true },
  { name: 'White Stories', location: 'Bogor', rating: 4.7, reviews: 78, price: 'Rp1.300.000', date: 'Tersedia 19 Mei 2024', image: '/images/creators/creator-3.jpg', isIphone: true, views: '9.3K', sameDay: true },
  { name: 'Satu Momen', location: 'Semarang', rating: 4.9, reviews: 133, price: 'Rp1.800.000', date: 'Tersedia 24 Mei 2024', image: '/images/creators/creator-4.jpg', isIphone: true, views: '14.2K', sameDay: true },
  { name: 'Kisah Hari Ini', location: 'Malang', rating: 4.6, reviews: 55, price: 'Rp1.100.000', date: 'Tersedia 27 Mei 2024', image: '/images/creators/creator-5.jpg', isIphone: true, views: '8.7K', sameDay: true },
  { name: 'Vibe Wedding', location: 'Bandung', rating: 4.9, reviews: 110, price: 'Rp2.000.000', date: 'Tersedia 22 Mei 2024', image: '/images/creators/creator-1.jpg', isIphone: true, views: '12.6K', sameDay: true },
  { name: 'Reel Moment', location: 'Denpasar', rating: 4.5, reviews: 47, price: 'Rp900.000', date: 'Tersedia 29 Mei 2024', image: '/images/creators/creator-2.jpg', isIphone: true, views: '6.5K', sameDay: true },
]);

const sameDayEdit = ref(true);

</script>

<template>
    <Head title="Explore Creators" />

    <FrontendLayout>
        <div class="bg-[#0a0a0a] min-h-screen text-gray-300 pt-24 pb-12 font-sans">
            <div class="max-w-[1920px] mx-auto px-4 sm:px-6 lg:px-8 xl:px-12 flex flex-col lg:flex-row gap-8">
                
                <!-- SIDEBAR FILTERS -->
                <aside class="w-full lg:w-72 flex-shrink-0">
                    <div class="sticky top-28 bg-[#121212] rounded-xl border border-gray-800 p-5">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="text-white font-bold text-base">Filter Pencarian</h3>
                            <button class="text-[#cba358] text-xs flex items-center gap-1 hover:text-white transition">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                                Reset
                            </button>
                        </div>

                        <!-- Lokasi -->
                        <div class="mb-6">
                            <label class="block text-sm font-semibold text-white mb-3">Lokasi</label>
                            <div class="relative mb-3">
                                <svg class="w-4 h-4 absolute left-3 top-1/2 -translate-y-1/2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                <input type="text" placeholder="Cari kota atau area" class="w-full bg-[#1a1a1a] border border-gray-700 rounded-lg py-2 pl-9 pr-3 text-sm text-white focus:border-[#cba358] focus:ring-1 focus:ring-[#cba358] outline-none placeholder-gray-500">
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-[#242018] border border-[#cba358]/30 text-[#cba358] text-xs px-3 py-1 rounded-full flex items-center gap-1 cursor-pointer">
                                    Jakarta <svg class="w-3 h-3 hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                </span>
                                <span class="bg-[#242018] border border-[#cba358]/30 text-[#cba358] text-xs px-3 py-1 rounded-full flex items-center gap-1 cursor-pointer">
                                    Sekitarnya <svg class="w-3 h-3 hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                </span>
                            </div>
                        </div>

                        <!-- Budget -->
                        <div class="mb-6 border-t border-gray-800 pt-5">
                            <label class="block text-sm font-semibold text-white mb-3">Budget</label>
                            <div class="space-y-2.5 mb-4">
                                <label class="flex items-center justify-between group cursor-pointer">
                                    <div class="flex items-center gap-3">
                                        <div class="w-4 h-4 rounded border border-gray-600 group-hover:border-[#cba358] flex items-center justify-center"></div>
                                        <span class="text-sm text-gray-400 group-hover:text-gray-200">Rp500K - Rp1JT</span>
                                    </div>
                                    <span class="text-xs text-gray-600">124</span>
                                </label>
                                <label class="flex items-center justify-between group cursor-pointer">
                                    <div class="flex items-center gap-3">
                                        <div class="w-4 h-4 rounded border border-[#cba358] bg-[#cba358] flex items-center justify-center">
                                            <svg class="w-3 h-3 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                        </div>
                                        <span class="text-sm text-white font-medium">Rp1JT - Rp2JT</span>
                                    </div>
                                    <span class="text-xs text-gray-500">278</span>
                                </label>
                                <label class="flex items-center justify-between group cursor-pointer">
                                    <div class="flex items-center gap-3">
                                        <div class="w-4 h-4 rounded border border-gray-600 group-hover:border-[#cba358] flex items-center justify-center"></div>
                                        <span class="text-sm text-gray-400 group-hover:text-gray-200">Rp2JT - Rp3JT</span>
                                    </div>
                                    <span class="text-xs text-gray-600">196</span>
                                </label>
                                <label class="flex items-center justify-between group cursor-pointer">
                                    <div class="flex items-center gap-3">
                                        <div class="w-4 h-4 rounded border border-gray-600 group-hover:border-[#cba358] flex items-center justify-center"></div>
                                        <span class="text-sm text-gray-400 group-hover:text-gray-200">Rp3JT - Rp7JT</span>
                                    </div>
                                    <span class="text-xs text-gray-600">142</span>
                                </label>
                                <label class="flex items-center justify-between group cursor-pointer">
                                    <div class="flex items-center gap-3">
                                        <div class="w-4 h-4 rounded border border-gray-600 group-hover:border-[#cba358] flex items-center justify-center"></div>
                                        <span class="text-sm text-gray-400 group-hover:text-gray-200">Rp7JT+</span>
                                    </div>
                                    <span class="text-xs text-gray-600">68</span>
                                </label>
                            </div>
                            <!-- Range Slider -->
                            <div class="relative w-full h-1 bg-gray-700 rounded-full mt-6 mb-2">
                                <div class="absolute left-1/4 right-1/4 h-full bg-[#cba358] rounded-full"></div>
                                <div class="absolute left-1/4 top-1/2 -translate-y-1/2 w-3 h-3 bg-[#cba358] rounded-full shadow cursor-pointer"></div>
                                <div class="absolute right-1/4 top-1/2 -translate-y-1/2 w-3 h-3 bg-[#cba358] rounded-full shadow cursor-pointer"></div>
                            </div>
                            <div class="flex justify-between text-xs text-[#cba358] font-medium mt-2">
                                <span>Rp1.000.000</span>
                                <span>Rp3.000.000</span>
                            </div>
                        </div>

                        <!-- Event Type -->
                        <div class="mb-6 border-t border-gray-800 pt-5">
                            <label class="block text-sm font-semibold text-white mb-3">Event Type</label>
                            <div class="space-y-2.5">
                                <label class="flex items-center justify-between group cursor-pointer">
                                    <div class="flex items-center gap-3">
                                        <div class="w-4 h-4 rounded border border-[#cba358] bg-[#cba358] flex items-center justify-center">
                                            <svg class="w-3 h-3 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                        </div>
                                        <span class="text-sm text-white font-medium">Wedding</span>
                                    </div>
                                    <span class="text-xs text-gray-500">532</span>
                                </label>
                                <label class="flex items-center justify-between group cursor-pointer">
                                    <div class="flex items-center gap-3">
                                        <div class="w-4 h-4 rounded border border-gray-600 group-hover:border-[#cba358] flex items-center justify-center"></div>
                                        <span class="text-sm text-gray-400 group-hover:text-gray-200">Engagement</span>
                                    </div>
                                    <span class="text-xs text-gray-600">218</span>
                                </label>
                                <label class="flex items-center justify-between group cursor-pointer">
                                    <div class="flex items-center gap-3">
                                        <div class="w-4 h-4 rounded border border-gray-600 group-hover:border-[#cba358] flex items-center justify-center"></div>
                                        <span class="text-sm text-gray-400 group-hover:text-gray-200">Birthday</span>
                                    </div>
                                    <span class="text-xs text-gray-600">96</span>
                                </label>
                                <label class="flex items-center justify-between group cursor-pointer">
                                    <div class="flex items-center gap-3">
                                        <div class="w-4 h-4 rounded border border-gray-600 group-hover:border-[#cba358] flex items-center justify-center"></div>
                                        <span class="text-sm text-gray-400 group-hover:text-gray-200">Corporate</span>
                                    </div>
                                    <span class="text-xs text-gray-600">74</span>
                                </label>
                                <label class="flex items-center justify-between group cursor-pointer">
                                    <div class="flex items-center gap-3">
                                        <div class="w-4 h-4 rounded border border-gray-600 group-hover:border-[#cba358] flex items-center justify-center"></div>
                                        <span class="text-sm text-gray-400 group-hover:text-gray-200">Event</span>
                                    </div>
                                    <span class="text-xs text-gray-600">63</span>
                                </label>
                            </div>
                        </div>

                        <!-- Same Day Edit Toggle -->
                        <div class="mb-6 border-t border-gray-800 pt-5 flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-[#cba358]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                <div>
                                    <div class="text-sm font-semibold text-[#cba358]">Same Day Edit</div>
                                    <div class="text-[10px] text-gray-500">Hasil dalam 24 jam</div>
                                </div>
                            </div>
                            <!-- Toggle Button -->
                            <div @click="sameDayEdit = !sameDayEdit" :class="sameDayEdit ? 'bg-[#cba358]' : 'bg-gray-700'" class="w-10 h-5 rounded-full relative cursor-pointer transition-colors">
                                <div :class="sameDayEdit ? 'translate-x-5 bg-black' : 'translate-x-1 bg-white'" class="w-4 h-4 rounded-full absolute top-0.5 transition-transform shadow"></div>
                            </div>
                        </div>

                        <!-- Device Used -->
                        <div class="mb-6 border-t border-gray-800 pt-5">
                            <label class="block text-sm font-semibold text-white mb-3">Device Used</label>
                            <div class="space-y-2.5">
                                <label class="flex items-center justify-between group cursor-pointer">
                                    <div class="flex items-center gap-3">
                                        <div class="w-4 h-4 rounded border border-[#cba358] bg-[#cba358] flex items-center justify-center">
                                            <svg class="w-3 h-3 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                        </div>
                                        <span class="text-sm text-white font-medium">iPhone Creator</span>
                                    </div>
                                    <span class="text-xs text-gray-500">482</span>
                                </label>
                                <label class="flex items-center justify-between group cursor-pointer">
                                    <div class="flex items-center gap-3">
                                        <div class="w-4 h-4 rounded border border-gray-600 group-hover:border-[#cba358] flex items-center justify-center"></div>
                                        <span class="text-sm text-gray-400 group-hover:text-gray-200">Android Creator</span>
                                    </div>
                                    <span class="text-xs text-gray-600">85</span>
                                </label>
                                <label class="flex items-center justify-between group cursor-pointer">
                                    <div class="flex items-center gap-3">
                                        <div class="w-4 h-4 rounded border border-gray-600 group-hover:border-[#cba358] flex items-center justify-center"></div>
                                        <span class="text-sm text-gray-400 group-hover:text-gray-200">Hybrid Creator</span>
                                    </div>
                                    <span class="text-xs text-gray-600">42</span>
                                </label>
                            </div>
                        </div>

                        <!-- Rating -->
                        <div class="mb-6 border-t border-gray-800 pt-5">
                            <label class="block text-sm font-semibold text-white mb-3">Rating</label>
                            <div class="space-y-2.5">
                                <label class="flex items-center justify-between group cursor-pointer">
                                    <div class="flex items-center gap-3">
                                        <div class="w-4 h-4 rounded border border-gray-600 group-hover:border-[#cba358] flex items-center justify-center"></div>
                                        <div class="flex items-center gap-1.5">
                                            <div class="flex items-center text-[#cba358] gap-0.5">
                                                <svg v-for="i in 5" :key="i" class="w-3.5 h-3.5" :class="i===5?'text-gray-600':'text-[#cba358]'" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                            </div>
                                            <span class="text-sm text-gray-300">4.8 ke atas</span>
                                        </div>
                                    </div>
                                    <span class="text-xs text-gray-600">184</span>
                                </label>
                                <label class="flex items-center justify-between group cursor-pointer">
                                    <div class="flex items-center gap-3">
                                        <div class="w-4 h-4 rounded border border-[#cba358] bg-[#cba358] flex items-center justify-center">
                                            <svg class="w-3 h-3 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                        </div>
                                        <div class="flex items-center gap-1.5">
                                            <div class="flex items-center text-[#cba358] gap-0.5">
                                                <svg v-for="i in 5" :key="i" class="w-3.5 h-3.5" :class="i===5?'text-gray-600':'text-[#cba358]'" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                            </div>
                                            <span class="text-sm text-white font-medium">4.5 ke atas</span>
                                        </div>
                                    </div>
                                    <span class="text-xs text-gray-500">362</span>
                                </label>
                                <label class="flex items-center justify-between group cursor-pointer">
                                    <div class="flex items-center gap-3">
                                        <div class="w-4 h-4 rounded border border-gray-600 group-hover:border-[#cba358] flex items-center justify-center"></div>
                                        <div class="flex items-center gap-1.5">
                                            <div class="flex items-center text-[#cba358] gap-0.5">
                                                <svg v-for="i in 5" :key="i" class="w-3.5 h-3.5" :class="i>3?'text-gray-600':'text-[#cba358]'" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                            </div>
                                            <span class="text-sm text-gray-300">4.0 ke atas</span>
                                        </div>
                                    </div>
                                    <span class="text-xs text-gray-600">498</span>
                                </label>
                            </div>
                        </div>

                        <!-- Available Date -->
                        <div class="mb-6 border-t border-gray-800 pt-5">
                            <label class="block text-sm font-semibold text-white mb-3">Available Date</label>
                            <div class="relative">
                                <input type="text" placeholder="Pilih tanggal tersedia" class="w-full bg-[#1a1a1a] border border-gray-700 rounded-lg py-2.5 px-3 text-sm text-white focus:border-[#cba358] focus:ring-1 focus:ring-[#cba358] outline-none placeholder-gray-500">
                                <svg class="w-4 h-4 absolute right-3 top-1/2 -translate-y-1/2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>
                        </div>

                        <button class="w-full bg-[#cba358] hover:bg-[#b58d44] text-black font-bold py-3 rounded-lg transition mb-4">
                            Terapkan Filter
                        </button>
                        <div class="text-center text-sm font-medium">
                            <span class="text-[#cba358]">532</span> <span class="text-gray-400">creator ditemukan</span>
                        </div>
                    </div>
                </aside>

                <!-- MAIN CONTENT -->
                <main class="flex-1">
                    <!-- Top Header -->
                    <div class="mb-8">
                        <h1 class="text-3xl font-serif text-white mb-2">Discover Wedding Content Creator</h1>
                        <p class="text-gray-400 text-sm">Temukan creator terbaik untuk momen spesialmu.</p>
                    </div>

                    <!-- Top Filter Bar -->
                    <div class="bg-[#121212] border border-gray-800 rounded-xl p-3 flex flex-wrap lg:flex-nowrap items-center justify-between gap-3 mb-8">
                        <div class="flex flex-wrap items-center gap-3 w-full lg:w-auto">
                            <!-- Dropdown 1 -->
                            <div class="flex items-center gap-2 bg-[#1a1a1a] rounded-lg px-4 py-2.5 border border-gray-800 hover:border-gray-600 cursor-pointer transition">
                                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <span class="text-sm text-gray-200">Jakarta, Indonesia</span>
                                <svg class="w-3 h-3 text-gray-500 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </div>
                            <!-- Dropdown 2 -->
                            <div class="flex items-center gap-2 bg-[#1a1a1a] rounded-lg px-4 py-2.5 border border-gray-800 hover:border-gray-600 cursor-pointer transition">
                                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                <div class="flex flex-col">
                                    <span class="text-[10px] text-gray-500 font-semibold uppercase leading-none mb-0.5">Date</span>
                                    <span class="text-sm text-gray-200 leading-none">Pilih tanggal</span>
                                </div>
                            </div>
                            <!-- Dropdown 3 -->
                            <div class="flex items-center gap-2 bg-[#1a1a1a] rounded-lg px-4 py-2.5 border border-gray-800 hover:border-gray-600 cursor-pointer transition">
                                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path></svg>
                                <div class="flex flex-col">
                                    <span class="text-[10px] text-gray-500 font-semibold uppercase leading-none mb-0.5">Event Type</span>
                                    <span class="text-sm text-gray-200 leading-none">Semua Event</span>
                                </div>
                                <svg class="w-3 h-3 text-gray-500 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </div>
                            <!-- Dropdown 4 -->
                            <div class="flex items-center gap-2 bg-[#1a1a1a] rounded-lg px-4 py-2.5 border border-gray-800 hover:border-gray-600 cursor-pointer transition">
                                <div class="flex flex-col">
                                    <span class="text-[10px] text-gray-500 font-semibold uppercase leading-none mb-0.5">Budget</span>
                                    <span class="text-sm text-gray-200 leading-none">Semua Budget</span>
                                </div>
                                <svg class="w-3 h-3 text-gray-500 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </div>
                            
                            <button class="bg-[#cba358] hover:bg-[#b58d44] text-black font-bold py-2.5 px-6 rounded-lg transition flex items-center gap-2 ml-auto lg:ml-0">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                Cari Creator
                            </button>
                        </div>

                        <!-- Right Align Sort -->
                        <div class="flex items-center gap-2 bg-[#1a1a1a] rounded-lg px-4 py-2.5 border border-gray-800 hover:border-gray-600 cursor-pointer transition w-full lg:w-auto mt-3 lg:mt-0">
                            <div class="flex flex-col w-full">
                                <span class="text-[10px] text-gray-500 font-semibold uppercase leading-none mb-0.5">Urutkan</span>
                                <div class="flex items-center justify-between w-full lg:w-32">
                                    <span class="text-sm text-gray-200 leading-none">Paling Relevan</span>
                                    <svg class="w-3 h-3 text-gray-500 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Meta Information -->
                    <div class="mb-6 text-sm text-gray-400">
                        <span class="text-white font-medium">532</span> Creator ditemukan
                    </div>

                    <!-- Creator Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-6 gap-5 mb-12">
                        <Link :href="`/creator/${creator.name.toLowerCase().replace(/\\s+/g, '-')}`" v-for="(creator, i) in creators" :key="i" class="bg-[#121212] rounded-xl overflow-hidden border border-gray-800 hover:border-[#cba358]/50 transition duration-300 group cursor-pointer flex flex-col h-full shadow-lg block">
                            <!-- Image container with 3:4 aspect ratio -->
                            <div class="relative pt-[133%] bg-gray-900 overflow-hidden">
                                <img :src="creator.image" alt="Creator Thumbnail" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-500">
                                
                                <!-- Top Overlays -->
                                <div class="absolute top-0 left-0 right-0 p-3 flex justify-between items-start z-10 bg-gradient-to-b from-black/60 to-transparent">
                                    <span v-if="creator.sameDay" class="bg-[#1a1a1a]/80 backdrop-blur-sm border border-[#cba358]/50 text-[#cba358] text-[10px] font-bold px-2 py-1 rounded">
                                        Same Day
                                    </span>
                                    <button class="text-white hover:text-[#cba358] transition ml-auto">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                                    </button>
                                </div>
                                
                                <!-- Bottom Overlays (Play icon and views) -->
                                <div class="absolute bottom-2 left-2 flex items-center gap-1 z-10 text-white font-medium text-xs drop-shadow-md">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"></path></svg>
                                    {{ creator.views }}
                                </div>

                                <!-- Dark gradient at bottom for text readability -->
                                <div class="absolute bottom-0 left-0 right-0 h-1/3 bg-gradient-to-t from-black/80 to-transparent"></div>
                            </div>
                            
                            <!-- Card Content -->
                            <div class="p-4 flex flex-col flex-1">
                                <!-- Creator Info -->
                                <div class="flex items-start gap-3 mb-3">
                                    <img :src="creator.image" class="w-8 h-8 rounded-full object-cover border border-gray-700" alt="Avatar">
                                    <div>
                                        <h3 class="text-white font-bold text-sm flex items-center gap-1 leading-tight">
                                            {{ creator.name }}
                                            <svg class="w-3.5 h-3.5 text-[#cba358]" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                        </h3>
                                        <p class="text-gray-400 text-[11px] mt-0.5">{{ creator.location }}</p>
                                        <div class="flex items-center gap-1 mt-1">
                                            <svg class="w-3 h-3 text-[#cba358]" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                            <span class="text-[#cba358] text-[11px] font-bold">{{ creator.rating }}</span>
                                            <span class="text-gray-500 text-[11px]">({{ creator.reviews }})</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Badges -->
                                <div class="flex flex-wrap gap-1.5 mb-4 mt-auto">
                                    <span class="bg-[#1a1a1a] border border-gray-700 text-gray-300 text-[9px] px-2 py-0.5 rounded flex items-center gap-1">
                                        <svg class="w-2.5 h-2.5 text-[#cba358]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                        Verified
                                    </span>
                                    <span v-if="creator.isIphone" class="bg-[#1a1a1a] border border-gray-700 text-gray-300 text-[9px] px-2 py-0.5 rounded">
                                        iPhone Creator
                                    </span>
                                </div>
                                
                                <!-- Price & Availability -->
                                <div class="pt-3 border-t border-gray-800">
                                    <div class="text-[10px] text-gray-500 mb-0.5">Mulai dari</div>
                                    <div class="text-white font-bold text-sm mb-1">{{ creator.price }}</div>
                                    <div class="text-[#4caf50] text-[10px]">{{ creator.date }}</div>
                                </div>
                            </div>
                        </Link>
                    </div>

                    <!-- Pagination -->
                    <div class="flex flex-col sm:flex-row justify-between items-center gap-4 text-sm">
                        <div class="flex items-center gap-1">
                            <button class="w-8 h-8 flex items-center justify-center rounded border border-gray-700 text-gray-400 hover:text-white hover:border-gray-500 transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                            </button>
                            <button class="w-8 h-8 flex items-center justify-center rounded border border-[#cba358] text-[#cba358] font-medium bg-[#cba358]/10 transition">
                                1
                            </button>
                            <button class="w-8 h-8 flex items-center justify-center rounded border border-gray-700 text-gray-300 hover:bg-[#1a1a1a] transition">
                                2
                            </button>
                            <button class="w-8 h-8 flex items-center justify-center rounded border border-gray-700 text-gray-300 hover:bg-[#1a1a1a] transition">
                                3
                            </button>
                            <span class="w-8 h-8 flex items-center justify-center text-gray-500">...</span>
                            <button class="w-8 h-8 flex items-center justify-center rounded border border-gray-700 text-gray-300 hover:bg-[#1a1a1a] transition">
                                18
                            </button>
                            <button class="w-8 h-8 flex items-center justify-center rounded border border-gray-700 text-gray-400 hover:text-white hover:border-gray-500 transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </button>
                        </div>
                        <div class="text-gray-400 text-xs">
                            Menampilkan 1 - 12 dari 532
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </FrontendLayout>
</template>
