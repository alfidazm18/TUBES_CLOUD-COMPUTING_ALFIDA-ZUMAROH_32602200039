<?= $this->extend('layouts/main_layout') ?>
<?= $this->section('content') ?>
<div class="overlay">
  <div class="biaya-akademik">
    <h1>Biaya Awal Masuk TP 2026/2027</h1>
    <p>Berikut ini adalah informasi pembiayaan untuk PPDB TP 2026/2027</p>

    <div class="box-container">
      <div class="biaya-box">
        <h2>Gelombang 1</h2>
        <p>Periode 1 Juli – 31 Desember 2025</p>
        <table>
          <thead>
            <tr>
              <th>Jalur</th>
              <th>Putra</th>
              <th>Putri</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Reguler</td>
              <td>9.300.000</td>
              <td>9.450.000</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="biaya-box">
        <h2>Gelombang 2</h2>
        <p>Periode 1 Januari 2026 – Kuota Terpenuhi</p>
        <table>
          <thead>
            <tr>
              <th>Jalur</th>
              <th>Putra</th>
              <th>Putri</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Reguler</td>
              <td>10.300.000</td>
              <td>10.450.000</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>