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