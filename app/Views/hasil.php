<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Hasil Pendaftaran</title>
  <style>
  
   <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    body {
      font-family: 'Roboto', sans-serif;
      padding: 30px;
      background-color: #f0fff5;
    }
    h2 {
      color: rgb(42, 184, 94);
      text-align: center;
    }
    table {
      margin: auto;
      border-collapse: collapse;
      width: 60%;
      background: #fff;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    td, th {
      padding: 10px;
      border: 1px solid #ccc;
    }
    th {
      background-color: #4CAF50;
      color: white;
    }
  </style>
</head>
<body>

  <h2>Data Pendaftar</h2>
  <table>
    <tr><th>Field</th><th>Isi</th></tr>
    <tr><td>Nama Lengkap</td><td><?= esc($nama) ?></td></tr>
    <tr><td>NIK</td><td><?= esc($nik) ?></td></tr>
    <tr><td>Asal TK</td><td><?= esc($asal_tk) ?></td></tr>
    <tr><td>Jenis Kelamin</td><td><?= esc($jk) ?></td></tr>
    <tr><td>Agama</td><td><?= esc($agama) ?></td></tr>
    <tr><td>Tempat/Tanggal Lahir</td><td><?= esc($ttl) ?></td></tr>
    <tr><td>Alamat</td><td><?= esc($alamat) ?></td></tr>
    <tr><td>Telepon</td><td><?= esc($telepon) ?></td></tr>
  </table>

</body>
</html>
