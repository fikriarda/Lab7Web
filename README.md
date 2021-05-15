# Lab7Web
<h2>Tugas Ke 7 Web Programming</h2>
1. Buat file di folder htdocs xampp
2. lalu tuliskan kode seperti berikut
![1 echo](https://user-images.githubusercontent.com/59334580/118348631-db4d2800-b575-11eb-83ec-13db98edf110.png)
Kemudian untuk mengakses hasilnya melalui URL :
http://localhost/lab7_php_dasar/php_dasar.php
![1 1 hasil echo](https://user-images.githubusercontent.com/59334580/118348649-fddf4100-b575-11eb-8010-445efc62fe62.png)
<h3>Variable PHP</h3>
Menambahkan variable pada program.
![2 1variable](https://user-images.githubusercontent.com/59334580/118348665-194a4c00-b576-11eb-817a-1c1103de0039.png)
![2 variable](https://user-images.githubusercontent.com/59334580/118348672-2404e100-b576-11eb-861a-1d248eb6b310.png)
<h3>Predefine Variable $_GET
  ![3 Predevine get](https://user-images.githubusercontent.com/59334580/118348717-5dd5e780-b576-11eb-928d-f12ad8f4f7ac.png)
Untuk mengaksesnya gunakan URL :
  http://localhost/lab7_php_dasar/php_dasar.php?nama=Fikri
  ![3 2Predefine get](https://user-images.githubusercontent.com/59334580/118348756-9249a380-b576-11eb-8a56-91e93c031846.png)
  <h3>Membuat Form Input</h3>
  ![4 1Post](https://user-images.githubusercontent.com/59334580/118348776-b60ce980-b576-11eb-9e56-240c33fda977.png)
![4 Post](https://user-images.githubusercontent.com/59334580/118348780-c02ee800-b576-11eb-8c62-c21dc9891105.png)
![6 1 hari](https://user-images.githubusercontent.com/59334580/118349078-b6a67f80-b578-11eb-977a-25a3d42b4f9d.png)
![7 1 switch](https://user-images.githubusercontent.com/59334580/118349080-bc9c6080-b578-11eb-8734-45b03df56f4b.png)
![7 switch](https://user-images.githubusercontent.com/59334580/118349083-befeba80-b578-11eb-9853-7a334d19aba7.png)
![8 1 perulangan](https://user-images.githubusercontent.com/59334580/118349087-c1611480-b578-11eb-84d0-90eb7b29e7be.png)
![8 perulangan](https://user-images.githubusercontent.com/59334580/118349089-c32ad800-b578-11eb-8121-9cddf195d717.png)
![9 1 while](https://user-images.githubusercontent.com/59334580/118349093-c625c880-b578-11eb-8985-557a2bda0201.png)
![9 while](https://user-images.githubusercontent.com/59334580/118349095-ca51e600-b578-11eb-86ea-425b5025d2d1.png)
![10 1 dowhile](https://user-images.githubusercontent.com/59334580/118349097-cb831300-b578-11eb-805a-df5ff7d94175.png)
![10 dowhile](https://user-images.githubusercontent.com/59334580/118349099-ce7e0380-b578-11eb-80af-7a40de746751.png)
  <h3> membuat form untuk menampilkan nama, pekerjaan, dan usia </h3>
  Pertama kita harus membuat file baru lagi dan simpan di folder htdocs
  disini saya membuat file dengan nama index.php
  lalu isikan kode seperti berikut
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 7 Web Program</title>
</head>
<body>
<h1>Form Input</h1>
    <form method="POST" action="hasil.php">
    <table rules="rows">
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" placeholder="Masukkan Nama Anda"></td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td><input type="date" name="tgl_lahir"></td>
    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td><select name="pekerjaan" id="">
            <option value="babysister" name="babysister">Baby Sister Rp 2.500.000/bulan</option>
            <option value="operator" name="operator">Operator Rp 5.000.000/bulan</option>
            <option value="data" name="data">Data Scientist Rp 8.000.000/bulan</option>
            <option value="fullstack" name="fullstack">Full Stack Developer Rp 8.000.000/bulan</option>
            </select>
        </td>
    </tr>
    <tr>
    <td><button type="submit" value="submit" name="submit">Kirim</button></td>
    </tr>
    </table>
    </form>
</body>
</html>
