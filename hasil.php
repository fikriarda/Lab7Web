<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $_POST['nama']?></td>
        </tr>
        <tr>
            <td>Usia</td>
            <td>:</td>
            <td><?php
            $tanggal_lahir = new DateTime($_POST['tgl_lahir']);
            $sekarang = new DateTime("Today");
            if ($tanggal_lahir > $sekarang) {
                $thn = "0";
                $bln = "0";
                $tgl = "0";
            }
            $thn = $sekarang ->diff($tanggal_lahir)->y;
            $bln = $sekarang ->diff($tanggal_lahir)->m;
            $tgl = $sekarang ->diff($tanggal_lahir)->d;
            echo $thn." tahun " .$bln. " bulan " .$tgl. " hari ";
            ?></td>
        </tr>
        <tr>
        <td>Pekerjaan</td>
        <td>:</td>
        <td>
        <?php echo $_POST['pekerjaan'] ?>
        </td>
        </tr>
        <tr>
            <td>Gaji</td>
            <td>:</td>
            <td><?php 
            $pekerjaan = $_POST['pekerjaan'];
            if ($pekerjaan == "babysister"){
                echo "Rp 2.500.000/bulan";
            }elseif ($pekerjaan == "operator") {
                echo "Rp 5.000.000/bulan";
            }elseif ($perkerjaan == "data") {
                echo "Rp 8.000.000/bulan";
            }else{
                echo "Rp 8.000.000/bulan";
            }
            ?></td>
        </tr>
    </table>
</body>
</html>