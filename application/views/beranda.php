<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Beranda</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/stylee.css">
    <style media="screen">


    </style>
  </head>
  <body>
    <header class="ob">
      <div class="atas">
        <div id="logo">
          <img src="<?= base_url() ?>assets/hiya.png">
        </div>
        <nav>
          <ul>
            <li> <a href="<?=base_url()?>index.php/welcome/utama"> Alamat  </a></li>
            <li> <a href="<?=base_url()?>index.php/welcome/event">  Impian  </a></li>
            <li> <a href="<?=base_url()?>index.php/welcome/gallery">  Galeri  </a></li>
            <li> <a href="<?=base_url()?>index.php/welcome/contact">  Contact  </a></li>
            <li> <a href="<?=base_url()?>index.php/welcome/profil">  Biodata  </a></li>
          </ul>
        </nav>

      </div>
    </header>
    <div class="bawah">
      <h1 class="selamat">Selamat Datang <?= $nama_lengkap?></h1>
      <h1 class="tengah">Berperilakulah selayaknya seorang <?=$jenis_kelamin?> </h1>
      <p>Halo teman teman, sudah kenal saya belum? kata pepatah sih tak kenal maka tak sayang. Jadi perkenalkan nama saya Clarissa Sanindita Reikisyifa. Selamat datang di web saya. Disini saya
      akan memperkenalkan diri saya lebih detail. </p>

    </div>

    <img src="assets/back.png" alt="">
  </body>
</html>
