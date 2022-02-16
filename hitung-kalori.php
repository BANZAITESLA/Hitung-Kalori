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
          <li><a class="active" href="hitung-kalori.php">Hitung Kalori</a></li>
          <li><a href="daftar-makanan.php">Daftar Makanan</a></li>
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
        <h2>Hitung Kalori Harian</h2>
        <p>Hitung kalori harian yang pas untukmu, agar tubuh dapat mempertahankan kondisi idealnya</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Input ======= -->
    <section id="form">
      <form class="mx-5" action='#hasil' method="POST">
        <div class="row mb-3">
          <label for="inputBB" class="col-sm-2 col-form-label">Berat Badan</label>
          <div class="col-sm-10">
            <div class="input-group me-3">
              <input type="number" min=1 max=300 placeholder='Masukkan berat badan Anda' class="form-control" name='bb' id="inputBB" required>
              <span class="input-group-text" id="basic-addon2">kg</span>
            </div>
            <span class="form-text">rentang berat badan 1 - 300 kg.</span>
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputTB" class="col-sm-2 col-form-label">Tinggi Badan</label>
          <div class="col-sm-10">
            <div class="input-group me-3">
              <input type="number" min=1 max=300 placeholder='Masukkan tinggi badan Anda' class="form-control" name='tb' id="inputTB" required>
              <span class="input-group-text" id="basic-addon2">cm</span>
            </div>
            <div class="col-auto">
              <span class="form-text">rentang tinggi badan 1 - 300 cm.</span>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputUmur" class="col-sm-2 col-form-label">Umur</label>
          <div class="col-sm-10">
            <div class="input-group me-3">
              <input type="number" min=1 max=200 placeholder='Masukkan umur Anda' class="form-control" name='umur' id="inputUmur" required>
              <span class="input-group-text" id="basic-addon2">tahun</span>
            </div>
            <div class="col-auto">
              <span class="form-text">rentang umur 1 - 200 tahun.</span>
            </div>
          </div>
        </div>
        <fieldset class="row mb-3">
          <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="jk" id="gridRadios1" value="Laki-Laki" required>
              <label class="form-check-label" for="gridRadios1">Laki-Laki</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="jk" id="gridRadios2" value="Perempuan">
              <label class="form-check-label" for="gridRadios2">Perempuan</label>
            </div>
          </div>
        </fieldset>
        <div class=" d-md-flex justify-content-md-center">
          <button type="submit" name='hitung' id="hitung" class="btn btn-primary">Hitung Kalori</button>
        </div>
      </form>
    </section>

    <?php
    if (isset($_POST['hitung'])) { ?>
      <section id='hasil'>
        <div class="breadcrumbs">
          <div class="container">
            <h3>Hasil Hitung Kalori Harian</h3>
            <?php
            $jk = $_POST['jk'];
            $umur = $_POST['umur'];
            $tb = $_POST['tb'];
            $bb = $_POST['bb'];

            $user = new User($jk, $umur, $tb, $bb);
            echo '<p> Berdasarkan data yang Anda input, jenis kelamin ' . $jk . ' dengan umur ' . $umur . ' tahun, serta berat badan = ' . $bb . ' kg dan tinggi badan = ' . $tb . ' cm';
            echo ",<br> maka jumlah kalori harian yang Anda butuhkan sebanyak <b>{$user->hitungKalori()} kkal </b></p>";
            ?>
            <div class=" d-md-flex justify-content-md-center mt-5">
              <button type="button" name='rec' id="rec" class="btn btn-success">Dapatkan Rekomendasi Makanan</button>
            </div>
          </div>
        </div>
      </section>
      <section id="rek" style="display: none;">

        <div class="container my-5">
          <h3 style="margin-bottom: 20px;">Rekomendasi Makanan</h3>
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
              $makanan = new Makanan($user->hitungKalori());
              ?>
            </tbody>
          </table>
        </div>
      </section>
    <?php
    }
    ?>
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
    $('#rec').on('click', function() {
      window.location.href = '#rek';
      document.getElementById("rek").style.display = "";
    })

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