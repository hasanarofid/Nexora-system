<template>
    <section class="max-w-[1600px] mx-auto px-4 sm:px-8 lg:px-16 pb-4 md:pb-6">
        <!-- Desktop Features Banner -->
        <div class="hidden lg:grid grid-cols-12 gap-4">
            
            <!-- Left Box (Trust + 4 Features) -->
            <div class="col-span-12 xl:col-span-7 bg-[#131313] border border-gray-800/80 rounded-2xl p-6 flex flex-row items-center justify-between">
                <!-- Trusted by block -->
                <div class="flex flex-col min-w-[160px]">
                    <h4 class="text-white text-sm font-bold mb-1">Trusted by 10.000+</h4>
                    <p class="text-gray-400 text-[11px] mb-3">Clients & Creators</p>
                    <div class="flex -space-x-2">
                        <img class="w-8 h-8 rounded-full border-2 border-[#131313] object-cover" src="/images/avatars/avatar-1.jpg" alt="">
                        <img class="w-8 h-8 rounded-full border-2 border-[#131313] object-cover" src="/images/avatars/avatar-2.jpg" alt="">
                        <img class="w-8 h-8 rounded-full border-2 border-[#131313] object-cover" src="/images/avatars/avatar-3.jpg" alt="">
                        <img class="w-8 h-8 rounded-full border-2 border-[#131313] object-cover" src="/images/avatars/avatar-4.jpg" alt="">
                        <div class="w-8 h-8 rounded-full border-2 border-[#131313] bg-gray-800 flex items-center justify-center text-[8px] text-white font-bold">+10K</div>
                    </div>
                </div>

                <!-- Divider -->
                <div class="h-16 w-px bg-gray-800/80 mx-2"></div>

                <!-- 4 Features -->
                <div class="flex gap-4 w-full justify-around flex-1 px-2">
                    <div class="flex flex-col items-center justify-center text-center max-w-[110px]">
                        <svg class="w-6 h-6 text-[#cba358] mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <h4 class="text-white text-xs font-bold leading-tight mb-1.5">Verified Creators</h4>
                        <p class="text-gray-500 text-[9px] leading-tight">Quality & identity verified</p>
                    </div>
                    <div class="flex flex-col items-center justify-center text-center max-w-[110px]">
                        <svg class="w-6 h-6 text-[#cba358] mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                        <h4 class="text-white text-xs font-bold leading-tight mb-1.5">Escrow Protection</h4>
                        <p class="text-gray-500 text-[9px] leading-tight">Your payment is 100% safe</p>
                    </div>
                    <div class="flex flex-col items-center justify-center text-center max-w-[110px]">
                        <svg class="w-6 h-6 text-[#cba358] mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                        <h4 class="text-white text-xs font-bold leading-tight mb-1.5">Secure Communication</h4>
                        <p class="text-gray-500 text-[9px] leading-tight">Chat inside the platform</p>
                    </div>
                    <div class="flex flex-col items-center justify-center text-center max-w-[110px]">
                        <svg class="w-6 h-6 text-[#cba358] mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                        <h4 class="text-white text-xs font-bold leading-tight mb-1.5">Professional & Reliable</h4>
                        <p class="text-gray-500 text-[9px] leading-tight">Top standard experience</p>
                    </div>
                </div>
            </div>

            <!-- Middle Box (Escrow) -->
            <div class="col-span-6 xl:col-span-3 bg-gradient-to-br from-[#1c1a17] to-[#13110d] border border-[#cba358]/20 rounded-2xl p-6 relative overflow-hidden flex items-center shadow-[inset_0_0_30px_rgba(203,163,88,0.03)] group">
                <!-- Gold Glow -->
                <div class="absolute right-0 top-1/2 -translate-y-1/2 w-40 h-40 bg-[#cba358]/10 rounded-full blur-3xl group-hover:bg-[#cba358]/20 transition duration-500"></div>
                <div class="relative z-10 w-2/3 pr-4">
                    <h4 class="text-white text-[15px] font-bold mb-3 leading-tight">Escrow Protection System</h4>
                    <p class="text-gray-400 text-[10px] mb-2 font-medium">Your money is safe with us.</p>
                    <p class="text-gray-500 text-[9px] leading-relaxed">Payment is held securely and released only when you're happy.</p>
                </div>
                <!-- Shield Icon large -->
                <div class="absolute right-4 top-1/2 -translate-y-1/2 opacity-90 group-hover:scale-105 transition duration-500">
                    <svg class="w-20 h-20 text-[#cba358]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
            </div>

            <!-- Right Box (Same Day) -->
            <div class="col-span-6 xl:col-span-2 bg-[#131313] border border-gray-800/80 rounded-2xl p-6 relative overflow-hidden flex items-center">
                <div class="relative z-10 w-[60%]">
                    <h4 class="text-white text-[15px] font-bold mb-3 leading-tight">Same Day Delivery</h4>
                    <p class="text-gray-400 text-[10px] leading-relaxed">Get your content in 24 hours after event.</p>
                </div>
                <!-- Phone / Check mockup overlay -->
                <div class="absolute right-[-15px] top-2 bottom-2 w-[100px] bg-black rounded-[20px] border-[5px] border-gray-800 overflow-hidden shadow-2xl transform -rotate-6">
                    <img src="/images/hero/hero-bg.jpg" class="w-full h-full object-cover opacity-80">
                    <!-- Fake UI Header -->
                    <div class="absolute top-0 left-0 right-0 h-4 bg-gradient-to-b from-black/80 to-transparent"></div>
                </div>
                
                <!-- Floating Check Badge -->
                <div class="absolute right-[65px] bottom-6 z-20 w-8 h-8 rounded-full bg-[#131313] border border-[#cba358] flex items-center justify-center shadow-[0_0_15px_rgba(203,163,88,0.3)]">
                    <svg class="w-4 h-4 text-[#cba358]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                </div>
            </div>

        </div>

        <!-- Mobile Features Grid -->
        <div class="lg:hidden">
            <h2 class="text-sm font-bold text-white mb-4">Kenapa Harus Nexora Moments?</h2>
            <div class="grid grid-cols-2 gap-3">
                <div class="bg-[#1a1a1a] border border-gray-800 p-4 rounded-xl flex flex-col items-center text-center">
                    <svg class="w-8 h-8 text-[#cba358] mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <h4 class="text-xs font-bold text-white mb-1">Creator Terverifikasi</h4>
                    <p class="text-[9px] text-gray-400">100% terpercaya</p>
                </div>
                <div class="bg-[#1a1a1a] border border-gray-800 p-4 rounded-xl flex flex-col items-center text-center">
                    <svg class="w-8 h-8 text-[#cba358] mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                    <h4 class="text-xs font-bold text-white mb-1">Kualitas Premium</h4>
                    <p class="text-[9px] text-gray-400">Konten vertical berkualitas tinggi</p>
                </div>
                <div class="bg-[#1a1a1a] border border-gray-800 p-4 rounded-xl flex flex-col items-center text-center">
                    <svg class="w-8 h-8 text-[#cba358] mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    <h4 class="text-xs font-bold text-white mb-1">Edit Cepat Same Day</h4>
                    <p class="text-[9px] text-gray-400">Siap upload di hari yang sama</p>
                </div>
                <div class="bg-[#1a1a1a] border border-gray-800 p-4 rounded-xl flex flex-col items-center text-center">
                    <svg class="w-8 h-8 text-[#cba358] mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                    <h4 class="text-xs font-bold text-white mb-1">Aman & Terjamin</h4>
                    <p class="text-[9px] text-gray-400">Transaksi aman dengan escrow</p>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
</script>
