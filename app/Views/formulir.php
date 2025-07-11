<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Formulir PPDB SD SUKAMAJU</title>

  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Roboto', sans-serif;
      padding: 20px;
      background-color: #f4f9ff;
    }

    h2 {
      text-align: center;
      color: rgb(107, 178, 74);
    }

    .description-box {
      max-width: 600px;
      margin: 0 auto 20px auto;
      text-align: justify;
      line-height: 1.6;
    }

    form {
      max-width: 600px;
      margin: auto;
      background: #fff;
      padding: 25px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    label {
      display: block;
      margin: 10px 0 5px;
    }

    input, select, textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .radio-group {
      display: flex;
      gap: 20px;
    }

    .submit-btn {
      background-color: #4CAF50;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .submit-btn:hover {
      background-color: rgb(4, 170, 54);
    }
  </style>
</head>
<body>

  <h2>FORMULIR PENDAFTARAN SISWA BARU</h2>

  <div class="description-box">
    <p>
      Berikut ini adalah formulir PPDB (Penerimaan Peserta Didik Baru) SD Sukamaju. 
      Silakan isi formulir berikut ini dengan data yang sebenarnya. Kami akan melakukan follow up kepada 
      Bapak dan Ibu melalui nomor WhatsApp yang dimasukkan.
    </p>
  </div>

  <form action="<?= base_url('/ppdb/submit') ?>" method="post">
    <label for="nama">Nama Lengkap</label>
    <input type="text" id="nama" name="nama" required>

    <label for="nik">NIK</label>
    <input type="text" id="nik" name="nik" required>

    <label for="asal_tk">Asal TK</label>
    <input type="text" id="asal_tk" name="asal_tk" required>

    <label>Jenis Kelamin</label>
    <div class="radio-group">
      <label><input type="radio" name="jk" value="Laki-laki" required> Laki-laki</label>
      <label><input type="radio" name="jk" value="Perempuan"> Perempuan</label>
    </div>

    <label for="agama">Agama</label>
    <select name="agama" id="agama" required>
      <option value="">-- Pilih Agama --</option>
      <option value="Islam">Islam</option>
      <option value="Kristen">Kristen</option>
      <option value="Katolik">Katolik</option>
      <option value="Hindu">Hindu</option>
      <option value="Budha">Budha</option>
      <option value="Konghucu">Konghucu</option>
    </select>

    <label for="ttl">Tempat / Tanggal Lahir</label>
    <input type="date" id="ttl" name="ttl" required>

    <label for="alamat">Alamat Lengkap</label>
    <textarea id="alamat" name="alamat" rows="3" required></textarea>

    <label for="telepon">Nomor Telepon</label>
    <input type="text" id="telepon" name="telepon" required>

    <button type="submit" class="submit-btn">SUBMIT</button>
  </form>

</body>
</html>
