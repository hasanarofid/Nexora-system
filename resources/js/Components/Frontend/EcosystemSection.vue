<template>
    <section class="max-w-[1600px] mx-auto px-4 sm:px-8 lg:px-16 pb-4 md:pb-6">
        <div class="bg-gradient-to-r from-[#0d0d0d] via-[#151515] to-[#0a0a0a] border border-gray-800 rounded-[32px] p-8 lg:p-12 flex flex-col lg:flex-row items-center gap-8 lg:gap-12 relative overflow-hidden shadow-2xl">
            <!-- Subtle Gold Glow Background -->
            <div class="absolute left-1/4 top-0 w-1/2 h-full bg-[#cba358]/5 blur-[100px] pointer-events-none"></div>
            
            <!-- 1. Text Area -->
            <div class="lg:w-[35%] relative z-10 flex flex-col items-start pr-4">
                <span class="text-[#cba358] text-[9px] font-bold tracking-[0.2em] uppercase mb-4 flex items-center gap-1.5">
                    Built for the new creator era
                    <svg class="w-3 h-3" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.4 7.6H22l-6 4.4 2.3 7.6-6.3-4.6-6.3 4.6 2.3-7.6-6-4.4h7.6z"/></svg>
                </span>
                <h2 class="text-3xl lg:text-4xl font-serif text-white leading-tight mb-4">
                    The Future of Wedding Content <br/>
                    <span class="text-[#cba358] italic">Starts Here</span>
                </h2>
                <p class="text-gray-400 text-xs leading-relaxed mb-1">
                    Nexora Moments is more than a marketplace.
                </p>
                <p class="text-gray-400 text-xs leading-relaxed">
                    We are building Indonesia's largest Wedding Content Creator Ecosystem.
                </p>
            </div>

            <!-- 2. Stats Area -->
            <div class="lg:w-[30%] relative z-10 grid grid-cols-4 gap-2">
                <div class="flex flex-col items-center justify-center text-center">
                    <svg class="w-7 h-7 text-[#cba358] mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    <h4 class="text-white text-[17px] font-serif mb-1">10.000+</h4>
                    <p class="text-gray-500 text-[8px]">Happy Clients</p>
                </div>
                <div class="flex flex-col items-center justify-center text-center relative">
                    <!-- Custom SVG for person with sparkles -->
                    <svg class="w-7 h-7 text-[#cba358] mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 4l1 1m0 0l1 1m-1-1l1-1m-1 1l-1 1M5 4l1 1m0 0l1 1m-1-1l1-1m-1 1l-1 1"></path>
                    </svg>
                    <h4 class="text-white text-[17px] font-serif mb-1">2.000+</h4>
                    <p class="text-gray-500 text-[8px]">Verified Creators</p>
                </div>
                <div class="flex flex-col items-center justify-center text-center">
                    <svg class="w-7 h-7 text-[#cba358] mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    <h4 class="text-white text-[17px] font-serif mb-1">50K+</h4>
                    <p class="text-gray-500 text-[8px]">Events Covered</p>
                </div>
                <div class="flex flex-col items-center justify-center text-center">
                    <svg class="w-7 h-7 text-[#cba358] mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    <h4 class="text-white text-[17px] font-serif mb-1">98%</h4>
                    <p class="text-gray-500 text-[8px]">Client Satisfaction</p>
                </div>
            </div>

            <!-- 3. Cards Area (Become Creator & Find Creator) -->
            <div class="lg:w-[35%] relative z-10 flex flex-col sm:flex-row gap-4 w-full">
                <!-- Become a Creator -->
                <div class="flex-1 bg-[#161616] border border-[#2a2a2a] rounded-xl p-5 flex flex-col justify-between hover:border-[#cba358]/50 transition duration-300 min-h-[140px]">
                    <div>
                        <h4 class="text-[#cba358] font-serif text-sm mb-1.5">Become a Creator</h4>
                        <p class="text-gray-400 text-[10px] leading-relaxed mb-4">Join our ecosystem and grow your creator business.</p>
                    </div>
                    <button class="w-full bg-[#cba358] hover:bg-[#b58f4a] text-black font-bold text-[10px] py-2 rounded-lg flex items-center justify-center gap-1.5 transition">
                        Join as WCC
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </button>
                </div>

                <!-- Find Your Creator -->
                <div class="flex-[1.4] bg-[#eae5d9] border border-[#d4cfc3] rounded-xl p-5 relative overflow-hidden flex flex-col justify-between group min-h-[140px]">
                    <div class="relative z-10 w-[60%] flex flex-col h-full justify-between">
                        <div>
                            <h4 class="text-black font-serif text-sm mb-1.5">Find Your Creator</h4>
                            <p class="text-gray-700 text-[9px] leading-relaxed mb-4">Book the perfect creator for your special day.</p>
                        </div>
                        <button class="w-full bg-[#b58f4a] text-white font-bold text-[10px] py-2 rounded-lg flex items-center justify-center gap-1.5 hover:bg-[#9a783b] transition shadow-md">
                            Find Creator
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </button>
                    </div>

                    <!-- Phone image mock -->
                    <div class="absolute right-[-15px] top-4 bottom-[-20px] w-[80px] bg-black rounded-[14px] border-[4px] border-[#111] overflow-hidden shadow-2xl group-hover:-translate-y-1 transition duration-500">
                        <img src="/images/hero/hero-bg.jpg" class="w-full h-full object-cover">
                        <!-- Fake notch -->
                        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-8 h-2.5 bg-[#111] rounded-b-md"></div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</template>

<script setup>
</script>
