# 02 - Software Architecture

## 1. Tech Stack Utama
- **Backend**: Laravel 11.x (PHP 8.2+)
- **Database**: MySQL/MariaDB
- **Cache & Queue**: Redis (Penting untuk sistem antrean AI Moderation dan notifikasi).
- **Frontend (Web)**: TALL Stack (Tailwind, Alpine, Laravel, Livewire) atau Inertia.js (React/Vue) *menyesuaikan dengan setup yang sudah ada di repo*.
- **Storage**: AWS S3 / Cloudflare R2 (untuk penyimpanan raw file, reels, dan portofolio video).

## 2. Arsitektur Komponen
- **Web App (Client & Creator Portal)**: Antarmuka utama untuk transaksi, pencarian, dan manajemen dashboard.
- **Admin Panel**: Backend untuk staf internal Nexora mengelola dispute escrow, verifikasi kreator, dan pelanggaran.
- **AI Moderation Engine**: Layanan terpisah atau terintegrasi via background jobs (Queue) untuk menganalisis teks di chat menggunakan Regex & Machine Learning dasar (mendeteksi niat bypass).

## 3. Security
- Enkripsi data sensitif.
- Rate limiting pada API pencarian dan pengiriman pesan.
- Proteksi CSRF, XSS, dan SQL Injection (bawaan Laravel).
- Secure File Uploads (Validasi MimeType ketat untuk portofolio).
