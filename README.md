|  Berliana Noviansyah  |      312010373     |
|-----------------------|--------------------|
|    Pemrograman Web    |      TI.20.A1      |
|     Pertemuan 12      |    Praktikum 11    |


# PRAKTIKUM 11 PERTEMUAN 12


## 1). Persiapan pertama


Sebelum memulai menggunakan Framework Codeigniter, perlu dilakukan konfigurasi pada webserver. Beberapa ekstenti PHP yang perlu diaktifkan untuk kebutuhan adalah sebagai berikut:
* **Php-json** ekstension untuk bekerja dengan JSON;
* **Php-mysqlnd** native driver untuk MySQL;
* **php-xml** ekstension untuk bekerja dengan XML;
* **php-intl** ekstensi untuk membuat aplikasi miltibahasa;
* **libcurl** (opsional), jika ingin pakai Curl.

Untuk mengaktifkan ekstensi tersebut, langkah pertama masuk kedalam aplikasi Xampp, lalu kil pada bagian **config**, setelah itu pilih **PHP (php.ini).

![mengaktifkan_ekstentsi](img/php_ini.png)



## 2). Installasi Codeigniter 4


* Install **Codeigniter** di website berikut : https://codeigniter.com/download
* Ekstrak file tersebut ke directory **htdocs/lab11_php_ci.
* Ubah nama directory framework-4.x.x.x menjadi **ci4**.
* Lalu buka browser dengan alamat http://localhost/lab11web/lab11_php_ci/ci4/public/


![install_codeigniter4](img/codelgniter.png)



## 3). Menjalankan CLI *(Command Line Interface)*


Untuk mempermudah development atau pengembangannya, Codeigniter 4 menyediakan CLI yang dapat diakses melalui terminal atau command prompt.
Masuk pada folder xampp lalu cari file dengan nama *xampp.shell*. Klik untuk membuka CLI.


Arahkan okasi direktori sesuai dengan letak penyimpanan directory kerja dibuat. Misal, "xampp/**htdocs/lab11web/lab11_php_ci/ci4**)


![CLI](img/xampp_shell.png)



## 4). Memanggil Codeigniter


jalankan perintah

```php
php spark
```


Untuk memanggil CLI COdeigniter 4.

![Memanggil_codeigniter](img/php_spark.png)