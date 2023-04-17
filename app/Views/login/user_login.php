<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Login Page</title>

  <!-- Bootstrap -->
  <link href="<?= base_url(); ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?= base_url(); ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('/'); ?>/toastr/build/toastr.min.css">
  <!-- NProgress -->
  <link href="<?= base_url(); ?>/vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- Animate.css -->
  <link href="<?= base_url(); ?>/vendors/animate.css/animate.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="<?= base_url(); ?>/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
  <div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
          <form action="<?= base_url('Auth/User'); ?>" method="POST">
            <h1>Login Form</h1>
            <div>
              <input name="username" type="text" class="form-control" placeholder="Username" required="" />
            </div>
            <div>
              <input name="password" type="password" class="form-control" placeholder="Password" required="" />
            </div>
            <div>
              <button type="submit" class="btn btn-primary submit">Log in</button>
              <!-- <a class="reset_pass" href="#">Lost your password?</a> -->
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">New to site?
                <a href="#signup" class="to_register"> Create Account </a>
              </p>

              <!-- <div class="clearfix"></div>
              <br />

              <div>
                <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
              </div> -->
            </div>
          </form>
        </section>
      </div>

      <div id="register" class="animate form registration_form">
        <section class="login_content">
          <form action="<?= base_url('Auth/User/Registration'); ?>" method="POST">
            <h1>Create Account</h1>
            <div>
              <input name="fullname" type="text" class="form-control" placeholder="Fullname" required="" />
            </div>
            <div>
              <input name="username" type="text" class="form-control" placeholder="Username" required="" />
            </div>
            <div>
              <input name="password" type="password" class="form-control" placeholder="Password" required="" />
            </div>
            <div>
              <input name="confirmPassword" type="password" class="form-control" placeholder="Konfirmasi Password"
                required="" />
            </div>
            <div>
              <button class="btn btn-default submit" type="submit">Submit</button>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">Already a member ?
                <a href="#signin" class="to_register"> Log in </a>
              </p>

              <!-- <div class="clearfix"></div>
              <br />

              <div>
                <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
              </div> -->
            </div>
          </form>
        </section>
      </div>
    </div>
  </div>
  <script src="<?= base_url(); ?>assets/js/jquery-1.12.0.min.js"></script>
  <script src="<?= base_url('/'); ?>/toastr/build/toastr.min.js"></script>

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