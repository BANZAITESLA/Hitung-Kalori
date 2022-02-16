<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  require_once('./App/head.html');
  require_once('./App/init.php');
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
          <li><a href="index.php">Beranda</a></li>
          <li><a href="hitung-kalori.php">Hitung Kalori</a></li>
          <li><a class="active" href="daftar-makanan.php">Daftar Makanan</a></li>
          <li><a href="about.php">Tentang Kami</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  <main id="main" data-aos="fade-in">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Daftar Makanan</h2>
        <p>Berikut daftar makanan beserta kalori untuk tidap satuan gramnya</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <div class="container my-5">
      <table id="tabelMakanan" class="display table table-striped pt-3">
        <thead>
          <tr style="text-align: center;">
            <th>No Urut</th>
            <th>Nama Makanan</th>
            <th>Berat (gr)</th>
            <th>Kalori (kal)</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $tampil = new Makanan(0);
          ?>
        </tbody>
      </table>
    </div>
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    var tabelMakanan = $('#tabelMakanan').DataTable({
      order: [
        [1, 'asc']
      ],
      "language": {
        "url": "./assets/js/id.json",
      },
      "columnDefs": [{
        "targets": 0,
        "orderable": false
      }, ]
    });

    //nie buat no urut otomatis
    tabelMakanan.on('order.dt search.dt', function() {
      tabelMakanan.column(0, {
        search: 'applied',
        order: 'applied'
      }).nodes().each(function(cell, i) {
        cell.innerHTML = i + 1;
      });
    }).draw();
  </script>
</body>

</html>