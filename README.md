# BPKB IPB
# About
Website BPKB IPB merupakan platform dari BPKB IPB (Badan Pengembangan Kampus Berkelanjutan) yang diperuntukan untuk mengenalkan BPKB itu sendiri, mulai dari penjelasan dan manfaat akan keberadaanya BPKB IPB. Hingga kegiatan BPKB IPB. Hal ini agar antusiasme dari end user untuk Kampus Berkelanjutan semakin meningkat.

# Tim Kami
- Hanifah Syahidah (G6401231067) Frontend Developer
- Jelita Wahyuningtyas (G6401231048) Frontend Developer
- Salma Putri Hanifah (G6401231010) UI/UX Designer
- Muhammad Naufal Fathurrahman (G6401231094) Backend Developer
- Jordan Vieno Simamora (G6401231135) Backend Developer

# Diagram
Entity Relationship Diagram


![WhatsApp Image 2025-06-03 at 07 54 38_ca8fe2d4](https://github.com/user-attachments/assets/baff4984-4d16-45db-8922-f7b2ab07eab9)


Class Diagram


![WhatsApp Image 2025-06-03 at 07 54 56_8182fd3f](https://github.com/user-attachments/assets/11020c28-952c-461a-804c-3620c430d8be)



Activity Diagram



![WhatsApp Image 2025-06-03 at 07 53 44_07fcb7dc](https://github.com/user-attachments/assets/7863e0d6-5bd8-44c4-ac29-684caa50e304)

Requierment untuk Menginstall :
PHP >= 8.3
MySQL 8.0
Apache >= 2.4
Laragon

Installasi :
1. Menginstall Laragon 
Buka laragon
Pastikan bahwa versi sudah sesuai
Klik Start All
buka terminal laragon

2. Mengeclone repository
clone link berikut dengan mengetik pada terminal :git clone https://github.com/jordanvieno/Project-RPL-Kelompok-6.git , 
kemudian ketik cd Project-RPL-Kelompok-6

3. ketik pada terminal composer install
4. Cari folder .env pada folder laravel kalian dan configure menjadi
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_username
    DB_PASSWORD=your_password

5. Ketik pada terminal php artisan storage:link
6. Ketika npm install , kemudian npm run dev
7. Kemudian ketika, php artisan serve
8. Buka pada browser http://http://127.0.0.1:8000/
