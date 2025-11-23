# Praktikum Dokumentasi API dengan OpenAPI

## Deskripsi
Repositori ini merupakan hasil praktikum yang berisi implementasi REST API sederhana menggunakan PHP dan MySQL. Praktikum mencakup pembuatan API dasar, penulisan dokumentasi dengan OpenAPI, serta penayangan spesifikasi melalui Swagger UI. Seluruh langkah disusun agar mahasiswa dapat memahami alur kerja pembuatan dokumentasi API secara sistematis.

## Teknologi
- PHP sebagai bahasa pemrograman backend
- MySQL sebagai sistem manajemen basis data
- *REST API* sebagai pola komunikasi
- OpenAPI Specification untuk dokumentasi
- Swagger UI untuk menampilkan dokumentasi

## Struktur Folder
```
root/
│── api/
│   ├── config.php
│   ├── index.php
│   ├── store.php
│   ├── update.php
│   └── delete.php
│
│── openapi/
│   └── openapi.yaml
│
└── swagger/
    ├── index.html
    ├── swagger-ui.css
    ├── swagger-ui-bundle.js
    ├── swagger-ui-standalone-preset.js
```

## Cara Menjalankan
1. Pastikan PHP dan MySQL telah terpasang.
2. Buat database menggunakan skrip SQL pada materi praktikum.
3. Tempatkan folder proyek pada direktori server lokal atau jalankan melalui server bawaan PHP.
4. Akses API melalui browser atau aplikasi seperti Postman.
5. Untuk melihat dokumentasi API, buka file `index.html` dalam folder `swagger`.

---
Dibuat oleh: @franzxml
