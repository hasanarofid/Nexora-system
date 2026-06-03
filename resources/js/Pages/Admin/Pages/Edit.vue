<script setup>
import { ref } from 'vue';
import { Head, useForm, Link } from '@inertiajs/vue3';
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { Save, ChevronLeft, Layout, Edit, Eye, Plus, Trash2 } from '@lucide/vue';

const props = defineProps({
  page: {
    type: Object,
    required: true
  }
});

const pageForm = useForm({
  title: props.page.title,
  slug: props.page.slug,
  meta_description: props.page.meta_description || '',
  is_active: props.page.is_active
});

const activeSectionId = ref(null);
const sectionForm = useForm({
  title: '',
  content: {},
  is_active: true
});

const selectSection = (section) => {
  activeSectionId.value = section.id;
  sectionForm.title = section.title || '';
  sectionForm.is_active = section.is_active;
  // Deep clone section content
  sectionForm.content = JSON.parse(JSON.stringify(section.content || {}));
};

const updatePage = () => {
  pageForm.put(route('admin.pages.update', props.page.id));
};

const updateSection = (sectionId) => {
  sectionForm.put(route('admin.pages.sections.update', [props.page.id, sectionId]), {
    preserveScroll: true,
    onSuccess: () => {
      // Keep section open
    }
  });
};

// Helpers for features & testimonials list additions/deletions
const addFeatureItem = () => {
  if (!sectionForm.content.items) sectionForm.content.items = [];
  sectionForm.content.items.push({ title: 'Fitur Baru', description: 'Deskripsi fitur...' });
};

const removeFeatureItem = (index) => {
  sectionForm.content.items.splice(index, 1);
};

const addTestimonialItem = () => {
  if (!sectionForm.content.items) sectionForm.content.items = [];
  sectionForm.content.items.push({ name: 'Nama Klien', role: 'Jabatan', comment: 'Komentar testimoni...' });
};

const removeTestimonialItem = (index) => {
  sectionForm.content.items.splice(index, 1);
};
</script>

