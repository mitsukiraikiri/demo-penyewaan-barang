<?php
$demo = [
  [
    'title'=>'Halaman Dashboard',
    'image'=>'dashboard.png'
  ],
  [
    'title'=>'Halaman Daftar Pelanggan',
    'image'=>'pelanggan-index.png'
  ],
  [
    'title'=>'Halaman Tambah Pelanggan',
    'image'=>'pelanggan-create.png'
  ],
  [
    'title'=>'Halaman Daftar Barang',
    'image'=>'barang-index.png'
  ],
  [
    'title'=>'Halaman Tambah Barang',
    'image'=>'barang-create.png'
  ],
  [
    'title'=>'Halaman Daftar Penyewaan',
    'image'=>'penyewaan-index.png'
  ],
  [
    'title'=>'Halaman Tambah Penyewaan',
    'image'=>'penyewaan-create.png'
  ],
  [
    'title'=>'Halaman Detail Penyewaan',
    'image'=>'penyewaan-show.png'
  ],
  [
    'title'=>'Halaman Pengembalian',
    'image'=>'pengembalian-index.png'
  ],
  [
    'title'=>'Halaman Pengaturan',
    'image'=>'pengaturan-index.png'
  ],
  [
    'title'=>'Halaman Landing Page',
    'image'=>'landing.png'
  ],
  [
    'title'=>'Halaman Login',
    'image'=>'login.png'
  ]
];
?>
<!doctype html>
<html lang="en">

<head>
  <title>Demo Aplikasi Rental</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body class="py-5 p-lg-5">
  <header>
    <!-- place navbar here -->
  </header>
  <main>
      <div class="container">
        <h2 class="text-center">Demo Aplikasi Rental Barang Berbasis Website</h2>
        <div class="d-flex justify-content-center">
          <a href="mailto:webentercode@gmail.com" class="btn btn-success rounded-0 btn-sm">Hubungi Developer</a>
        </div>
        <div class="text-center mt-3">instagram @entercode_tech</div>
      </div>
    <div class="container mt-5">
        <ul class="list-group">
            <?php foreach ($demo as $item): ?>
              <li class="list-group-item">
                <b><?= $item['title'] ?></b>
                <img src="<?= $item['image'] ?>" class="img-fluid w-100 mt-3">
              </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="container mt-3">
        <ul class="p-0 text-center" style="list-style: none;">
            <li><b>Dibuat Dengan</b></li>
            <li>PHP 8</li>
            <li>Laravel 9</li>
            <li>Bootstrap 5</li>
            <li>Jquery 3</li>
            <li>Database MYSQL</li>
        </ul>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>