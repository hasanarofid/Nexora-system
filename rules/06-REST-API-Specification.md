# 06 - REST API Specification

*(Jika aplikasi menggunakan arsitektur Headless atau Mobile App integration)*

## 1. Standar Format Respons
API harus selalu mengembalikan respons JSON terstruktur secara konsisten:

```json
{
  "success": true,
  "message": "Data berhasil diambil",
  "data": { ... },
  "errors": null
}
```

## 2. Autentikasi
- Menggunakan Laravel Sanctum untuk manajemen token API.
- Header wajib: `Authorization: Bearer {token}`, `Accept: application/json`.

## 3. Endpoints Utama (Garis Besar)
- **Auth**: `POST /api/login`, `POST /api/register`, `POST /api/logout`
- **Creators**: `GET /api/creators`, `GET /api/creators/{id}`
- **Bookings**: `GET /api/bookings`, `POST /api/bookings`, `POST /api/bookings/{id}/pay`
- **Messages**: `GET /api/messages/{booking_id}`, `POST /api/messages`
- **Dashboard**: `GET /api/creator/stats`, `GET /api/client/stats`

## 4. Pagination
- Gunakan standar pagination Laravel (links, meta info).
