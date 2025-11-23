# **README.md**

## Deskripsi
Repositori ini berisi implementasi REST API sederhana dengan PHP dan MySQL serta dokumentasi API menggunakan OpenAPI. Seluruh proses mencakup pembuatan backend, integrasi spesifikasi OpenAPI, dan penayangan dokumentasi melalui Swagger UI. Proyek ini dirancang untuk mendukung kegiatan praktikum pembuatan dokumentasi API profesional.

## Teknologi
1. PHP
2. MySQL
3. *REST API*
4. OpenAPI Specification
5. Swagger UI

## Struktur Folder
```
api-openapi/
│
├── api/
│   ├── config.php
│   ├── index.php
│   ├── store.php
│   ├── update.php
│   └── delete.php
│
├── openapi/
│   └── openapi.yaml
│
└── swagger/
    ├── index.html
    ├── swagger-ui.css
    ├── swagger-ui-bundle.js
    ├── swagger-ui-standalone-preset.js
```

## Cara Menjalankan
1. Pastikan PHP dan MySQL tersedia pada perangkat.
2. Buat database dengan menjalankan skrip SQL yang tersedia dalam folder praktikum.
3. Letakkan folder proyek di direktori server lokal.
4. Jalankan API melalui browser atau aplikasi seperti Postman.
5. Untuk menampilkan dokumentasi OpenAPI, buka file index.html pada folder swagger.

Dibuat oleh: @franzxml
