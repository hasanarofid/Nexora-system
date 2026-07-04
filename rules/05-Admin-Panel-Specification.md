# 05 - Admin Panel Specification

## 1. Dashboard Admin
- Metrik Utama: Total Transaksi, GMV, Total Escrow Aktif, Kreator Baru, Tiket Pelanggaran Terbuka.

## 2. Creator Management
- Daftar kreator (Pending Verification, Verified, Suspended).
- Halaman Approval Verifikasi (Review KTP, Portofolio, Device).
- Fitur Suspend/Ban kreator secara manual.

## 3. Escrow & Financial Management
- Pantau pergerakan dana (Escrow Ledger).
- **Dispute Resolution**: Jika Klien dan Kreator berselisih, admin bertindak sebagai mediator dan dapat merilis dana ke salah satu pihak atau refund.
- Approval Payout/Withdrawal dari kreator (atau otomatis via API disbursement).

## 4. Moderation & Safety Center
- Log dari AI Anti-Bypass.
- Admin bisa mereview percakapan yang di-flag oleh AI.
- Pengaturan Rules / Regex untuk Moderation Engine.
