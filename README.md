# INF206-2023-2-PETA
 PETA adalah aplikasi berbasis web yang dibuat untuk membantu wisatawan dan masyarakat dalam memperoleh pekerjaan sebagai pemandu wisata di Banda Aceh dan wisatawan dapat memesan pemandu wisata yang disediakan.
 
### Anggota Kelompok
    1. Habil Nasution (2108107010089)
    2. Fanul Nastia (2108107010029)
    3. Faiza Sabila (2108107010083)
    4. Askar Aziz (2108107010069)

## Tahapan Menjalankan Program
 Clone terlebih dahulu repository ini lalu masuk ke dalam foldernya dengan perintah berikut
 
    cd INF206-2023-2-PETA
    
Install semua dependency yang dibutuhkan untuk menjalankan program

    composer install && npm install
    
Atur konfigurasi databasenya di dalam file .env, sebelum itu jalankan dibawah ini

    cp .env.example .env
    
## Menjalankan Website PETA
 Akun Admin
 
    email = admin@gmail.com
    password = admin
 
 Jalankan perintah berikut untuk mengakses keynya
 
    php artisan key:generate
  
 Lalu perintah berikut untuk migrasi database sekaligus membuat akun admin
 
    php artisan migrate:fresh --seed
 
 Jalankan perintah berikut untuk menjalankan server vite
 
    npm run dev
 
 Terakhir jalan websitenya
 
    php artisan serve
       
 Buka pada browser https//localhost:8000 untuk membuka website
