# README.md
1. jalankan xamp control dan aktifkan mysql & apache.
2. Import database Test kedalam phpMyaAdmin.
3. extrak file dotTest ke dalam folder htdocs di laptop/komputer anda.
4. buka cmd dan arahkan folder kedalam folder dotTest yang barusan
5. lalu ketikkan "php artisan serve" sehingga file laravel bisa di start dan anda mendapatkan urlnya.
6. buka/jalankan aplikasi postman yang anda punya.
7. masukkan URL "http://127.0.0.1:8000/api/provinceGet" untuk mendapatkan data province dari raja ongkir yang selanjutkan di simpan kedalam database test, jangan lupa untuk method yang di gunakan dalam postmannya "GET".
8. untuk melihat data yang sudah tersimpan ke database dari API raja ongkir, URL nya "http://127.0.0.1:8000/api/province", jangan lupa untuk method yang di gunakan dalam postmannya "GET".
9. untuk melihat data yang sudah tersimpan ke database dari API raja ongkir berdasarkan id, URL nya "http://127.0.0.1:8000/api/province/20", jangan lupa untuk method yang di gunakan dalam postmannya "GET".
10. masukkan URL "http://127.0.0.1:8000/api/cityGet" untuk mendapatkan data province dari raja ongkir yang selanjutkan di simpan kedalam database test, jangan lupa untuk method yang di gunakan dalam postmannya "GET".
11. untuk melihat data yang sudah tersimpan ke database dari API raja ongkir, URL nya "http://127.0.0.1:8000/api/city", jangan lupa untuk method yang di gunakan dalam postmannya "GET".
12. untuk melihat data yang sudah tersimpan ke database dari API raja ongkir berdasarkan id, URL nya "http://127.0.0.1:8000/api/city/2", jangan lupa untuk method yang di gunakan dalam postmannya "GET".
