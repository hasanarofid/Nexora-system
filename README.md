# Laravel Vue CMS Boilerplate

CMS Boilerplate modular berkinerja tinggi yang dibangun menggunakan **Laravel 11**, **Vue 3 (Inertia.js)**, **Tailwind CSS**, dan **Spatie Permission**. Didesain khusus sebagai dasar proyek siap pakai (ready-to-deploy) untuk mempercepat pembuatan website perusahaan, portofolio, landing page, atau portal berita.

---

## 👨‍💻 Owner & Creator
Template CMS Boilerplate ini dimiliki dan dikembangkan oleh:
- **Username**: [@hasanarofid.site](https://hasanarofid.site)
- **Website Resmi**: [https://hasanarofid.site](https://hasanarofid.site)

---

## ⚡ Fitur Utama
- **Role & Permission Management**: Integrasi Spatie Permission (Default Role: admin, editor, client).
- **Dynamic Content & Sections**: Konten visual halaman (Hero, Features, Testimonials) dikontrol melalui skema JSON fleksibel secara langsung di UI.
- **Global Settings**: Konfigurasi nama situs, no WA, link Play Store, dan upload Logo dinamis yang dilengkapi auto-cache.
- **Post & Category Management**: Tulis artikel lengkap dengan generator slug otomatis, cover image upload, dan status publikasi (draft/published).
- **Premium UI Theme**: Panel admin bergaya gelap modern (dark mode native) menggunakan Tailwind CSS dan `@lucide/vue` icons.
- **Vite & Vue 3 Component**: Komponen reusable premium seperti `DataTable`, visual editor, dan `AdminLayout`.

---

## 🚀 Panduan Memulai Lokal

### 1. Migrasi & Seed Database
```bash
php artisan migrate:fresh --seed
```

### 2. Hubungkan Storage Link
```bash
php artisan storage:link
```

### 3. Kompilasi & Jalankan Dev Server
```bash
# Terminal 1: Compile Asset Frontend
npm run dev

# Terminal 2: Serve Backend Laravel
php artisan serve
```

### 🔑 Kredensial Pengguna Seeded
- **Admin**: `admin@cms.com` / `password`
- **Editor**: `editor@cms.com` / `password`
- **Client**: `client@cms.com` / `password`
