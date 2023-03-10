<!doctype html>
<html lang="en">

<!-- Head -->

<head>
  <!-- Page Meta Tags-->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keywords" content="">

  <!-- Custom Google Fonts-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600&family=Roboto:wght@300;400;700&display=auto"
    rel="stylesheet">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url(); ?>/assets/images/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url(); ?>/assets/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(); ?>/assets/images/favicon/favicon-16x16.png">
  <link rel="mask-icon" href="<?= base_url(); ?>/assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <script src="<?= base_url(''); ?>/swal/dist/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="<?= base_url(''); ?>/swal/dist/sweetalert2.min.css">
  <link rel="stylesheet" href="<?= base_url('/'); ?>/toastr/build/toastr.min.css">

  <!-- Vendor CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/libs.bundle.css" />

  <!-- Main CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/theme.bundle.css" />

  <!-- Fix for custom scrollbar if JS is disabled-->
  <noscript>
    <style>
    /**
          * Reinstate scrolling for non-JS clients
          */
    .simplebar-content-wrapper {
      overflow: auto;
    }
    </style>
  </noscript>

  <!-- Page Title -->
  <title>Toko Fajar 88</title>

</head>

<body class="">

  <!-- Navbar -->
  <!-- Navbar -->
  <?= $this->include('home/layout/navbar'); ?>
  <!-- / Navbar-->
  <!-- / Navbar-->

  <!-- Main Section-->
  <?= $this->renderSection('content'); ?>
  <!-- / Main Section-->

  <!-- Footer -->
  <?= $this->include('home/layout/footer'); ?>
  <!-- / Footer-->


  <!-- Theme JS -->
  <!-- Vendor JS -->
  <script src="<?= base_url(); ?>/assets/js/jquery-1.12.0.min.js"></script>
  <script src="<?= base_url(); ?>/assets/js/vendor.bundle.js"></script>

  <script src="<?= base_url('/'); ?>/toastr/build/toastr.min.js"></script>

  <!-- Theme JS -->
  <script src="<?= base_url(); ?>/assets/js/theme.bundle.js"></script>

  <?= $this->renderSection('script'); ?>

  <script>
  toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": true,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "showDuration": "600",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }
  </script>

  <?php ?>

  <?php
  if (session()->getFlashdata('dataMessage')) {
    foreach (session()->getFlashdata('dataMessage') as $item) {
      echo '<script>toastr["' .
        session()->getFlashdata('type-status') . '"]("' . $item . '")</script>';
    }
  }
  if (session()->getFlashdata('message')) {
    echo '<script>toastr["' .
      session()->getFlashdata('type-status') . '"]("' . session()->getFlashdata('message') . '")</script>';
  }
  ?>
</body>

</html>