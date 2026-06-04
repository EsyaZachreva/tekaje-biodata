<?php
// Data Biodata
$nama = "Esya Zachreva Althafamy";
$kelas = "XI RPL 7";
$no_absen = "11";
$asal_kota = "Sampang, Jawa Timur";
$umur = "17 Tahun";
$tanggal_lahir = "23 Mei 2009";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata - <?php echo $nama; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 40px 20px;
            display: flex;
            justify-content: center;
        }
        .container {
            background-color: #ffffff;
            max-width: 450px;
            width: 100%;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            border: 1px solid #e0e0e0;
        }
        h2 {
            text-align: center;
            color: #2c3e50;
            margin-top: 0;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #3498db;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        td {
            padding: 10px 5px;
            vertical-align: top;
        }
        td.label {
            font-weight: bold;
            color: #555;
            width: 35%;
        }
        td.separator {
            width: 5%;
            text-align: center;
            color: #777;
        }
        td.value {
            color: #222;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Biodata Diri</h2>
    <table>
        <tr>
            <td class="label">Nama</td>
            <td class="separator">:</td>
            <td class="value"><?php echo $nama; ?></td>
        </tr>
        <tr>
            <td class="label">Kelas</td>
            <td class="separator">:</td>
            <td class="value"><?php echo $kelas; ?></td>
        </tr>
        <tr>
            <td class="label">No. Absen</td>
            <td class="separator">:</td>
            <td class="value"><?php echo $no_absen; ?></td>
        </tr>
        <tr>
            <td class="label">Asal Kota</td>
            <td class="separator">:</td>
            <td class="value"><?php echo $asal_kota; ?></td>
        </tr>
        <tr>
            <td class="label">Umur</td>
            <td class="separator">:</td>
            <td class="value"><?php echo $umur; ?></td>
        </tr>
        <tr>
            <td class="label">Tanggal Lahir</td>
            <td class="separator">:</td>
            <td class="value"><?php echo $tanggal_lahir; ?></td>
        </tr>
    </table>
</div>

</body>
</html>
