# 07 - Engineering Guidelines

## 1. Filosofi Kode
- **KISS** (Keep It Simple, Stupid): Hindari abstraksi berlebihan jika masalah bisa diselesaikan secara sederhana.
- **DRY** (Don't Repeat Yourself): Gunakan trait, helper, atau service class untuk logika yang berulang.

## 2. Standar PHP & Laravel
- Wajib menggunakan fitur Strict Types PHP: `declare(strict_types=1);` di setiap file.
- Gunakan tipe data (Type Hinting & Return Types) pada setiap method/fungsi.
- Patuhi standar PSR-12 untuk formatting kode.
- Manfaatkan fitur modern Laravel 11.

## 3. Database & Eloquent
- Selalu atasi **N+1 Query Problem** dengan menggunakan Eager Loading (`with()`).
- Pindahkan query yang kompleks ke Query Scope atau Repository/Service.
- Gunakan transaksi database (`DB::transaction`) pada aksi yang melibatkan modifikasi beberapa tabel sekaligus (misal: Checkout Booking & Insert Payment).

## 4. Keamanan & Performa
- Jangan pernah menyimpan API Key, Password, atau Secret langsung di kode (Hardcode). Gunakan `.env`.
- Lindungi rute-rute sensitif dengan Middleware.
- Caching hasil query berat (seperti list kreator populer) dengan Redis.
