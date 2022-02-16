<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  require_once('./App/head.html');
  ?>
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto">
        <a href="index.php"><i class="bx bxs-bowl-rice"></i>KKAL!</a>
      </h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="index.php">Beranda</a></li>
          <li><a href="hitung-kalori.php">Hitung Kalori</a></li>
          <li><a href="daftar-makanan.php">Daftar Makanan</a></li>
          <li><a href="about.php">Tentang Kami</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  
  <!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Berat Badan Ideal,<br>Sehat Kemudian</h1>
      <h2>Hitung kalori harian dan rekomendasi makanan yang pas untukmu!</h2>
      <a href="hitung-kalori.php" class="btn-get-started">Hitung Kalori</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/about1.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>KKAL! - Aplikasi Penghitung Kalori Harian</h3>
            <p class="fst-italic">Aplikasi ini cocok bagi Anda yang ingin mengubah pola makan ideal dan menjaga kesehatan tubuh.</p>
            <p>Berikut manfaat yang bisa Anda dapatkan dengan menjaga asupan kalori harian:</p>
            <ul>
              <li><i class='bx bxs-check-circle'></i> Mencegah Obesitas</li>
              <li><i class='bx bxs-check-circle'></i> Mendukung aktivitas agar lebih produktif</li>
              <li><i class='bx bxs-check-circle'></i> Melancarkan pencernaan</li>
              <li><i class='bx bxs-check-circle'></i> Mempengaruhi kondisi psikologis</li>
            </ul>
            <p>Dann masih banyak lagi...</p>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Mengapa Pilih KKAL! ?</h3>
              <p>KKAL! di design untuk dapat melakukan perhitungan kalori dan memberikan rekomendasi makanan secara tepat berdasarkan riset yang telah tim kami lakukan. Selain itu, kami juga menyediakan daftar makanan yang dilengkapi banyak informasi.</p>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class='bx bx-calculator'></i>
                    <h4><a href="hitung-kalori.php">Hitung Kalori Harian</a></h4>
                    <p>Hitung kalori yang dibutuhkan tubuhmu dengan perhitungan akurat</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class='bx bx-message-rounded-check'></i>
                    <h4><a href="hitung-kalori.php">Rekomendasi Makanan</a></h4>
                    <p>Dapatkan rekomendasi makanan sesuai kebutuhanmu</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class='bx bx-food-menu'></i>
                    <h4><a href="daftar-makanan.php">Daftar Makanan</a></h4>
                    <br>
                    <p>Dapatkan informasi kalori makanan</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>
      </div>
    </section><!-- End Why Us Section -->


    </div>
    </section><!-- End Features Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container d-md-flex py-4 justify-content-center align-self-center">
      Created by <a href="about.php" style="font-weight: 700;"> &nbsp;SuperManlyMan</i></a>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>