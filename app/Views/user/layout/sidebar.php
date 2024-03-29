<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="index.html" class="site_title"><i class="fa fa-shopping-cart"></i> <span>Toko Fajar 88</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">
      </div>
      <div class="profile_info">
        <span>Welcome,</span>
        <h2><?= $_SESSION['fullname']; ?></h2>
      </div>
      <div class="clearfix"></div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
          <li><a href="<?= base_url('CustPanel'); ?>"><i class="fa fa-home"></i> Home </a></li>
          <li><a href="<?= base_url('CustPanel/transaksi'); ?>"><i class="fa fa-dollar"></i> Transaksi </a></li>
          <li><a href="<?= base_url('CustPanel/Testimoni'); ?>"><i class="fa fa-microphone"></i> Testimoni / Feedback
            </a></li>
        </ul>
      </div>

      <!-- <div class="menu_section">
        <h3>Live On</h3>
        <ul class="nav side-menu">
          
          <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="#level1_1">Level One</a>
              <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li class="sub_menu"><a href="level2.html">Level Two</a>
                  </li>
                  <li><a href="#level2_1">Level Two</a>
                  </li>
                  <li><a href="#level2_2">Level Two</a>
                  </li>
                </ul>
              </li>
              <li><a href="#level1_2">Level One</a>
              </li>
            </ul>
          </li>

        </ul>
      </div> -->

    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
      <a data-toggle="tooltip" data-placement="top" title="Settings" href="<?= base_url('CustPanel/informasi'); ?>">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <!-- <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span> -->
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Lock">
        <!-- <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span> -->
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?= base_url('Auth/User/Destroy'); ?>">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
    </div>
    <!-- /menu footer buttons -->
  </div>
</div>