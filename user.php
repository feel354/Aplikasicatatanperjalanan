<?php
session_start();
if (empty($_SESSION['nik'])) { ?>
    <script type="text/javascript">
    alert("Anda belum login!");
    window.location.assign("index.php");
  </script>
  <?php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Aplikasi Peduli Diri | Dashboard</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="assets/dist/css/adminlte.min.css?v=3.2.0">
  <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper">

<nav class="main-header navbar navbar-expand navbar-white navbar-light">

<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i>
</a>
</li>
</ul>
</nav>


<aside class="main-sidebar sidebar-dark-primary elevation-4">

<a href="assets/index3.html" class="brand-link">
<img src="assets/dist/img/fly.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
<span class="brand-text font-weight-light">Aplikasi Peduli Diri</span>
</a>

<div class="sidebar">

<div class="user-panel mt-3 pb-3 mb-3 d-flex">
<div class="image">
<img src="assets/dist/img/funny1.png" class="img-circle elevation-2" alt="User Image">
</div>
<div class="info">
<a href="#" class="d-block"><?php echo $_SESSION['nama_lengkap']; ?></a>
</div>
</div>


<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
<li class="nav-item">
<a href="" class="nav-link">
<i class="nav-icon fas fa-desktop"></i>
<p>
Dashboard
</p>
</a>
</li>
<li class="nav-item">
<a href="?page=tulis_catatan" class="nav-link">
<i class="nav-icon fas fa-pencil-alt"></i>
<p>
Tulis Catatan
</p>
</a>
</li>
<li class="nav-item">
<a href="?page=riwayat_perjalanan" class="nav-link">
<i class="nav-icon fas fa-clone"></i>
<p>
Riwayat Perjalanan
</p>
</a>
</li>
<li class="nav-item">
<a href="config/logout.php" class="nav-link">
<i class="nav-icon fas fa-power-off"></i>
<p>
Keluar
</p>
</a>
</li>

</ul>
</nav>

</div>

</aside>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1>Catatan Perjalanan</h1>
</div>
</div>
</div>
</section>

<section class="content">

    <?php
    if (!empty(@$_GET['page'])) {
        switch (@$_GET['page']) {
            case 'tulis_catatan':
                include 'tulis_catatan.php';
                break;
            case 'riwayat_perjalanan':
                include 'riwayat_perjalanan.php';
                break;
            default:
                echo "<h3>Halaman tidak ditemukan!</h3>";
                  break;
        }
    }
     ?>


</section>

</div>

<footer class="main-footer">
<div class="float-right d-none d-sm-block">
<b>UKK RPL 2022</b> Aplikasi Peduli Diri
</div>
<strong>Copyright &copy; <?php echo date("Y"); ?> <a href="https://smkmuh1-yog.sch.id/">SMK Muhammadiyah 1 Yogyakarta</a>.</strong> Satria Ardhy P.
</footer>

<aside class="control-sidebar control-sidebar-dark">

</aside>

</div>


<script src="assets/plugins/jquery/jquery.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/dist/js/adminlte.min.js?v=3.2.0"></script>
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>

</body>
</html>
