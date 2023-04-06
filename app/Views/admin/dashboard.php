<?= $this->extend('admin/base'); ?>

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
          <div class="icon"><i class="fa fa-dropbox"></i>
          </div>
          <div class="count">179</div>

          <h3>Jumlah Barang</h3>
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
          <div class="icon"><i class="fa fa-quote-left"></i>
          </div>
          <div class="count">179</div>

          <h3>Bukti Pembayaran Baru</h3>
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