<template>
    <section class="max-w-[1600px] mx-auto px-4 sm:px-8 lg:px-16 pt-4 md:pt-8 pb-4 md:pb-6">
        <div class="flex justify-between items-end mb-8">
            <div>
                <h2 class="text-xl md:text-2xl font-serif text-white flex items-center gap-2">
                    Top Wedding Content Creators
                    <svg class="w-4 h-4 text-[#cba358]" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
                </h2>
            </div>
            <a href="#" class="text-sm font-semibold text-[#cba358] hover:text-[#b08d48] transition flex items-center gap-1 hidden md:flex">
                View All Creators
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>

        <div class="relative group">
            <!-- Left Arrow -->
            <button @click="scroll('left')" class="absolute left-0 top-1/2 -translate-y-1/2 -ml-5 z-10 w-10 h-10 rounded-full bg-[#131313] border border-gray-700 flex items-center justify-center text-gray-400 hover:text-white hidden lg:flex shadow-xl opacity-0 group-hover:opacity-100 transition duration-300">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            </button>

            <!-- Horizontal Scroll Container -->
            <div ref="scrollContainer" class="flex overflow-x-auto gap-4 sm:gap-6 pb-6 snap-x scroll-smooth" style="scrollbar-width: none; -ms-overflow-style: none;">
                <!-- Hide scrollbar hack for webkit in a style block or global css, here we use inline for standard -->
                <CreatorCard
                    v-for="(creator, i) in creators" :key="i"
                    :name="creator.name"
                    :location="creator.location"
                    :rating="creator.rating"
                    :reviews="creator.reviews"
                    :price="creator.price"
                    :verified="creator.verified"
                    :sameDay="creator.sameDay"
                    :imageUrl="creator.imageUrl"
                    class="snap-start"
                />
            </div>

            <!-- Right Arrow -->
            <button @click="scroll('right')" class="absolute right-0 top-1/2 -translate-y-1/2 -mr-5 z-10 w-10 h-10 rounded-full bg-[#131313] border border-gray-700 flex items-center justify-center text-gray-400 hover:text-white hidden lg:flex shadow-xl opacity-0 group-hover:opacity-100 transition duration-300">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </button>
        </div>

        <div class="mt-4 md:hidden">
             <button class="w-full bg-transparent border border-[#cba358]/50 text-[#cba358] text-sm font-semibold py-3 rounded-lg hover:bg-[#cba358] hover:text-black transition">
                View All Creators
             </button>
        </div>
    </section>
</template>

<script setup>
import { ref } from 'vue';
import CreatorCard from './CreatorCard.vue';

const scrollContainer = ref(null);

const scroll = (direction) => {
    if (scrollContainer.value) {
        const scrollAmount = 400; // Adjust based on card width
        if (direction === 'left') {
            scrollContainer.value.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
        } else {
            scrollContainer.value.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        }
    }
};

// Mock data based on the design
const creators = ref([
    {
        name: 'Alindra Creator',
        location: 'Jakarta',
        rating: 4.9,
        reviews: 128,
        price: 1500000,
        verified: true,
        sameDay: true,
        imageUrl: '/images/creators/creator-1.jpg',
    },
    {
        name: 'Moments by Ravi',
        location: 'Bandung',
        rating: 4.8,
        reviews: 96,
        price: 1200000,
        verified: true,
        sameDay: true,
        imageUrl: '/images/creators/creator-2.jpg',
    },
    {
        name: 'Citra Wedding Content',
        location: 'Bali',
        rating: 4.9,
        reviews: 142,
        price: 1750000,
        verified: true,
        sameDay: true,
        imageUrl: '/images/creators/creator-3.jpg',
    },
    {
        name: 'Reeliza Studio',
        location: 'Surabaya',
        rating: 4.7,
        reviews: 84,
        price: 1100000,
        verified: true,
        sameDay: false,
        imageUrl: '/images/creators/creator-4.jpg',
    },
    {
        name: 'Vierra Stories',
        location: 'Jakarta',
        rating: 4.9,
        reviews: 128,
        price: 1600000,
        verified: true,
        sameDay: true,
        imageUrl: '/images/creators/creator-5.jpg',
    }
]);
</script>
