<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Profil Admin</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/galeri.css">
  </head>
  <body>
    <header class="ob">
      <div class="atas">
        <div id="logo">
          <img src="<?= base_url() ?>assets/hiya.png">

        </div>
        <div class="nama">
          <h2>Clarissa Sanindita R</h2>
        </div>
        <nav>
          <ul>
            <li> <a href="<?=base_url()?>index.php/welcome/utama"> Alamat  </a></li>
             <li> <a href="<?=base_url()?>index.php/welcome/event">  Impian  </a></li>
            <li> <a href="<?=base_url()?>index.php/welcome/contact">  Contact  </a></li>
            <li> <a href="<?=base_url()?>index.php/welcome/profil">  Biodata  </a></li>
          </ul>
        </nav>

      </div>
    </header>
  <div class="judul">
    <h2>My Gallery</h2>
  </div>

  <div class="slide" style="max-width:800px">
    <img class="mySlides" src="<?= base_url() ?>assets/2.jpg">
    <img class="mySlides" src="<?= base_url() ?>assets/3.jpg">
    <img class="mySlides" src="<?= base_url() ?>assets/4.jpg">
    <img class="mySlides" src="<?= base_url() ?>assets/5.jpg">
  </div>

  <div class="buton">
      <button class="prev" onclick="plusDivs(-1)">❮ Prev</button>
      <button class="next" onclick="plusDivs(1)">Next ❯</button>
  </div>

  <script>
  var slideIndex = 1;
  showDivs(slideIndex);

  function plusDivs(n) {
    showDivs(slideIndex += n);
  }

  function currentDiv(n) {
    showDivs(slideIndex = n);
  }

  function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" w3-red", "");
    }
    x[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " w3-red";
  }
  </script>

  </body>
</html>
