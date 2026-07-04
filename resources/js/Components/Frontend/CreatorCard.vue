<template>
    <div class="bg-[#131313] rounded-xl border border-gray-800/80 flex hover:border-[#cba358]/50 transition cursor-pointer group min-w-[300px] md:min-w-[340px] h-[140px]">
        <!-- Image Section (Left) -->
        <div class="relative w-[40%] h-full overflow-hidden rounded-l-xl bg-gray-900 flex-shrink-0">
            <img v-if="imageUrl" :src="imageUrl" :alt="name" class="w-full h-full object-cover group-hover:scale-105 transition duration-500 opacity-90">
            
            <!-- Play Icon Overlay -->
            <div class="absolute inset-0 z-20 flex items-center justify-center">
                <div class="bg-black/40 backdrop-blur-sm rounded-full p-1.5 border border-white/20 group-hover:scale-110 transition">
                    <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"></path></svg>
                </div>
            </div>
        </div>

        <!-- Content Section (Right) -->
        <div class="p-4 flex-1 flex flex-col justify-between">
            <div>
                <h3 class="text-sm font-bold text-gray-100 truncate mb-1">{{ name }}</h3>
                <div class="flex items-center gap-1 mb-1">
                    <svg class="w-3 h-3 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    <p class="text-[11px] text-gray-400 truncate">{{ location }}</p>
                </div>
                
                <div class="flex items-center gap-1 mb-2">
                    <svg class="w-3.5 h-3.5 text-[#cba358]" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <span class="text-[11px] font-bold text-[#cba358]">{{ rating }}</span>
                    <span class="text-[11px] text-gray-500">({{ reviews }})</span>
                </div>

                <!-- Badges -->
                <div class="flex gap-1.5">
                    <div v-if="verified" class="px-1.5 py-0.5 rounded border border-[#cba358]/30 flex items-center gap-1 text-[#cba358] text-[9px] font-semibold bg-[#cba358]/10">
                        <svg class="w-2.5 h-2.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        Verified
                    </div>
                    <div v-if="sameDay" class="px-1.5 py-0.5 rounded border border-gray-700 flex items-center text-gray-400 text-[9px] font-semibold bg-[#1a1a1a]">
                        Same Day
                    </div>
                </div>
            </div>

            <div class="mt-1">
                <p class="text-[11px] text-gray-400 mb-0 leading-none">From <span class="text-xs font-bold text-gray-200 ml-0.5">Rp{{ price.toLocaleString('id-ID') }}</span></p>
            </div>
        </div>
    </div>
</template>

<script setup>
defineProps({
    name: String,
    location: String,
    rating: Number,
    reviews: Number,
    price: Number,
    verified: Boolean,
    sameDay: Boolean,
    imageUrl: String,
});
</script>
