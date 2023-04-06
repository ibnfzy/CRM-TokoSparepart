<?= $this->extend('user/base'); ?>

<?= $this->section('content'); ?>

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <!-- <h3>Plain Page</h3> -->
      </div>

    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-shopping-cart"></i>
          </div>
          <div class="count">179</div>

          <h3>Jumlah Checkout Keranjang</h3>
          <!-- <p>Lorem ipsum psdea itgum rixt.</p> -->
        </div>
      </div>
      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-cart-plus"></i>
          </div>
          <div class="count">179</div>

          <h3>Jumlah Transaksi</h3>
          <!-- <p>Lorem ipsum psdea itgum rixt.</p> -->
        </div>
      </div>
      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-truck"></i>
          </div>
          <div class="count">179</div>

          <h3>Jumlah Transaksi Belum Selesai</h3>
          <!-- <p>Lorem ipsum psdea itgum rixt.</p> -->
        </div>
      </div>
      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-check-square-o"></i>
          </div>
          <div class="count">179</div>

          <h3>Jumlah Transaksi Berhasil</h3>
          <!-- <p>Lorem ipsum psdea itgum rixt.</p> -->
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>