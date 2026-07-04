<template>
    <section class="relative md:pt-40 md:pb-16 overflow-hidden min-h-[95vh] md:min-h-0 flex flex-col justify-end md:justify-start">
        <!-- Background Image & Gradient overlay -->
        <div class="absolute inset-0 z-0 flex md:block flex-col">
            <!-- Mobile: Image at top half, Desktop: Full width background -->
            <div class="absolute top-0 left-0 right-0 h-[60vh] md:inset-0 md:w-full overflow-hidden">
                <img src="/images/hero/hero-bg.jpg" alt="Wedding Couple" class="object-cover w-full h-full object-center opacity-80 md:opacity-100">
                <!-- Mobile gradient (bottom to top) -->
                <div class="absolute inset-0 bg-gradient-to-t from-[#0d0d0d] via-[#0d0d0d]/80 to-transparent md:hidden"></div>
                <!-- Desktop gradient (dark on left, clear on right) -->
                <div class="hidden md:block absolute inset-0 bg-gradient-to-r from-[#0d0d0d] via-[#0d0d0d]/80 to-transparent w-full md:w-[80%]"></div>
                <!-- Desktop gradient (top to bottom for header) -->
                <div class="hidden md:block absolute inset-x-0 top-0 h-40 bg-gradient-to-b from-[#0d0d0d]/90 to-transparent"></div>
            </div>
            <!-- Mobile solid black at bottom -->
            <div class="absolute bottom-0 left-0 right-0 h-[40vh] bg-[#0d0d0d] md:hidden"></div>
        </div>

        <div class="max-w-[1600px] mx-auto px-4 sm:px-8 lg:px-16 relative z-10 w-full h-full flex flex-col pb-8 md:pb-0">
            
            <!-- DESKTOP HERO CONTENT -->
            <div class="hidden md:block w-full max-w-4xl mt-6">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#1a1a1a]/60 border border-[#cba358]/30 text-[9px] text-[#cba358] mb-6 tracking-widest uppercase backdrop-blur-sm">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 2a.75.75 0 01.673.418l2.128 4.312 4.757.691a.75.75 0 01.415 1.279l-3.443 3.356.813 4.738a.75.75 0 01-1.088.791L10 15.347l-4.255 2.238a.75.75 0 01-1.088-.79l.813-4.738-3.443-3.356a.75.75 0 01.415-1.28l4.757-.69 2.128-4.312A.75.75 0 0110 2z" clip-rule="evenodd"></path></svg>
                    LUXURY WEDDING CONTENT CREATOR ECOSYSTEM
                </div>
                <h1 class="text-5xl lg:text-7xl font-serif text-white mb-6 leading-[1.1]">
                    Find Wedding <br/>
                    <span class="text-[#cba358]">Content Creator</span>
                </h1>
                <p class="text-gray-300 text-base mb-10 max-w-xl">
                    Book the best Wedding Content Creator for your special day.<br>Same day content. Vertical. Social media ready.
                </p>

                <!-- Desktop Search Bar -->
                <div class="bg-gradient-to-r from-[#f0ead6] to-[#e6dcc0] text-black rounded-xl p-1.5 flex items-center shadow-2xl relative w-[110%] lg:w-[120%] mb-6">
                    <!-- Location -->
                    <div class="flex-1 px-4 py-2 border-r border-[#cba358]/20 flex items-center gap-3">
                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        <div>
                            <label class="block text-[8px] text-gray-500 font-bold uppercase tracking-wider mb-0.5">Where is your event?</label>
                            <input type="text" placeholder="City or location" class="w-full bg-transparent border-none p-0 focus:ring-0 text-sm font-semibold text-black placeholder-gray-500">
                        </div>
                    </div>
                    <!-- Date -->
                    <div class="flex-1 px-4 py-2 border-r border-[#cba358]/20 flex items-center gap-3">
                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        <div>
                            <label class="block text-[8px] text-gray-500 font-bold uppercase tracking-wider mb-0.5">Event Date</label>
                            <input type="text" placeholder="Select date" class="w-full bg-transparent border-none p-0 focus:ring-0 text-sm font-semibold text-black placeholder-gray-500">
                        </div>
                    </div>
                    <!-- Type -->
                    <div class="flex-1 px-4 py-2 border-r border-[#cba358]/20 flex items-center gap-3">
                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path></svg>
                        <div>
                            <label class="block text-[8px] text-gray-500 font-bold uppercase tracking-wider mb-0.5">Event Type</label>
                            <input type="text" placeholder="All Types" class="w-full bg-transparent border-none p-0 focus:ring-0 text-sm font-semibold text-black placeholder-gray-500">
                        </div>
                    </div>
                    <!-- Budget -->
                    <div class="flex-1 px-4 py-2 flex items-center gap-3">
                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        <div>
                            <label class="block text-[8px] text-gray-500 font-bold uppercase tracking-wider mb-0.5">Budget Range</label>
                            <input type="text" placeholder="All Budget" class="w-full bg-transparent border-none p-0 focus:ring-0 text-sm font-semibold text-black placeholder-gray-500">
                        </div>
                    </div>
                    <!-- Button -->
                    <div class="px-2">
                        <button class="bg-[#1a1a1a] hover:bg-black text-[#cba358] font-bold py-3.5 px-8 rounded-lg transition flex items-center gap-2 whitespace-nowrap text-sm border border-[#cba358]/50">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            Find WCC
                        </button>
                    </div>
                </div>

                <!-- Popular Searches -->
                <div class="flex items-center gap-3 mb-6">
                    <span class="text-[10px] font-semibold text-gray-400 tracking-wide">Popular Searches:</span>
                    <div class="flex gap-2">
                        <span class="bg-[#1a1a1a] border border-gray-800 text-[10px] px-3 py-1 rounded-md text-gray-300 hover:bg-[#cba358] hover:text-black cursor-pointer transition">Jakarta</span>
                        <span class="bg-[#1a1a1a] border border-gray-800 text-[10px] px-3 py-1 rounded-md text-gray-300 hover:bg-[#cba358] hover:text-black cursor-pointer transition">Bandung</span>
                        <span class="bg-[#1a1a1a] border border-gray-800 text-[10px] px-3 py-1 rounded-md text-gray-300 hover:bg-[#cba358] hover:text-black cursor-pointer transition">Bali</span>
                        <span class="bg-[#1a1a1a] border border-gray-800 text-[10px] px-3 py-1 rounded-md text-gray-300 hover:bg-[#cba358] hover:text-black cursor-pointer transition">Surabaya</span>
                        <span class="bg-[#1a1a1a] border border-gray-800 text-[10px] px-3 py-1 rounded-md text-gray-300 hover:bg-[#cba358] hover:text-black cursor-pointer transition">Yogyakarta</span>
                    </div>
                </div>

                <!-- Desktop Category Bar -->
                <div class="bg-[#1a1a1a]/90 backdrop-blur-md rounded-2xl p-1.5 border border-gray-800 flex items-center justify-between w-[120%] lg:w-[130%] shadow-lg">
                    <div class="flex flex-1">
                        <a href="#" class="flex-1 flex items-center justify-center gap-3 px-4 py-3 border-r border-gray-800 hover:bg-gray-800/50 rounded-xl transition">
                            <svg class="w-6 h-6 text-[#cba358]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                            <div>
                                <h3 class="text-white font-bold text-xs">Wedding</h3>
                                <p class="text-[#cba358] text-[9px]">Most Popular</p>
                            </div>
                        </a>
                        <a href="#" class="flex-1 flex items-center justify-center gap-3 px-4 py-3 border-r border-gray-800 hover:bg-gray-800/50 rounded-xl transition">
                            <svg class="w-6 h-6 text-[#cba358]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4"></path></svg>
                            <div>
                                <h3 class="text-white font-bold text-xs">Engagement</h3>
                                <p class="text-gray-400 text-[9px]">Capture Love</p>
                            </div>
                        </a>
                        <a href="#" class="flex-1 flex items-center justify-center gap-3 px-4 py-3 border-r border-gray-800 hover:bg-gray-800/50 rounded-xl transition">
                            <svg class="w-6 h-6 text-[#cba358]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z"></path></svg>
                            <div>
                                <h3 class="text-white font-bold text-xs">Birthday</h3>
                                <p class="text-gray-400 text-[9px]">Special Moments</p>
                            </div>
                        </a>
                        <a href="#" class="flex-1 flex items-center justify-center gap-3 px-4 py-3 hover:bg-gray-800/50 rounded-xl transition">
                            <svg class="w-6 h-6 text-[#cba358]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            <div>
                                <h3 class="text-white font-bold text-xs">Corporate</h3>
                                <p class="text-gray-400 text-[9px]">Professional Event</p>
                            </div>
                        </a>
                    </div>
                    <a href="#" class="text-[10px] text-gray-300 flex items-center gap-1 pr-6 pl-4 hover:text-[#cba358] whitespace-nowrap">
                        See All Categories <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </div>

                <!-- Desktop Floating Card (Same Day Edit) -->
                <div class="absolute right-0 lg:right-4 xl:right-12 top-[40%] bg-[#1a1a1a]/90 backdrop-blur-md p-3 pr-6 rounded-xl border border-gray-800 shadow-2xl flex items-center gap-3 animate-bounce hidden md:flex">
                    <div class="bg-[#cba358]/20 p-2 rounded-lg text-[#cba358]">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-white text-xs">Same Day Edit</h4>
                        <p class="text-[9px] text-gray-400">Delivered in 24 Hours</p>
                    </div>
                </div>
            </div>

            <!-- MOBILE HERO CONTENT -->
            <div class="md:hidden flex flex-col h-full mt-auto relative z-10">
                <h1 class="text-[32px] font-serif text-white mb-5 leading-[1.15]">
                    Find Wedding <br/>
                    Content Creator
                </h1>
                
                <div class="space-y-2 mb-6">
                    <div class="flex items-center gap-2 text-xs text-gray-200">
                        <svg class="w-4 h-4 text-[#cba358]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                        Book Your WCC Instantly
                    </div>
                    <div class="flex items-center gap-2 text-xs text-gray-200">
                        <svg class="w-4 h-4 text-[#cba358]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        Same Day Wedding Reels
                    </div>
                    <div class="flex items-center gap-2 text-xs text-gray-200">
                        <svg class="w-4 h-4 text-[#cba358]" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        Trusted & Verified Creator
                    </div>
                </div>

                <!-- Mobile Search Box -->
                <div class="bg-white rounded-xl p-3.5 flex items-center text-gray-800 gap-3 mb-8 shadow-lg w-full">
                    <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    <input type="text" placeholder="Cari Wedding Content Creator..." class="bg-transparent border-none p-0 w-full focus:ring-0 text-sm placeholder-gray-500 text-black font-medium">
                    <div class="border-l border-gray-300 pl-3">
                        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
                    </div>
                </div>

                <!-- Mobile Category Grid -->
                <div class="grid grid-cols-5 gap-2 mb-6">
                    <div class="flex flex-col items-center gap-1.5 cursor-pointer">
                        <div class="w-12 h-12 rounded-full border border-[#cba358] flex items-center justify-center text-[#cba358] hover:bg-[#cba358] hover:text-black transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                        </div>
                        <span class="text-[9px] text-white font-medium">Wedding</span>
                    </div>
                    <div class="flex flex-col items-center gap-1.5 cursor-pointer">
                        <div class="w-12 h-12 rounded-full border border-gray-700 flex items-center justify-center text-gray-400 hover:border-[#cba358] hover:text-[#cba358] transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4"></path></svg>
                        </div>
                        <span class="text-[9px] text-white font-medium">Engage</span>
                    </div>
                    <div class="flex flex-col items-center gap-1.5 cursor-pointer">
                        <div class="w-12 h-12 rounded-full border border-gray-700 flex items-center justify-center text-gray-400 hover:border-[#cba358] hover:text-[#cba358] transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z"></path></svg>
                        </div>
                        <span class="text-[9px] text-white font-medium">Birthday</span>
                    </div>
                    <div class="flex flex-col items-center gap-1.5 cursor-pointer">
                        <div class="w-12 h-12 rounded-full border border-gray-700 flex items-center justify-center text-gray-400 hover:border-[#cba358] hover:text-[#cba358] transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <span class="text-[9px] text-white font-medium">Corporate</span>
                    </div>
                    <div class="flex flex-col items-center gap-1.5 cursor-pointer">
                        <div class="w-12 h-12 rounded-full border border-gray-700 flex items-center justify-center text-gray-400 hover:border-[#cba358] hover:text-[#cba358] transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                        </div>
                        <span class="text-[9px] text-white font-medium">Event</span>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
</template>

<script setup>
</script>
