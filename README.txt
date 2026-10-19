CARA PAKAI (Laragon)

1. Buat proyek Laravel 13 baru:
   cd C:\laragon\www
   composer create-project laravel/laravel:^13.0 UTS_251011701252

2. Salin SEMUA isi folder zip ini (app, database, resources, routes, public)
   ke dalam folder UTS_251011701252, pilih "Replace / Timpa" jika ditanya.

3. Buat database kosong: db_uts_251011701252 (HeidiSQL / phpMyAdmin)

4. Edit file .env di proyek:
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=db_uts_251011701252
   DB_USERNAME=root
   DB_PASSWORD=

5. Taruh gambar img1.jpg sampai img10.jpg (10 gambar) di public/assets/images/
   Taruh folder Bootstrap hasil download di public/Bootstrap/
   (butuh public/Bootstrap/css/bootstrap.min.css dan
    public/Bootstrap/js/bootstrap.bundle.min.js, sesuaikan path di
    resources/views/layouts/app.blade.php kalau struktur foldernya beda)

6. Jalankan:
   php artisan migrate:fresh --seed
   php artisan serve
   Buka http://127.0.0.1:8000

7. Upload ke GitHub dengan nama repo:
   UTS_NURALIFIA_251011701252_03SIFM003
