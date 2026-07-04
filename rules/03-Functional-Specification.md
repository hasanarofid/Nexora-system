# 03 - Functional Specification

## 1. Escrow System Flow
1. **Client Booking**: Klien memilih paket, add-on, dan checkout.
2. **Client Pay**: Klien membayar (via Payment Gateway/Midtrans). Status booking menjadi `PAID`.
3. **Dana Ditahan (Escrow)**: Dana masuk ke rekening Nexora.
4. **Project Dikerjakan**: Kreator bekerja sesuai tanggal booking.
5. **Kirim Hasil**: Kreator mengunggah/mengirimkan hasil (reels/raw file) melalui platform.
6. **Client Approve**: Klien meninjau dan klik "Approve" (atau otomatis approved setelah H+X hari jika tidak ada komplain).
7. **Dana Cair (Payout)**: Saldo masuk ke dompet Kreator dan bisa di-withdraw.

## 2. AI Anti-Bypass System (Chat)
- Berjalan secara *real-time* atau *near-real-time* (via WebSocket/Queue).
- **Trigger**: Setiap pengiriman pesan.
- **Logika**: 
  - Regex mendeteksi format nomor telepon (+62, 08xx).
  - Regex mendeteksi link WA (wa.me), IG (instagram.com), dsb.
- **Action**: 
  - Pesan diblokir (disamarkan/gagal kirim).
  - Peringatan sistem muncul di layar pengguna.
  - Pelanggaran dicatat (Strike system: 3x peringatan, 5x suspen).

## 3. Sistem Verifikasi Kreator
- Pendaftaran -> Isi Data -> Upload KTP & Selfie -> Link Portofolio -> Verifikasi Device (iPhone wajib, dsb).
- Admin meninjau aplikasi (Approve/Reject).
- Kreator yang lolos mendapat badge "Verified Creator".
