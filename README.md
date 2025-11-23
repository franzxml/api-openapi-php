# **Praktikum Dokumentasi API dengan OpenAPI**

## Deskripsi
Repositori ini merupakan hasil praktikum yang berisi implementasi REST API sederhana dengan PHP dan MySQL serta dokumentasi API menggunakan OpenAPI. Praktikum mencakup pembuatan backend, penulisan spesifikasi OpenAPI, dan penayangan dokumentasi melalui Swagger UI.

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
2. Buat database menggunakan skrip SQL pada materi praktikum.
3. Letakkan folder proyek di direktori server lokal.
4. Akses API melalui browser atau aplikasi seperti Postman.
5. Untuk melihat dokumentasi OpenAPI, buka file index.html dalam folder swagger.

Dibuat oleh: @franzxml
