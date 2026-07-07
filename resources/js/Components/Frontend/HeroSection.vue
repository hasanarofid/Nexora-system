<template>
    <section class="relative md:pt-40 md:pb-16 overflow-hidden min-h-[95vh] md:min-h-0 flex flex-col justify-end md:justify-start">
        <!-- Background Image & Gradient overlay -->
        <div class="absolute inset-0 z-0 flex md:block flex-col">
            <!-- Mobile: Image at top half, Desktop: Full width background -->
            <div class="absolute top-0 left-0 right-0 h-[60vh] md:inset-0 md:w-full overflow-hidden">
                <!-- CHANGED TO hero-bg-new.png -->
                <img src="/images/hero/hero-bg-new.png" alt="Wedding Couple" class="object-cover w-full h-full object-center opacity-80 md:opacity-100">
                <!-- Mobile gradient (bottom to top) -->
                <div class="absolute inset-0 bg-gradient-to-t from-[#0d0d0d] via-[#0d0d0d]/80 to-transparent md:hidden"></div>
                <!-- Desktop gradient (dark on left, clear on right) -->
                <div class="hidden md:block absolute inset-0 bg-gradient-to-r from-[#0d0d0d] via-[#0d0d0d]/90 to-transparent w-full md:w-[70%]"></div>
                <!-- Desktop gradient (top to bottom for header) -->
                <div class="hidden md:block absolute inset-x-0 top-0 h-40 bg-gradient-to-b from-[#0d0d0d]/90 to-transparent"></div>
            </div>
            <!-- Mobile solid black at bottom -->
            <div class="absolute bottom-0 left-0 right-0 h-[40vh] bg-[#0d0d0d] md:hidden"></div>
        </div>

        <div class="max-w-[1600px] mx-auto px-4 sm:px-8 lg:px-16 relative z-10 w-full h-full flex flex-col pb-8 md:pb-0">
            
            <!-- DESKTOP HERO CONTENT -->
            <div class="hidden md:flex w-full mt-6 justify-between items-center gap-12 lg:gap-8">
                <!-- Left Content -->
                <div class="w-full lg:w-[60%] xl:w-[55%]">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#1a1a1a]/60 border border-[#cba358]/30 text-[9px] text-[#cba358] mb-6 tracking-widest uppercase backdrop-blur-sm">
                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 2a.75.75 0 01.673.418l2.128 4.312 4.757.691a.75.75 0 01.415 1.279l-3.443 3.356.813 4.738a.75.75 0 01-1.088.791L10 15.347l-4.255 2.238a.75.75 0 01-1.088-.79l.813-4.738-3.443-3.356a.75.75 0 01.415-1.28l4.757-.69 2.128-4.312A.75.75 0 0110 2z" clip-rule="evenodd"></path></svg>
                        LUXURY WEDDING CONTENT CREATOR ECOSYSTEM
                    </div>
                    <h1 class="text-5xl lg:text-7xl xl:text-[80px] font-serif text-white mb-6 leading-[1.1]">
                        Find Wedding <br/>
                        <span class="text-[#cba358]">Content Creator</span>
                    </h1>
                    <p class="text-gray-300 text-base mb-10 max-w-xl">
                        Book the best Wedding Content Creator for your special day.<br>Same day content. Vertical. Social media ready.
                    </p>

                    <!-- Desktop Search Bar -->
                    <div class="bg-gradient-to-r from-[#f0ead6] to-[#e6dcc0] text-black rounded-xl p-1.5 flex items-center shadow-2xl relative w-full mb-6">
                        <!-- Location -->
                        <div class="flex-1 px-4 py-2 border-r border-[#cba358]/20 flex items-center gap-3">
                            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <div>
                                <label class="block text-[8px] text-gray-500 font-bold uppercase tracking-wider mb-0.5">Where is your event?</label>
                                <input type="text" placeholder="City or location" class="w-full bg-transparent border-none p-0 focus:ring-0 text-sm font-semibold text-black placeholder-gray-500">
                            </div>
                        </div>
                        <!-- Date -->
                        <div class="flex-1 px-4 py-2 border-r border-[#cba358]/20 flex items-center gap-3 hidden xl:flex">
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
                        <div class="flex-1 px-4 py-2 flex items-center gap-3 hidden lg:flex">
                            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            <div>
                                <label class="block text-[8px] text-gray-500 font-bold uppercase tracking-wider mb-0.5">Budget Range</label>
                                <input type="text" placeholder="All Budget" class="w-full bg-transparent border-none p-0 focus:ring-0 text-sm font-semibold text-black placeholder-gray-500">
                            </div>
                        </div>
                        <!-- Button -->
                        <div class="px-2">
                            <button class="bg-[#1a1a1a] hover:bg-black text-[#cba358] font-bold py-3 px-6 lg:py-3.5 lg:px-8 rounded-lg transition flex items-center gap-2 whitespace-nowrap text-sm border border-[#cba358]/50 shadow-lg shadow-[#cba358]/10">
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
                    <div class="bg-[#1a1a1a]/90 backdrop-blur-md rounded-2xl p-1.5 border border-gray-800 flex items-center justify-between w-full shadow-lg">
                        <div class="flex flex-1">
                            <a href="#" class="flex-1 flex items-center justify-center gap-3 px-3 py-3 border-r border-gray-800 hover:bg-gray-800/50 rounded-xl transition">
                                <svg class="w-5 h-5 text-[#cba358]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                                <div>
                                    <h3 class="text-white font-bold text-[11px] lg:text-xs">Wedding</h3>
                                    <p class="text-[#cba358] text-[8px] lg:text-[9px]">Most Popular</p>
                                </div>
                            </a>
                            <a href="#" class="flex-1 flex items-center justify-center gap-3 px-3 py-3 border-r border-gray-800 hover:bg-gray-800/50 rounded-xl transition">
                                <svg class="w-5 h-5 text-[#cba358]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4"></path></svg>
                                <div>
                                    <h3 class="text-white font-bold text-[11px] lg:text-xs">Engagement</h3>
                                    <p class="text-gray-400 text-[8px] lg:text-[9px]">Capture Love</p>
                                </div>
                            </a>
                            <a href="#" class="flex-1 flex items-center justify-center gap-3 px-3 py-3 border-r border-gray-800 hover:bg-gray-800/50 rounded-xl transition">
                                <svg class="w-5 h-5 text-[#cba358]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z"></path></svg>
                                <div>
                                    <h3 class="text-white font-bold text-[11px] lg:text-xs">Birthday</h3>
                                    <p class="text-gray-400 text-[8px] lg:text-[9px]">Special Moments</p>
                                </div>
                            </a>
                            <a href="#" class="flex-1 flex items-center justify-center gap-3 px-3 py-3 hover:bg-gray-800/50 rounded-xl transition">
                                <svg class="w-5 h-5 text-[#cba358]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                <div>
                                    <h3 class="text-white font-bold text-[11px] lg:text-xs">Corporate</h3>
                                    <p class="text-gray-400 text-[8px] lg:text-[9px]">Professional Event</p>
                                </div>
                            </a>
                        </div>
                        <a href="#" class="text-[9px] lg:text-[10px] text-gray-300 flex items-center gap-1 pr-4 pl-3 lg:pr-6 lg:pl-4 hover:text-[#cba358] whitespace-nowrap">
                            See All Categories <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Right Content (Phone Mockup) -->
                <div class="w-full lg:w-[40%] xl:w-[45%] flex justify-end relative mt-8 lg:mt-0 pb-12 xl:pb-0">
                    <!-- Phone Frame -->
                    <div class="relative w-[300px] lg:w-[320px] xl:w-[340px] h-[600px] lg:h-[640px] xl:h-[680px] bg-black rounded-[45px] xl:rounded-[50px] border-[10px] xl:border-[12px] border-[#1a1a1a] shadow-2xl overflow-hidden shadow-black/80 flex-shrink-0 z-10 transform lg:rotate-[-2deg] transition-transform duration-700 hover:rotate-0">
                        <!-- Screen edge inner shadow -->
                        <div class="absolute inset-0 border-[2px] border-black/50 rounded-[35px] xl:rounded-[40px] z-20 pointer-events-none"></div>
                        
                        <!-- Content -->
                        <img src="/images/hero/phone-video.png" class="w-full h-full object-cover opacity-90 scale-105" alt="Vertical Wedding Video" />
                        
                        <!-- Gradients for UI readability -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-transparent to-black/40 z-10"></div>
                        
                        <!-- Notch -->
                        <div class="absolute top-0 inset-x-0 h-7 flex justify-center z-20">
                            <div class="w-36 h-7 bg-[#1a1a1a] rounded-b-3xl relative">
                                <!-- Camera lens -->
                                <div class="absolute right-8 top-1/2 -translate-y-1/2 w-2 h-2 rounded-full bg-blue-900/30 border border-blue-800/50 shadow-inner"></div>
                            </div>
                        </div>
                        
                        <!-- Status Bar -->
                        <div class="absolute top-2 px-6 w-full flex justify-between items-center text-[11px] text-white font-medium z-20">
                            <span>9:41</span>
                            <div class="flex items-center gap-1.5">
                                <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 21L15.6 16.2C14.6 15.4 13.4 15 12 15C10.6 15 9.4 15.4 8.4 16.2L12 21ZM12 3C7.9 3 4.2 4.7 1.4 7.5L3.5 9.6C5.8 7.3 8.8 6 12 6C15.2 6 18.2 7.3 20.5 9.6L22.6 7.5C19.8 4.7 16.1 3 12 3Z"/></svg>
                                <svg class="w-4 h-3.5" viewBox="0 0 24 24" fill="currentColor"><path d="M15.67 4H14V2H10V4H8.33C7.6 4 7 4.6 7 5.33V20.67C7 21.4 7.6 22 8.33 22H15.67C16.4 22 17 21.4 17 20.67V5.33C17 4.6 16.4 4 15.67 4Z"/></svg>
                            </div>
                        </div>

                        <!-- Video Title "The moment that lasts forever" -->
                        <div class="absolute top-[25%] left-0 right-0 text-center z-20">
                            <h2 class="font-serif italic text-white/90 text-2xl lg:text-3xl drop-shadow-lg font-light tracking-wide">The moment<br>that lasts forever</h2>
                        </div>

                        <!-- TikTok UI - Right Sidebar -->
                        <div class="absolute right-3 xl:right-4 bottom-24 flex flex-col items-center gap-5 z-20">
                            <!-- Profile -->
                            <div class="relative w-10 h-10 xl:w-11 xl:h-11 rounded-full border-2 border-white overflow-visible bg-gray-800">
                                <img src="/images/hero/hero-bg-new.png" class="w-full h-full object-cover rounded-full" />
                                <div class="absolute -bottom-2 left-1/2 -translate-x-1/2 bg-red-500 rounded-full w-4 h-4 xl:w-5 xl:h-5 flex items-center justify-center text-white font-bold text-[10px] xl:text-[12px] shadow-sm">+</div>
                            </div>
                            <!-- Like -->
                            <div class="flex flex-col items-center gap-1 text-white hover:text-red-500 cursor-pointer transition">
                                <svg class="w-7 h-7 xl:w-8 xl:h-8 drop-shadow-md" fill="currentColor" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                                <span class="text-[10px] xl:text-[11px] font-bold drop-shadow-md">2.4K</span>
                            </div>
                            <!-- Comment -->
                            <div class="flex flex-col items-center gap-1 text-white cursor-pointer hover:text-gray-300 transition">
                                <svg class="w-7 h-7 xl:w-8 xl:h-8 drop-shadow-md" fill="currentColor" viewBox="0 0 24 24"><path d="M21.99 4c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4-.01-18z"/></svg>
                                <span class="text-[10px] xl:text-[11px] font-bold drop-shadow-md">128</span>
                            </div>
                            <!-- Share -->
                            <div class="flex flex-col items-center gap-1 text-white cursor-pointer hover:text-gray-300 transition">
                                <svg class="w-7 h-7 xl:w-8 xl:h-8 drop-shadow-md" fill="currentColor" viewBox="0 0 24 24"><path d="M3 15v4c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-4M16 8l-4-4-4 4M12 4v12" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/></svg>
                                <span class="text-[10px] xl:text-[11px] font-bold drop-shadow-md">Share</span>
                            </div>
                        </div>
                        
                        <!-- TikTok UI - Bottom Info -->
                        <div class="absolute left-3 xl:left-4 bottom-6 right-16 z-20">
                            <h3 class="font-bold text-sm xl:text-base text-white mb-1 drop-shadow-md">@nexoramoments_creator</h3>
                            <p class="text-xs xl:text-sm text-gray-200 mb-3 drop-shadow-md font-medium">Wedding Day | Same Day Edit</p>
                            <div class="flex items-center gap-2 text-xs text-white drop-shadow-md">
                                <svg class="w-4 h-4 animate-[spin_4s_linear_infinite]" fill="currentColor" viewBox="0 0 24 24"><path d="M12 3v10.55c-.59-.34-1.27-.55-2-.55-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4V7h4V3h-6z"/></svg>
                                <span>Original Audio</span>
                            </div>
                        </div>
                        
                        <!-- Bottom Home indicator -->
                        <div class="absolute bottom-2 left-1/2 -translate-x-1/2 w-[40%] h-1.5 bg-white rounded-full opacity-80 z-20"></div>

                        <!-- Hardware Buttons -->
                        <div class="absolute -left-3 top-24 w-1.5 h-8 bg-gray-800 rounded-l-md z-0"></div> <!-- Mute -->
                        <div class="absolute -left-3 top-36 w-1.5 h-12 bg-gray-800 rounded-l-md z-0"></div> <!-- Vol Up -->
                        <div class="absolute -left-3 top-52 w-1.5 h-12 bg-gray-800 rounded-l-md z-0"></div> <!-- Vol Down -->
                        <div class="absolute -right-3 top-40 w-1.5 h-16 bg-gray-800 rounded-r-md z-0"></div> <!-- Power -->
                    </div>

                    <!-- Floating Card "Same Day Edit" -->
                    <div class="absolute -left-16 lg:-left-28 top-[45%] bg-[#1a1a1a]/95 backdrop-blur-md p-3 pr-6 lg:p-4 lg:pr-8 rounded-2xl border border-[#cba358]/30 shadow-2xl shadow-black/80 flex items-center gap-4 animate-[bounce_3s_infinite] z-30">
                        <div class="bg-gradient-to-br from-[#cba358] to-[#9a7b3b] p-2.5 lg:p-3 rounded-xl text-black shadow-inner shadow-white/20">
                            <svg class="w-5 h-5 lg:w-6 lg:h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-[#cba358] text-sm lg:text-base mb-0.5 tracking-wide">Same Day Edit</h4>
                            <p class="text-[10px] lg:text-xs text-gray-300">Delivered in 24 Hours</p>
                        </div>
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
