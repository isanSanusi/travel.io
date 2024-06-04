<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/dio_style.css" />
    <link rel="stylesheet" href="assets/css/slide.css">
  </head>
  <style>
    td {
      padding: 10px;
    }
  </style>
  <body>
    <?php include("dio_header.php") ?>
    <div class="slider">
        <div class="slider-wrapper">
            <div class="slide"><img src="image1.jpg" alt="Image 1"></div>
            <div class="slide"><img src="image2.jpg" alt="Image 2"></div>
            <div class="slide"><img src="image3.jpg" alt="Image 3"></div>
            <div class="slide"><img src="image4.jpg" alt="Image 4"></div>
        </div>
        <button class="nav left-nav" onclick="moveSlide(-1)">&#10094;</button>
        <button class="nav right-nav" onclick="moveSlide(1)">&#10095;</button>
    </div>
    <div class="bg-img" data-stellar-background-ratio="0.5">
      <div class="bg-text">
        <h1 style="font-size: 50px">Selamat Datang <br />Di Travel.io</h1>
        <br />
        <p style="font-size: 30px">bisa berangkat dari mana saja</p>
        <br />
        <h1 style="font-size: 50px">Mulai dari Rp. 100.000</h1>
      </div>
    </div>
    <br />
    <div class="titleregist">
      <h2>Cara Pemesanan Tiket</h2>
    </div>
    <hr />
    <p align="center">Temukan Perjalanan Menarik Hanya Di Travel.io</p>
    <br />
    <table border="0px">
      <tr>
        <td align="center">
          <div class="card">
            <img
              src="assets/images/cara1.png"
              alt="Avatar"
              style="width: 50%"
            />
            <div class="containerg">
              <h4><b>Pilih Rincian Perjalanan</b></h4>
              <p>
                Masukkan tempat keberangkatan, tujuan,<br />
                tanggal perjalanan, tanggal pulang dan <br />kemudian klik
                'Cari'
              </p>
            </div>
          </div>
        </td>
        <td align="center">
          <div class="card">
            <img
              src="assets/images/cara2.png"
              alt="Avatar"
              style="width: 50%"
            />
            <div class="containerg">
              <h4><b>Pilih Bus dan Tempat Duduk Anda</b></h4>
              <p>
                Pilih bis dan tempat duduk untuk pulang <br />dan pergi, isi
                rincian penumpang dan <br />klik 'Pembayaran'
              </p>
            </div>
          </div>
        </td>
        <td align="center">
          <div class="card">
            <img
              src="assets/images/cara3.png"
              alt="Avatar"
              style="width: 50%"
            />
            <div class="containerg">
              <h4><b>Cara Pembayaran yang Mudah</b></h4>
              <p>
                Pembayaran dapat dilakukan <br />
                melalui transfer ATM, Internet banking.
              </p>
            </div>
          </div>
        </td>
      </tr>
    </table>
    <?php include("dio_footer.php") ?>

    <script src="assets/js/data.js"></script>
  </body>
</html>
