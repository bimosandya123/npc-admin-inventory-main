# Laravel Project Setup Guide

Panduan ini menjelaskan langkah-langkah untuk menginstal dan menjalankan aplikasi Laravel menggunakan Laragon.

## Cara Penginstalan

1. **Buat Laravel App menggunakan Laragon**  
   - Buka Laragon.
   - Klik kanan pada **Root Folder** di Laragon, lalu pilih **Quick App > Laravel**.
   - Beri nama folder proyek Anda, lalu tunggu hingga proses selesai.

2. **Fetch Repository dari GitHub**  
   - Masuk ke folder proyek Laravel yang baru saja dibuat.
   - Jalankan perintah berikut untuk mengambil repository dari GitHub:  
     ```bash
     git init
     git remote add origin https://github.com/alambarkani/npc-admin-inventory.git
     git fetch origin
     git checkout main
     ```

3. **Install Dependensi NPM**  
   - Jalankan perintah berikut untuk menginstal dependensi frontend:  
     ```bash
     npm install
     ```

4. **Jalankan NPM Development Server**  
   - Setelah dependensi berhasil diinstal, jalankan perintah:  
     ```bash
     npm run dev
     ```

5. **Mulai Laragon**  
   - Pastikan Laragon sudah berjalan.
   - Akses aplikasi Laravel Anda melalui browser
