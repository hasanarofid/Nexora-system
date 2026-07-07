<script setup>
import { Head, Link } from '@inertiajs/vue3';
import FrontendLayout from '@/Layouts/FrontendLayout.vue';

const props = defineProps({
    username: {
        type: String,
        default: 'alindra-creator'
    }
});

// For dummy representation based on username:
const creatorName = props.username.split('-').map(word => word.charAt(0).toUpperCase() + word.slice(1)).join(' ');
</script>

<template>
    <Head :title="creatorName + ' - Nexora Moments'" />

    <FrontendLayout>
        <div class="bg-[#0a0a0a] min-h-screen text-gray-300 pt-24 pb-12 font-sans">
            <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
                
                <!-- Back Link -->
                <div class="mb-6">
                    <Link href="/explore" class="text-[#cba358] hover:text-[#b58d44] text-sm flex items-center gap-1.5 transition w-max">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                        Back to Search
                    </Link>
                </div>

                <div class="flex flex-col lg:flex-row gap-8">
                    
                    <!-- LEFT COLUMN -->
                    <div class="flex-1 space-y-6">
                        
                        <!-- Hero Banner -->
                        <div class="relative bg-gray-900 rounded-2xl overflow-hidden shadow-2xl h-[450px] sm:h-[550px] border border-gray-800">
                            <!-- Background Image -->
                            <img src="/images/creators/creator-1.jpg" class="absolute inset-0 w-full h-full object-cover object-top opacity-60" alt="Cover">
                            <!-- Gradient Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-r from-black/95 via-black/70 to-transparent"></div>
                            
                            <!-- Content -->
                            <div class="relative h-full flex flex-col justify-center p-8 lg:p-12 w-full lg:w-3/4">
                                <div class="inline-flex items-center gap-1.5 text-[#cba358] text-[10px] font-bold mb-4 bg-[#1a1a1a]/50 px-2 py-1 rounded border border-[#cba358]/30 backdrop-blur-sm w-max uppercase tracking-wider">
                                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                    Verified Creator
                                </div>
                                
                                <h1 class="text-4xl sm:text-5xl font-serif text-white mb-2 flex items-center gap-3">
                                    {{ creatorName }}
                                    <svg class="w-6 h-6 text-[#cba358]" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14.59L6.41 12 7.83 10.59l3.17 3.17 6.59-6.59L19 8.59 11 16.59z"/></svg>
                                </h1>
                                
                                <p class="text-lg text-gray-300 mb-4">Wedding Content Creator</p>
                                
                                <div class="flex flex-wrap items-center gap-4 text-sm text-gray-300 mb-6">
                                    <div class="flex items-center gap-1.5">
                                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                        Jakarta, Indonesia
                                    </div>
                                    <div class="w-1 h-1 rounded-full bg-gray-500"></div>
                                    <div class="flex items-center gap-1.5 text-white">
                                        <svg class="w-4 h-4 text-[#cba358]" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                        <span class="text-[#cba358] font-bold">4.9</span> (128 Reviews)
                                    </div>
                                    <div class="w-1 h-1 rounded-full bg-gray-500"></div>
                                    <div>98% Response Rate</div>
                                </div>
                                
                                <div class="flex flex-wrap gap-3 mb-8">
                                    <span class="bg-[#1a1a1a]/80 border border-gray-700 text-gray-300 text-[11px] px-3 py-1.5 rounded-md flex items-center gap-1.5 backdrop-blur-sm">
                                        <svg class="w-3.5 h-3.5 text-[#cba358]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                        Same Day Edit
                                    </span>
                                    <span class="bg-[#1a1a1a]/80 border border-gray-700 text-gray-300 text-[11px] px-3 py-1.5 rounded-md flex items-center gap-1.5 backdrop-blur-sm">
                                        <svg class="w-3.5 h-3.5 text-[#cba358]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                                        iPhone Creator
                                    </span>
                                    <span class="bg-[#1a1a1a]/80 border border-gray-700 text-gray-300 text-[11px] px-3 py-1.5 rounded-md flex items-center gap-1.5 backdrop-blur-sm">
                                        <svg class="w-3.5 h-3.5 text-[#cba358]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"></path></svg>
                                        Vertical Specialist
                                    </span>
                                </div>
                                
                                <div class="flex flex-wrap gap-4 mt-auto">
                                    <button class="bg-[#cba358] hover:bg-[#b58d44] text-black font-bold py-2.5 px-6 rounded-lg transition flex items-center gap-2">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"></path></svg>
                                        Watch Showreel
                                    </button>
                                    <button class="bg-transparent border border-gray-500 hover:border-white text-white font-medium py-2.5 px-6 rounded-lg transition flex items-center gap-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                                        Save Creator
                                    </button>
                                </div>
                            </div>

                            <!-- Phone Mockup inside Banner -->
                            <div class="hidden md:block absolute right-10 top-1/2 -translate-y-1/2 w-48 lg:w-[220px] shadow-2xl rounded-[30px] overflow-hidden border-[6px] border-black bg-black h-[450px]">
                                <div class="absolute top-0 left-0 right-0 h-5 bg-black z-20 flex justify-center">
                                    <div class="w-20 h-4 bg-[#0a0a0a] rounded-b-xl"></div>
                                </div>
                                <img src="/images/creators/creator-2.jpg" class="w-full h-full object-cover opacity-90" alt="Showreel Preview">
                                <div class="absolute bottom-4 left-3 right-3 text-white">
                                    <div class="text-xs font-bold mb-1 shadow-black drop-shadow-md">@alindracreator</div>
                                    <div class="text-[9px] shadow-black drop-shadow-md mb-2">Wedding Day | Same Day Edit</div>
                                    <div class="flex items-center gap-1 text-[9px]">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 14.5c-2.49 0-4.5-2.01-4.5-4.5S9.51 7.5 12 7.5s4.5 2.01 4.5 4.5-2.01 4.5-4.5 4.5zm0-7.5c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/></svg>
                                        Original Audio
                                    </div>
                                </div>
                                <div class="absolute right-2 bottom-20 flex flex-col items-center gap-4 text-white">
                                    <div class="flex flex-col items-center">
                                        <svg class="w-6 h-6 drop-shadow-md" fill="currentColor" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                                        <span class="text-[9px] drop-shadow-md mt-1">24K</span>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <svg class="w-6 h-6 drop-shadow-md" fill="currentColor" viewBox="0 0 24 24"><path d="M21.99 4c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4-.01-18zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z"/></svg>
                                        <span class="text-[9px] drop-shadow-md mt-1">128</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Stats Row -->
                        <div class="bg-[#121212] border border-gray-800 rounded-xl p-6 flex flex-wrap justify-between gap-4 sm:gap-6">
                            <div class="text-center flex-1">
                                <div class="flex items-center justify-center gap-2 text-[#cba358] mb-1.5">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    <span class="text-2xl font-bold text-white">128</span>
                                </div>
                                <div class="text-[11px] text-gray-500 font-medium">Completed Project</div>
                            </div>
                            <div class="text-center flex-1 border-l border-gray-800">
                                <div class="flex items-center justify-center gap-2 text-[#cba358] mb-1.5">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                                    <span class="text-2xl font-bold text-white">98%</span>
                                </div>
                                <div class="text-[11px] text-gray-500 font-medium">Response Rate</div>
                            </div>
                            <div class="text-center flex-1 border-l border-gray-800">
                                <div class="flex items-center justify-center gap-2 text-[#cba358] mb-1.5">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                                    <span class="text-2xl font-bold text-white">4.9</span>
                                </div>
                                <div class="text-[11px] text-gray-500 font-medium">Rating</div>
                            </div>
                            <div class="text-center flex-1 border-l border-gray-800 hidden sm:block">
                                <div class="flex items-center justify-center gap-2 text-[#cba358] mb-1.5">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                    <span class="text-2xl font-bold text-white">2+ Years</span>
                                </div>
                                <div class="text-[11px] text-gray-500 font-medium">Experience</div>
                            </div>
                            <div class="text-center flex-1 border-l border-gray-800 hidden md:block">
                                <div class="flex items-center justify-center gap-2 text-[#cba358] mb-1.5">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                                    <span class="text-2xl font-bold text-white">Jakarta</span>
                                </div>
                                <div class="text-[11px] text-gray-500 font-medium">Based in</div>
                            </div>
                        </div>

                        <!-- Info & Portfolio Grid -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            
                            <!-- About -->
                            <div class="bg-[#121212] border border-gray-800 rounded-xl p-6">
                                <h3 class="text-white font-bold mb-4">About {{ creatorName }}</h3>
                                <p class="text-[13px] text-gray-400 leading-relaxed mb-6">
                                    Specialized in wedding content creation with cinematic & storytelling approach. We capture real moments and turn them into stunning vertical content. Same Day Edit available to make your memories last forever.
                                </p>
                                
                                <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 text-center">
                                    <div class="border border-gray-800 rounded-lg p-3 bg-[#1a1a1a]">
                                        <svg class="w-6 h-6 text-[#cba358] mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                                        <div class="text-[10px] text-gray-300 font-medium leading-tight">iPhone 15 Pro Max</div>
                                        <div class="text-[9px] text-gray-500 mt-1">Main Device</div>
                                    </div>
                                    <div class="border border-gray-800 rounded-lg p-3 bg-[#1a1a1a]">
                                        <svg class="w-6 h-6 text-[#cba358] mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"></path></svg>
                                        <div class="text-[10px] text-gray-300 font-medium leading-tight">Vertical Specialist</div>
                                        <div class="text-[9px] text-gray-500 mt-1">9:16 Expert</div>
                                    </div>
                                    <div class="border border-gray-800 rounded-lg p-3 bg-[#1a1a1a]">
                                        <svg class="w-6 h-6 text-[#cba358] mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                        <div class="text-[10px] text-gray-300 font-medium leading-tight">Same Day Edit</div>
                                        <div class="text-[9px] text-gray-500 mt-1">Delivered 24 Hours</div>
                                    </div>
                                    <div class="border border-gray-800 rounded-lg p-3 bg-[#1a1a1a]">
                                        <svg class="w-6 h-6 text-[#cba358] mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        <div class="text-[10px] text-gray-300 font-medium leading-tight">Travel Ready</div>
                                        <div class="text-[9px] text-gray-500 mt-1">All Jabodetabek</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Portfolio Preview -->
                            <div class="bg-[#121212] border border-gray-800 rounded-xl p-6">
                                <div class="flex justify-between items-center mb-4">
                                    <h3 class="text-white font-bold">Portfolio Preview</h3>
                                    <a href="#" class="text-[#cba358] text-xs font-medium flex items-center gap-1 hover:text-[#b58d44] transition">
                                        View All Portfolio
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                    </a>
                                </div>
                                <div class="grid grid-cols-4 gap-3">
                                    <div v-for="i in 4" :key="i" class="relative pt-[160%] bg-gray-900 rounded-lg overflow-hidden group cursor-pointer border border-gray-800">
                                        <img :src="`/images/creators/creator-${i+1}.jpg`" class="absolute inset-0 w-full h-full object-cover opacity-80 group-hover:opacity-100 transition duration-300 group-hover:scale-105" alt="Portfolio item">
                                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
                                        <div class="absolute bottom-1.5 left-1.5 flex items-center gap-0.5 text-white text-[10px] font-medium z-10 drop-shadow">
                                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"></path></svg>
                                            {{ 10 + i }}.{{ i }}K
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Reviews -->
                        <div class="bg-[#121212] border border-gray-800 rounded-xl p-6 flex flex-col md:flex-row gap-8">
                            <div class="md:w-1/3">
                                <h3 class="text-white font-bold mb-4">Reviews from Clients</h3>
                                <div class="flex items-end gap-3 mb-2">
                                    <div class="text-6xl font-bold text-white leading-none tracking-tighter">4.9</div>
                                    <div class="mb-1">
                                        <div class="flex text-[#cba358] mb-1">
                                            <svg v-for="i in 5" :key="i" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                        </div>
                                        <div class="text-xs text-gray-500">(128 Reviews)</div>
                                    </div>
                                </div>
                                <!-- Star Bars -->
                                <div class="space-y-1.5 mt-4">
                                    <div v-for="(count, star) in {5:108, 4:16, 3:3, 2:1, 1:0}" :key="star" class="flex items-center gap-2 text-xs">
                                        <div class="flex items-center gap-1 w-6 text-gray-400 font-medium">{{ star }} <svg class="w-2.5 h-2.5 text-[#cba358]" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg></div>
                                        <div class="flex-1 h-1 bg-gray-800 rounded-full overflow-hidden">
                                            <div class="h-full bg-[#cba358]" :style="`width: ${(count/128)*100}%`"></div>
                                        </div>
                                        <div class="w-6 text-right text-gray-500">{{ count }}</div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="md:w-2/3 border-t md:border-t-0 md:border-l border-gray-800 pt-6 md:pt-0 md:pl-8">
                                <div class="flex items-start gap-4">
                                    <img src="/images/creators/creator-4.jpg" class="w-10 h-10 rounded-full object-cover border border-gray-700" alt="Reviewer">
                                    <div>
                                        <div class="flex items-center gap-2 mb-1">
                                            <h4 class="text-white font-medium text-sm">Vanessa Anindita</h4>
                                            <span class="text-[9px] text-[#cba358] bg-[#cba358]/10 px-1.5 py-0.5 rounded border border-[#cba358]/30 flex items-center gap-0.5">
                                                <svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                                Verified
                                            </span>
                                        </div>
                                        <div class="text-[11px] text-gray-500 mb-2">Wedding - 12 Mei 2024</div>
                                        <div class="flex items-center gap-2 mb-2">
                                            <div class="flex text-[#cba358]">
                                                <svg v-for="i in 5" :key="i" class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                            </div>
                                            <span class="text-white font-medium text-xs">5.0</span>
                                        </div>
                                        <p class="text-[13px] text-gray-400 italic">"Hasilnya luar biasa! Super cepat, komunikatif, dan video verticalnya bikin semua tamu terkesan."</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- RIGHT COLUMN (SIDEBAR) -->
                    <div class="w-full lg:w-[380px] flex-shrink-0">
                        <div class="sticky top-28 space-y-6">
                            
                            <!-- Booking Widget -->
                            <div class="bg-[#121212] border border-gray-800 rounded-2xl p-6 shadow-2xl">
                                
                                <div class="flex justify-between items-center mb-6 border-b border-gray-800 pb-4">
                                    <h2 class="text-white font-medium text-sm">Booking {{ creatorName }}</h2>
                                    <div class="flex items-center gap-3 text-gray-400">
                                        <button class="hover:text-white transition"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg></button>
                                        <button class="hover:text-white transition"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg></button>
                                    </div>
                                </div>

                                <!-- Calendar Mockup -->
                                <div class="mb-6">
                                    <div class="text-sm font-medium text-white mb-3">Select Date</div>
                                    <div class="bg-[#1a1a1a] rounded-xl p-4 border border-gray-800">
                                        <div class="flex justify-between items-center mb-4 text-[13px] text-white">
                                            <button><svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg></button>
                                            <span class="font-medium text-gray-300">Mei 2024</span>
                                            <button><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></button>
                                        </div>
                                        <div class="grid grid-cols-7 gap-2 text-center text-[10px] mb-3 text-gray-500 font-medium tracking-wide">
                                            <div>SEN</div>
                                            <div>SEL</div>
                                            <div>RAB</div>
                                            <div>KAM</div>
                                            <div>JUM</div>
                                            <div>SAB</div>
                                            <div>MIN</div>
                                        </div>
                                        <div class="grid grid-cols-7 gap-y-4 gap-x-2 text-center text-xs font-medium text-gray-400">
                                            <!-- Empty slots for formatting -->
                                            <div></div><div></div><div>1</div><div>2</div><div>3</div><div>4</div><div>5</div>
                                            <div>6</div><div>7</div><div>8</div><div>9</div><div>10</div><div>11</div><div>12</div>
                                            <div>13</div><div>14</div><div class="text-[#4caf50]">15</div><div>16</div><div>17</div><div class="text-[#cba358]">18</div><div>19</div>
                                            <div>20</div><div class="bg-[#4caf50] text-black rounded-full w-6 h-6 mx-auto flex items-center justify-center">21</div><div>22</div><div>23</div><div>24</div><div class="text-[#cba358]">25</div><div>26</div>
                                            <div>27</div><div>28</div><div>29</div><div>30</div><div>31</div><div></div><div></div>
                                        </div>
                                        <div class="flex justify-center gap-4 mt-5 text-[9px] text-gray-500">
                                            <div class="flex items-center gap-1.5"><div class="w-1.5 h-1.5 rounded-full bg-[#4caf50]"></div> Available</div>
                                            <div class="flex items-center gap-1.5"><div class="w-1.5 h-1.5 rounded-full bg-[#cba358]"></div> Limited</div>
                                            <div class="flex items-center gap-1.5"><div class="w-1.5 h-1.5 rounded-full bg-red-500"></div> Booked</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Packages -->
                                <div class="mb-6">
                                    <div class="text-sm font-medium text-white mb-1">Packages</div>
                                    <div class="text-[11px] text-gray-500 mb-3">Pilih paket yang sesuai kebutuhanmu</div>
                                    
                                    <div class="space-y-3">
                                        <!-- Basic -->
                                        <div class="border border-gray-800 bg-[#1a1a1a] rounded-xl p-4 cursor-pointer hover:border-gray-600 transition group">
                                            <div class="flex justify-between items-start mb-2">
                                                <div class="text-sm font-bold text-gray-300 group-hover:text-white transition">BASIC</div>
                                                <div class="text-[13px] text-white font-medium">Rp1.800.000</div>
                                            </div>
                                            <ul class="text-[11px] text-gray-400 space-y-1.5 ml-3.5 list-disc marker:text-gray-600">
                                                <li>6 Stories Coverage</li>
                                                <li>1 Recap Reel (60 detik)</li>
                                                <li>Raw Files</li>
                                                <li>Exclude Transport</li>
                                            </ul>
                                        </div>

                                        <!-- Standard (Active/Popular) -->
                                        <div class="border border-[#cba358] bg-[#1a1a1a] rounded-xl p-4 cursor-pointer relative shadow-[0_0_15px_rgba(203,163,88,0.1)]">
                                            <div class="absolute right-4 top-1/2 -translate-y-1/2 mt-1 bg-[#cba358]/20 text-[#cba358] text-[9px] font-bold px-2 py-0.5 rounded border border-[#cba358]/50">Popular</div>
                                            <div class="flex justify-between items-start mb-2 pr-16">
                                                <div class="text-sm font-bold text-[#cba358]">STANDARD</div>
                                                <div class="text-[13px] text-[#cba358] font-medium absolute right-4 top-4">Rp2.500.000</div>
                                            </div>
                                            <ul class="text-[11px] text-gray-300 space-y-1.5 ml-3.5 list-disc marker:text-[#cba358]/50">
                                                <li>Same Day Edit</li>
                                                <li>1 TikTok Trend Video</li>
                                                <li>1 Recap Reel (90 detik)</li>
                                                <li>10 Stories Coverage</li>
                                            </ul>
                                        </div>

                                        <!-- Premium -->
                                        <div class="border border-gray-800 bg-[#1a1a1a] rounded-xl p-4 cursor-pointer hover:border-gray-600 transition group">
                                            <div class="flex justify-between items-start mb-2">
                                                <div class="text-sm font-bold text-gray-300 group-hover:text-white transition">PREMIUM</div>
                                                <div class="text-[13px] text-white font-medium">Rp3.700.000</div>
                                            </div>
                                            <ul class="text-[11px] text-gray-400 space-y-1.5 ml-3.5 list-disc marker:text-gray-600">
                                                <li>2 Creators</li>
                                                <li>Instant Edit</li>
                                                <li>Unlimited Moments</li>
                                                <li>Fast Delivery</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <button class="w-full bg-[#cba358] hover:bg-[#b58d44] text-black font-bold py-3 rounded-xl transition mb-3 flex justify-center items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    Book Now
                                </button>
                                
                                <button class="w-full bg-transparent border border-gray-600 hover:border-white text-white font-medium py-3 rounded-xl transition flex justify-center items-center gap-2 mb-6">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                                    Chat with Creator
                                </button>

                                <!-- Trust Badges -->
                                <div class="space-y-3 pt-5 border-t border-gray-800">
                                    <div class="flex items-center gap-2.5 text-[11px] text-gray-500">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                                        Payment is secured with Escrow Protection
                                    </div>
                                    <div class="flex items-center gap-2.5 text-[11px] text-gray-500">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                        Free Reschedule H-3
                                    </div>
                                    <div class="flex items-center gap-2.5 text-[11px] text-gray-500">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        100% Money Back Guarantee
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </FrontendLayout>
</template>
