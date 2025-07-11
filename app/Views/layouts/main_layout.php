<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PPDB SD SUKAMAJU</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      height: 100vh;
      background-image: url("<?= base_url('sd.jpg') ?>");
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      font-family: 'Roboto', sans-serif;
      color: #333;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    header {
      background-color: #d4f5d0;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 14px 30px;
      box-shadow: 0 7px 9px rgba(0,0,0,0.1);
      height: 40px; 
      overflow: hidden; 
    }

    .logo-area {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .school-logo {
      height: 120px;
      display: block;
      position: relative;
      top: 9px; 
    }

    .social-icon {
      height: 40px; 
      display: block;
    }

    nav {
      display: flex;
      gap: 30px;
    }

    nav a {
      text-decoration: none;
      font-weight: bold;
      color: #34495e;
      font-size: 16px;
      transition: color 0.3s ease;
    }

    nav a:hover { color: #45a049; }
    nav a.active { color: rgb(67, 132, 46); }

    .overlay {
      min-height: 400px;
      background-color: rgba(255, 255, 255, 0.85);
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;   
      padding: 40px 20px;
    }

    .text-box {
      max-width: 700px;
      text-align: left;
      margin-bottom: 30px;
      margin-left: 20px; 
    }

    .text-box p.main-text {
      font-size: 27px;
      font-weight: 600;
      color: rgb(107, 178, 74);
      margin-bottom: 15px;
    }

    .text-box p.sub-text {
      font-size: 20px;
      font-weight: 400;
      color: #555;
    }

    .btn {
      display: inline-block;
      padding: 14px 28px;
      background-color: rgb(107, 178, 74);
      color: white;
      text-decoration: none;
      border-radius: 8px;
      font-size: 18px;
      transition: background-color 0.3s ease;
      margin-top: 10px;
    }

    .btn:hover {
      background-color: rgb(67, 132, 46);
    }

    footer {
      background-color: #f4f4f4;
      text-align: center;
      padding: 10px;
      font-size: 9px;
    }

    .biaya-akademik {
      text-align: center;       
      width: 100%;
      display: flex;
      flex-direction: column;   
      align-items: center;      
    }

    .biaya-akademik h1 {
      font-size: 30px;
      font-weight: bold;
    }

    .biaya-akademik p {
      margin-bottom: 30px;
      font-size: 16px;
      color: #555;
    }

    .centered-box {
      max-width: 800px;
      margin: 60px auto; 
      background: #f1f5f9;
      border-radius: 10px;
      padding: 40px 30px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      text-align: center;
    }
    .centered-box h1 {
      font-size: 28px;
      color: #333;
      margin-bottom: 20px;
    }
    .centered-box p {
      font-size: 18px;
      color: #555;
      line-height: 1.6;
    }

    .box-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 40px;
    }

    .biaya-box {
      background: #f1f5f9;
      border-radius: 10px;
      padding: 30px;
      width: 350px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .biaya-box h2 {
      margin: 0;
      font-size: 24px;
      color: #333;
    }

    .biaya-box p {
      font-size: 14px;
      margin-bottom: 20px;
      color: #777;
    }

    .biaya-box table {
      width: 100%;
      border-collapse: collapse;
    }

    .biaya-box table th,
    .biaya-box table td {
      border: 1px solid #ddd;
      padding: 8px 10px;
      text-align: center;
    }

    .biaya-box table th {
      background-color: #e2e8f0;
      font-weight: bold;
    }

  </style>
</head>

<body>

  <header>
    <div class="logo-area">
      <img src="<?= base_url('logo.png') ?>" alt="Logo Sekolah" class="school-logo">
      <a href="#"><img src="<?= base_url('instagram.png') ?>" alt="Instagram" class="social-icon"></a>
      <a href="#"><img src="<?= base_url('youtube.png') ?>" alt="YouTube" class="social-icon"></a>
    </div>

    <nav>
      <a href="<?= base_url('/') ?>" class="<?= uri_string() == '' ? 'active' : '' ?>">HOME</a>
      <a href="<?= base_url('/berita') ?>" class="<?= uri_string() == 'berita' ? 'active' : '' ?>">BERITA</a>
      <a href="<?= base_url('/kontak') ?>" class="<?= uri_string() == 'kontak' ? 'active' : '' ?>">KONTAK</a>
      <a href="<?= base_url('/biaya') ?>" class="<?= uri_string() == 'biaya' ? 'active' : '' ?>">BIAYA AKADEMIK</a>
    </nav>
  </header>

  <?= $this->renderSection('content') ?>

  <footer>
    &copy; <?= date('Y') ?> SD SUKAMAJU - Penerimaan Peserta Didik Baru
  </footer>

</body>
</html>
