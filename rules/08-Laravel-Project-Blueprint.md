# 08 - Laravel Project Blueprint

## Struktur Folder Custom (Direkomendasikan)
Untuk menjaga agar controller tidak 'gemuk' (Fat Controllers), proyek ini akan menggunakan pola **Service & Action**.

- `app/Http/Controllers`: Hanya berisi penerimaan Request dan pengembalian Response.
- `app/Http/Requests`: Validasi data input (Form Requests).
- `app/Services`: Berisi logika bisnis kompleks (misal: `EscrowService.php`, `BookingService.php`).
- `app/Actions`: Kelas untuk satu aksi spesifik yang dapat di-reusable (misal: `CreateBookingAction.php`, `ProcessAIModerationAction.php`).
- `app/Models`: Representasi struktur tabel dengan hubungan (relations) dan mutators.
- `app/Jobs`: Proses background (misal: pengiriman email notifikasi, pemrosesan video portofolio, proses AI text analysis).
- `app/Enums`: Enumerasi standar PHP 8.1+ untuk status (misal: `BookingStatus::PENDING`).

## Alur Data
1. Request masuk -> Route -> Middleware.
2. Controller -> Validasi via FormRequest.
3. Controller memanggil `Action` atau `Service`.
4. `Service` memanipulasi `Model` / Database.
5. `Service` mengembalikan data.
6. Controller mereturn JSON Resource (API) atau View (Web).
