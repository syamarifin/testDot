# README.md
1. jalankan xamp control dan aktifkan mysql & apache.
2. Import database Test kedalam phpMyaAdmin.
3. extrak file dotTest ke dalam folder htdocs di laptop/komputer anda.
4. buka cmd dan arahkan folder kedalam folder dotTest yang barusan
5. lalu ketikkan "php artisan serve" sehingga file laravel bisa di start dan anda mendapatkan urlnya.
6. buka/jalankan aplikasi postman yang anda punya.
7. masukkan URL "http://127.0.0.1:8000/api/provinceGet" untuk mendapatkan data province dari raja ongkir yang selanjutkan di simpan kedalam database test, jangan lupa untuk method yang di gunakan dalam postmannya "GET".
![ProvinceGet](https://user-images.githubusercontent.com/61268806/75602239-e002f900-5af5-11ea-8428-6cd8cd85c283.PNG)
8. untuk melihat data yang sudah tersimpan ke database dari API raja ongkir, URL nya "http://127.0.0.1:8000/api/province", jangan lupa untuk method yang di gunakan dalam postmannya "GET".
![ProvinceAll](https://user-images.githubusercontent.com/61268806/75602256-07f25c80-5af6-11ea-8d3f-b913dda25933.PNG)
9. untuk melihat data yang sudah tersimpan ke database dari API raja ongkir berdasarkan id, URL nya "http://127.0.0.1:8000/api/province/20", jangan lupa untuk method yang di gunakan dalam postmannya "GET".
![ProvinceByID](https://user-images.githubusercontent.com/61268806/75602265-193b6900-5af6-11ea-877e-58f0e63656a0.PNG)
10. masukkan URL "http://127.0.0.1:8000/api/cityGet" untuk mendapatkan data province dari raja ongkir yang selanjutkan di simpan kedalam database test, jangan lupa untuk method yang di gunakan dalam postmannya "GET".
![CityGet](https://user-images.githubusercontent.com/61268806/75602274-29ebdf00-5af6-11ea-9fdc-dfd7d64ed3f4.PNG)
11. untuk melihat data yang sudah tersimpan ke database dari API raja ongkir, URL nya "http://127.0.0.1:8000/api/city", jangan lupa untuk method yang di gunakan dalam postmannya "GET".
![cityAll](https://user-images.githubusercontent.com/61268806/75602277-2eb09300-5af6-11ea-970d-f02468b6b47c.PNG)
12. untuk melihat data yang sudah tersimpan ke database dari API raja ongkir berdasarkan id, URL nya "http://127.0.0.1:8000/api/city/2", jangan lupa untuk method yang di gunakan dalam postmannya "GET".
![CityByID](https://user-images.githubusercontent.com/61268806/75602279-32dcb080-5af6-11ea-914e-cd47a82aed22.PNG)
