<?= $this->extend('layouts/main_layout') ?>
<?= $this->section('content') ?>

<div class="overlay">
  <div class="text-box">
    <p class="main-text">Selamat datang di halaman Penerimaan Peserta Didik Baru SD Sukamaju. Sekolah dengan lingkungan belajar yang ceria, islami, dan ramah teknologi.</p>
    <p class="sub-text">Proses penerimaan peserta didik baru semakin mudah dengan sistem PPDB online. Daftar online segera untuk TP 2026/2027 di SD Sukamaju. Kuota hanya untuk 112 peserta didik. Pendaftaran ditutup sewaktu – waktu jika kuota sudah terpenuhi.</p>
    <a class="btn" href="<?= base_url('/ppdb') ?>">DAFTAR SEKARANG</a>
  </div>
</div>

<?= $this->endSection() ?>
