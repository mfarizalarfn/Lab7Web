# Lab7Web

**Nama  : Mohamad Farizal Arifin**

**Nim   : 312010231**

**Kelas : TI.20.B.1**

<br>

**Langkah - langkah praktikum**<br>

1. Menjalankan aplikasi web server yang sudah diinstall disini menggunakan aplikasi XAMPP, dan akses folder direktory yang sudah dibuat pada direktory web server <br>
Berikut hasilnya :<br>

![gambar 1](picture/1.PNG) <br>

2. Buat file baru dengan nama **php_dasar.php** pada directory tersebut. Kemudian buat kode seperti berikut.<br>

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php
        echo "Hello World";
    ?>
</body>
</html>
```
<br>

Kemudian untuk mengakses hasilnya melalui URL: *http://localhost:8080/Lab7Web/lab7_php_dasar/php_dasar.php*<br>
![gambar 2](picture/2.PNG) <br>

Menambahkan variable pada program<br>
```
    <h2>Menggunakan Variable</h2>
    <?php
    $nim = "312010231";
    $nama = 'Farizal';
    echo "NIM : " . $nim . "<br>";
    echo "Nama : $nama";
    ?>
```
Berikut hasilnya :<br>

![gambar 3](picture/3.PNG) <br>