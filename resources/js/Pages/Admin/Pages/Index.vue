<script setup>
import { ref } from 'vue';
import { Head, Link, useForm, router } from '@inertiajs/vue3';
import AdminLayout from '@/Layouts/AdminLayout.vue';
import DataTable from '@/Components/DataTable.vue';
import { Plus, X, Save } from '@lucide/vue';

const props = defineProps({
  pages: {
    type: Array,
    required: true
  }
});

const isModalOpen = ref(false);

const headers = [
  { text: 'Judul Halaman', value: 'title' },
  { text: 'Slug (URL)', value: 'slug' },
  { text: 'Jumlah Bagian (Sections)', value: 'sections_count' },
  { text: 'Status', value: 'is_active', type: 'badge' }
];

const form = useForm({
  title: '',
  slug: '',
  meta_description: ''
});

const createPage = () => {
  form.post(route('admin.pages.store'), {
    onSuccess: () => {
      isModalOpen.value = false;
      form.reset();
    }
  });
};

const handleEdit = (item) => {
  router.get(route('admin.pages.edit', item.id));
};

const handleDelete = (item) => {
  if (confirm(`Apakah Anda yakin ingin menghapus halaman "${item.title}"?`)) {
    router.delete(route('admin.pages.destroy', item.id));
  }
};
</script>

<template>
  <Head title="Kelola Halaman" />

  <AdminLayout>
    <div class="space-y-8">
      <!-- Title Page -->
      <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
          <h2 class="text-3xl font-extrabold tracking-tight text-white">Pages & Sections</h2>
          <p class="text-sm text-slate-400 mt-1">Kelola halaman dinamis dan susunan konten visual landing page Anda.</p>
        </div>
        <div>
          <button 
            @click="isModalOpen = true"
            class="inline-flex items-center px-4 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-sm font-semibold text-white rounded-xl shadow-lg shadow-indigo-600/20 transition-all cursor-pointer"
          >
            <Plus class="w-4.5 h-4.5 mr-1.5" />
            Halaman Baru
          </button>
        </div>
      </div>

      <!-- Data Table -->
      <DataTable 
        :items="pages" 
        :headers="headers" 
        search-placeholder="Cari halaman..."
        search-key="title"
        @edit="handleEdit"
        @delete="handleDelete"
      >
        <template #cell(sections_count)="{ item }">
          <span class="text-slate-450 font-medium">
            {{ item.sections_count }} bagian
          </span>
        </template>
      </DataTable>

      <!-- Custom Page Modal -->
      <div v-if="isModalOpen" class="fixed inset-0 z-50 flex items-center justify-center p-4">
        <div @click="isModalOpen = false" class="fixed inset-0 bg-slate-950/80"></div>
        <div class="relative bg-slate-900 border border-slate-800 rounded-2xl max-w-lg w-full overflow-hidden shadow-2xl z-10">
          <div class="flex items-center justify-between px-6 py-4 border-b border-slate-800">
            <h3 class="text-base font-bold text-white">Buat Halaman Baru</h3>
            <button @click="isModalOpen = false" class="p-1.5 text-slate-400 hover:text-white rounded-lg hover:bg-slate-800">
              <X class="w-5 h-5" />
            </button>
          </div>
          <form @submit.prevent="createPage" class="p-6 space-y-4">
            <div class="space-y-1">
              <label for="title" class="text-xs font-bold text-slate-400 uppercase tracking-wider">Judul Halaman</label>
              <input 
                id="title"
                v-model="form.title"
                type="text" 
                required
                class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-2.5 text-sm text-slate-100 placeholder-slate-650 focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 transition-all duration-250"
                placeholder="Contoh: Tentang Kami"
                @input="form.slug = form.title.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)/g, '')"
              />
              <div v-if="form.errors.title" class="text-xs text-rose-500 font-semibold">{{ form.errors.title }}</div>
            </div>

            <div class="space-y-1">
              <label for="slug" class="text-xs font-bold text-slate-400 uppercase tracking-wider">Slug (URL)</label>
              <input 
                id="slug"
                v-model="form.slug"
                type="text" 
                required
                class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-2.5 text-sm text-slate-100 placeholder-slate-650 focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 transition-all duration-250"
                placeholder="tentang-kami"
              />
              <div v-if="form.errors.slug" class="text-xs text-rose-500 font-semibold">{{ form.errors.slug }}</div>
            </div>

            <div class="space-y-1">
              <label for="meta_description" class="text-xs font-bold text-slate-400 uppercase tracking-wider">Deskripsi SEO (Meta Description)</label>
              <textarea 
                id="meta_description"
                v-model="form.meta_description"
                rows="3"
                class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-2.5 text-sm text-slate-100 placeholder-slate-650 focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 transition-all duration-250 resize-none"
                placeholder="Tulis deskripsi meta SEO..."
              ></textarea>
              <div v-if="form.errors.meta_description" class="text-xs text-rose-500 font-semibold">{{ form.errors.meta_description }}</div>
            </div>

            <div class="pt-4 border-t border-slate-800 flex justify-end gap-3">
              <button 
                type="button" 
                @click="isModalOpen = false" 
                class="px-4 py-2 bg-slate-800 hover:bg-slate-750 text-sm font-semibold text-slate-300 rounded-xl transition-colors cursor-pointer"
              >
                Batal
              </button>
              <button 
                type="submit" 
                :disabled="form.processing"
                class="inline-flex items-center px-4 py-2 bg-indigo-600 hover:bg-indigo-700 disabled:opacity-50 text-sm font-semibold text-white rounded-xl shadow-lg shadow-indigo-600/20 transition-all cursor-pointer"
              >
                <Save class="w-4 h-4 mr-1.5" />
                Simpan Halaman
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </AdminLayout>
</template>