<template>
  <Head :title="`Edit Halaman: ${page.title}`" />

  <AdminLayout>
    <div class="space-y-8 max-w-6xl">
      <!-- Header -->
      <div class="flex items-center gap-4">
        <Link :href="route('admin.pages.index')" class="p-2 bg-slate-950 border border-slate-800 hover:bg-slate-900 rounded-xl text-slate-400 hover:text-slate-200 transition-colors">
          <ChevronLeft class="w-5 h-5" />
        </Link>
        <div>
          <div class="flex items-center gap-2">
            <h2 class="text-3xl font-extrabold tracking-tight text-white">{{ page.title }}</h2>
            <span class="px-2.5 py-0.5 rounded-full text-xs font-semibold" :class="page.is_active ? 'bg-emerald-500/10 text-emerald-450 border border-emerald-500/20' : 'bg-slate-800 text-slate-500 border border-slate-700'">
              {{ page.is_active ? 'Aktif' : 'Non-aktif' }}
            </span>
          </div>
          <p class="text-sm text-slate-400 mt-1">Kelola detail SEO halaman dan susunan section content.</p>
        </div>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- SEO Details Panel -->
        <div class="lg:col-span-1 space-y-6">
          <form @submit.prevent="updatePage" class="bg-slate-950 border border-slate-800 rounded-2xl p-6 shadow-xl shadow-slate-950/20 space-y-4">
            <h3 class="text-base font-bold text-white pb-3 border-b border-slate-800">Detail Halaman (SEO)</h3>
            
            <div class="space-y-1">
              <label for="title" class="text-xs font-bold text-slate-450 uppercase tracking-wider">Judul Halaman</label>
              <input 
                id="title"
                v-model="pageForm.title"
                type="text" 
                required
                class="w-full bg-slate-900 border border-slate-850 rounded-xl px-4 py-2.5 text-sm text-slate-100 placeholder-slate-650 focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 transition-all duration-250"
              />
            </div>

            <div class="space-y-1">
              <label for="slug" class="text-xs font-bold text-slate-450 uppercase tracking-wider">Slug (URL)</label>
              <input 
                id="slug"
                v-model="pageForm.slug"
                type="text" 
                required
                class="w-full bg-slate-900 border border-slate-850 rounded-xl px-4 py-2.5 text-sm text-slate-100 placeholder-slate-650 focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 transition-all duration-250"
              />
            </div>

            <div class="space-y-1">
              <label for="meta_description" class="text-xs font-bold text-slate-450 uppercase tracking-wider">Meta Description SEO</label>
              <textarea 
                id="meta_description"
                v-model="pageForm.meta_description"
                rows="4"
                class="w-full bg-slate-900 border border-slate-850 rounded-xl px-4 py-2.5 text-sm text-slate-100 placeholder-slate-650 focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 transition-all duration-250 resize-none"
              ></textarea>
            </div>

            <div class="flex items-center gap-2 py-2">
              <input 
                id="page_active"
                v-model="pageForm.is_active"
                type="checkbox" 
                class="w-4 h-4 rounded text-indigo-600 focus:ring-indigo-600 bg-slate-900 border-slate-800"
              />
              <label for="page_active" class="text-sm font-semibold text-slate-300">Aktifkan Halaman Ini</label>
            </div>

            <button 
              type="submit" 
              :disabled="pageForm.processing"
              class="w-full inline-flex items-center justify-center px-4 py-2.5 bg-indigo-600 hover:bg-indigo-700 disabled:opacity-50 text-sm font-semibold text-white rounded-xl shadow-lg shadow-indigo-600/20 transition-all cursor-pointer"
            >
              <Save class="w-4 h-4 mr-1.5" />
              Simpan Metadata
            </button>
          </form>

          <!-- List of Sections -->
          <div class="bg-slate-950 border border-slate-800 rounded-2xl p-6 shadow-xl shadow-slate-950/20 space-y-4">
            <h3 class="text-base font-bold text-white pb-3 border-b border-slate-800">Daftar Bagian Halaman</h3>
            <div class="space-y-2">
              <button 
                v-for="section in page.sections" 
                :key="section.id"
                @click="selectSection(section)"
                :class="[
                  activeSectionId === section.id 
                    ? 'bg-indigo-600/10 border-indigo-500/50 text-indigo-400' 
                    : 'bg-slate-900 border-slate-850 text-slate-350 hover:bg-slate-850',
                  'w-full text-left px-4 py-3 rounded-xl border flex items-center justify-between transition-all'
                ]"
              >
                <div class="flex items-center gap-2">
                  <Layout class="w-4 h-4" />
                  <span class="text-sm font-semibold">{{ section.title }}</span>
                </div>
                <span class="text-xxs px-2 py-0.5 bg-slate-850 text-slate-500 rounded border border-slate-800 uppercase tracking-wider font-bold">
                  {{ section.key }}
                </span>
              </button>
              <div v-if="page.sections.length === 0" class="text-center py-6 text-slate-500 text-sm">
                Belum ada section di halaman ini.
              </div>
            </div>
          </div>
        </div>

        <!-- Section Content Editor Panel -->
        <div class="lg:col-span-2">
          <div v-if="activeSectionId" class="bg-slate-950 border border-slate-800 rounded-2xl overflow-hidden shadow-xl shadow-slate-950/20">
            <!-- Header Editor -->
            <div class="px-6 py-4 bg-slate-900/40 border-b border-slate-800 flex items-center justify-between">
              <div>
                <h3 class="text-base font-bold text-white">Edit Konten Bagian</h3>
                <p class="text-xs text-slate-500 mt-0.5">Sesuaikan parameter konten untuk section di bawah.</p>
              </div>
              <span class="px-2.5 py-0.5 bg-emerald-500/10 text-emerald-450 border border-emerald-500/20 rounded-full text-xs font-semibold" v-if="sectionForm.is_active">
                Aktif
              </span>
            </div>

            <!-- Content Form Editor -->
            <form @submit.prevent="updateSection(activeSectionId)" class="p-6 md:p-8 space-y-6">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="space-y-1">
                  <label class="text-xs font-bold text-slate-450 uppercase tracking-wider">Judul Section (Internal)</label>
                  <input 
                    v-model="sectionForm.title"
                    type="text" 
                    required
                    class="w-full bg-slate-900 border border-slate-800 rounded-xl px-4 py-2.5 text-sm text-slate-100 focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 transition-all duration-250"
                  />
                </div>
                <div class="flex items-center gap-2 md:pt-6">
                  <input 
                    id="section_active"
                    v-model="sectionForm.is_active"
                    type="checkbox" 
                    class="w-4 h-4 rounded text-indigo-605 bg-slate-900 border-slate-800 focus:ring-indigo-650 focus:ring-offset-slate-950"
                  />
                  <label for="section_active" class="text-sm font-semibold text-slate-350">Tampilkan Bagian Ini di Web</label>
                </div>
              </div>

              <!-- Dynamic form fields depending on the key -->
              <div class="border-t border-slate-800 pt-6 space-y-4">
                <h4 class="text-sm font-bold text-slate-200">Konten Layout (JSON Fields)</h4>

                <!-- Hero Section Editor -->
                <div v-if="page.sections.find(s => s.id === activeSectionId)?.key === 'hero'" class="space-y-4">
                  <div class="space-y-1">
                    <label class="text-xs font-bold text-slate-500">Headline Utama</label>
                    <input 
                      v-model="sectionForm.content.headline"
                      type="text" 
                      class="w-full bg-slate-900 border border-slate-850 rounded-xl px-4 py-2.5 text-sm text-slate-100 focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 transition-all duration-250"
                    />
                  </div>
                  <div class="space-y-1">
                    <label class="text-xs font-bold text-slate-500">Sub-headline</label>
                    <textarea 
                      v-model="sectionForm.content.subheadline"
                      rows="3"
                      class="w-full bg-slate-900 border border-slate-850 rounded-xl px-4 py-2.5 text-sm text-slate-100 focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 transition-all duration-250 resize-none"
                    ></textarea>
                  </div>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="space-y-1">
                      <label class="text-xs font-bold text-slate-500">Teks Tombol (CTA)</label>
                      <input 
                        v-model="sectionForm.content.cta_text"
                        type="text" 
                        class="w-full bg-slate-900 border border-slate-850 rounded-xl px-4 py-2.5 text-sm text-slate-100 focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 transition-all duration-250"
                      />
                    </div>
                    <div class="space-y-1">
                      <label class="text-xs font-bold text-slate-500">Link Tombol (URL CTA)</label>
                      <input 
                        v-model="sectionForm.content.cta_url"
                        type="text" 
                        class="w-full bg-slate-900 border border-slate-850 rounded-xl px-4 py-2.5 text-sm text-slate-100 focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 transition-all duration-250"
                      />
                    </div>
                  </div>
                </div>

                <!-- Features Section Editor -->
                <div v-else-if="page.sections.find(s => s.id === activeSectionId)?.key === 'features'" class="space-y-6">
                  <div class="space-y-1">
                    <label class="text-xs font-bold text-slate-500">Judul Blok Fitur</label>
                    <input 
                      v-model="sectionForm.content.title"
                      type="text" 
                      class="w-full bg-slate-900 border border-slate-850 rounded-xl px-4 py-2.5 text-sm text-slate-100 focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 transition-all duration-250"
                    />
                  </div>

                  <div class="space-y-3">
                    <div class="flex items-center justify-between">
                      <label class="text-xs font-bold text-slate-450 uppercase tracking-wider">Item Fitur</label>
                      <button 
                        type="button" 
                        @click="addFeatureItem"
                        class="inline-flex items-center text-xs text-indigo-400 hover:text-indigo-300 font-semibold"
                      >
                        <Plus class="w-4 h-4 mr-1" /> Tambah Fitur
                      </button>
                    </div>

                    <div 
                      v-for="(item, idx) in sectionForm.content.items" 
                      :key="idx"
                      class="p-4 bg-slate-900 rounded-xl border border-slate-850/80 space-y-3 relative group"
                    >
                      <button 
                        type="button" 
                        @click="removeFeatureItem(idx)"
                        class="absolute top-2 right-2 p-1.5 text-slate-550 hover:text-rose-450 hover:bg-rose-500/10 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity"
                        title="Hapus item"
                      >
                        <Trash2 class="w-4.5 h-4.5" />
                      </button>
                      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="space-y-1">
                          <label class="text-xxs font-bold text-slate-555 block mb-1">Nama Fitur</label>
                          <input 
                            v-model="item.title"
                            type="text" 
                            class="w-full bg-slate-950 border border-slate-800 rounded-xl px-3 py-2 text-xs text-slate-100 focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 transition-all duration-250"
                          />
                        </div>
                        <div class="space-y-1">
                          <label class="text-xxs font-bold text-slate-555 block mb-1">Keterangan/Deskripsi</label>
                          <input 
                            v-model="item.description"
                            type="text" 
                            class="w-full bg-slate-950 border border-slate-800 rounded-xl px-3 py-2 text-xs text-slate-100 focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 transition-all duration-250"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Testimonials Section Editor -->
                <div v-else-if="page.sections.find(s => s.id === activeSectionId)?.key === 'testimonials'" class="space-y-6">
                  <div class="space-y-1">
                    <label class="text-xs font-bold text-slate-500">Judul Blok Testimoni</label>
                    <input 
                      v-model="sectionForm.content.title"
                      type="text" 
                      class="w-full bg-slate-900 border border-slate-850 rounded-xl px-4 py-2.5 text-sm text-slate-100 focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 transition-all duration-250"
                    />
                  </div>

                  <div class="space-y-3">
                    <div class="flex items-center justify-between">
                      <label class="text-xs font-bold text-slate-450 uppercase tracking-wider">Item Testimoni</label>
                      <button 
                        type="button" 
                        @click="addTestimonialItem"
                        class="inline-flex items-center text-xs text-indigo-400 hover:text-indigo-300 font-semibold"
                      >
                        <Plus class="w-4 h-4 mr-1" /> Tambah Testimoni
                      </button>
                    </div>

                    <div 
                      v-for="(item, idx) in sectionForm.content.items" 
                      :key="idx"
                      class="p-4 bg-slate-900 rounded-xl border border-slate-855/80 space-y-3 relative group"
                    >
                      <button 
                        type="button" 
                        @click="removeTestimonialItem(idx)"
                        class="absolute top-2 right-2 p-1.5 text-slate-550 hover:text-rose-450 hover:bg-rose-500/10 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity"
                        title="Hapus item"
                      >
                        <Trash2 class="w-4.5 h-4.5" />
                      </button>
                      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="space-y-1">
                          <label class="text-xxs font-bold text-slate-555 block mb-1">Nama Pengirim</label>
                          <input 
                            v-model="item.name"
                            type="text" 
                            class="w-full bg-slate-950 border border-slate-800 rounded-xl px-3 py-2 text-xs text-slate-100 focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 transition-all duration-250"
                          />
                        </div>
                        <div class="space-y-1">
                          <label class="text-xxs font-bold text-slate-555 block mb-1">Jabatan / Perusahaan</label>
                          <input 
                            v-model="item.role"
                            type="text" 
                            class="w-full bg-slate-950 border border-slate-800 rounded-xl px-3 py-2 text-xs text-slate-100 focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 transition-all duration-250"
                          />
                        </div>
                      </div>
                      <div class="space-y-1">
                        <label class="text-xxs font-bold text-slate-555 block mb-1">Komentar / Ulasan</label>
                        <textarea 
                          v-model="item.comment"
                          rows="2"
                          class="w-full bg-slate-950 border border-slate-800 rounded-xl px-3 py-2 text-xs text-slate-100 focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 transition-all duration-250 resize-none"
                        ></textarea>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Generic JSON Editor for other keys -->
                <div v-else class="space-y-2">
                  <label class="text-xs font-bold text-slate-500">Objek Data Konten (Generic JSON)</label>
                  <p class="text-xs text-slate-500">Masukkan parameter data dalam format key-value JSON valid.</p>
                  <textarea 
                    :value="JSON.stringify(sectionForm.content, null, 2)"
                    @input="e => {
                      try {
                        sectionForm.content = JSON.parse(e.target.value);
                      } catch (err) {
                        // ignore syntax errors during typing
                      }
                    }"
                    rows="8"
                    class="w-full bg-slate-900 border border-slate-855 rounded-xl px-4 py-2.5 text-xs text-slate-100 font-mono focus:outline-none focus:border-indigo-500"
                  ></textarea>
                </div>
              </div>

              <!-- Action Footer -->
              <div class="pt-6 border-t border-slate-800 flex justify-end">
                <button 
                  type="submit" 
                  :disabled="sectionForm.processing"
                  class="inline-flex items-center px-4 py-2.5 bg-indigo-600 hover:bg-indigo-700 disabled:opacity-50 text-sm font-semibold text-white rounded-xl shadow-lg shadow-indigo-600/20 transition-all cursor-pointer"
                >
                  <Save class="w-4.5 h-4.5 mr-1.5" />
                  Simpan Bagian
                </button>
              </div>
            </form>
          </div>

          <!-- Empty Editor State -->
          <div v-else class="h-full bg-slate-955 border border-slate-850 border-dashed rounded-2xl flex flex-col items-center justify-center p-12 text-center text-slate-550">
            <Layout class="w-12 h-12 mb-3 text-slate-700" />
            <h3 class="text-sm font-bold text-slate-400">Pilih Bagian Halaman</h3>
            <p class="text-xs text-slate-550 mt-1 max-w-xs">Silakan pilih salah satu bagian di menu sebelah kiri untuk mengedit isinya secara visual.</p>
          </div>
        </div>
      </div>
    </div>
  </AdminLayout>
</template>
