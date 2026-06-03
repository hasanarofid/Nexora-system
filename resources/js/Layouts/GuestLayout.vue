<script setup>
import { Link } from '@inertiajs/vue3';
import { Layers } from '@lucide/vue';
</script>

<template>
  <div class="min-h-screen bg-slate-950 text-slate-100 font-sans antialiased relative overflow-hidden flex flex-col items-center justify-center p-6 selection:bg-indigo-500 selection:text-white">
    <!-- Background Glow Blobs -->
    <div class="absolute top-[-20%] left-[-10%] w-[500px] h-[500px] rounded-full bg-indigo-900/10 blur-[100px] pointer-events-none"></div>
    <div class="absolute bottom-[-10%] right-[-10%] w-[500px] h-[500px] rounded-full bg-indigo-900/10 blur-[100px] pointer-events-none"></div>

    <!-- Card Container -->
    <div class="w-full sm:max-w-md bg-slate-950/80 border border-slate-800/80 backdrop-blur-md shadow-2xl rounded-3xl p-8 relative z-10 space-y-6">
      <!-- Branding -->
      <div class="flex flex-col items-center gap-3">
        <Link href="/" class="p-3 bg-indigo-600 rounded-2xl shadow-lg shadow-indigo-650/30 hover:scale-105 transition-all">
          <Layers class="w-7 h-7 text-white" />
        </Link>
        <div class="text-center">
          <h2 class="text-lg font-bold text-white tracking-tight uppercase">CMS Boilerplate</h2>
          <p class="text-xxs text-indigo-400 font-bold uppercase tracking-widest mt-1">Premium Access Panel</p>
        </div>
      </div>

      <!-- Form Content Slot -->
      <div class="space-y-4">
        <slot />
      </div>
    </div>
  </div>
</template>
