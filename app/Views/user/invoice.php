<?= $this->extend('user/base'); ?>

<?= $this->section('content'); ?>

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Invoice</h3>
      </div>

    </div>

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">

            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <h4>
              <i class="fa fa-cart-arrow-down"></i> Toko Fajar 88
              <small class="float-right">Date: <?= $keranjang['tgl_checkout']; ?></small>
            </h4>
            <div class="row invoice-info">
              <div class="col-sm-4 invoice-col">
                Dari
                <address>
                  <strong>Toko Fajar 88</strong><br>
                  <?= $dataToko['alamat_toko']; ?><br>
                  Kontak: <?= $dataToko['kontak_toko']; ?> <br>
                </address>
              </div>
              <!-- /.col -->
              <div class="col-sm-4 invoice-col">
                Kepada
                <address>
                  <strong><?= $_SESSION['fullname']; ?></strong><br>
                  <?= $dataUser['alamat']; ?><br>
                  Kontak: <?= $dataUser['nomor_hp']; ?><br>
                </address>
              </div>
              <!-- /.col -->
              <div class="col-sm-4 invoice-col">
                <b>Invoice #<?= $rowid; ?></b><br>
                <br>
                <b>ID Keranjang:</b> <?= $keranjang['id_keranjang']; ?><br>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Table row -->
            <div class="row">
              <div class="col-12 table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Kuantitas Barang</th>
                      <th>Nama Barang</th>
                      <th>Total Harga/th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1;
                    $total = [];
                    foreach ($data as $item) : ?>
                    <?php $total[] = $item['total_harga']; ?>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><?= $item['nama_produk']; ?></td>
                      <td><?= $item['qty_transaksi']; ?></td>
                      <td>Rp. <?= $item['total_harga']; ?></td>
                      <td><?= $item['transaksi_datetime']; ?></td>
                    </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
              <!-- accepted payments column -->
              <div class="col-md-6">


                <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                  <?php if ($keranjang['metode_pembayaran'] == 'transfer') : ?>
                  Silahkan melakukan transfer ke rekening berikut : <br>
                  <strong>BANK XYZ 1233213332 A/n Toko FAJAR 88</strong>
                  <?php else : ?>
                  Silahkan melakukan pembayaran pada toko dialamat berikut : <br>
                  <strong><?= $dataToko['alamat_toko']; ?></strong>
                  <?php endif ?>
                </p>
              </div>
              <!-- /.col -->
              <div class="col-6">
                <!-- <p class="lead">Amount Due 2/22/2014</p> -->

                <div class="table-responsive">
                  <table class="table">
                    <tr>
                      <th style="width:50%">Subtotal:</th>
                      <td>Rp. <?= $subtotal = array_sum($total); ?> </td>
                    </tr>
                    <tr>
                      <th>Diskon:</th>
                      <td><?= $keranjang['potongan']; ?>%</td>
                    </tr>
                    <tr>
                      <th>Total:</th>
                      <td>Rp. <?php $bayarDiskon = ($subtotal * ($keranjang['potongan'] / 100));
                              $bayar = $subtotal;

                              echo $totalBayar = (isset($keranjang['potongan']) or $keranjang['potongan'] != 0) ? $bayarDiskon : $bayar;
                              ?></td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
            <div class="row no-print">
              <div class="col-12">
                <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i
                    class="fa fa-print"></i> Print</a>
                <?php if ($keranjang['metode_pembayaran'] == 'Transfer') : ?>
                <button <?= $disable = ($keranjang['bukti_bayar'] == null) ? '' : 'disabled'; ?> type="button"
                  class="btn btn-success pull-right" data-toggle="modal" data-target="#myModal"><i
                    class="fa fa-upload"></i> Upload Bukti
                  Pembayaran
                </button>
                <?php endif ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <?php if ($keranjang['bukti_bayar'] == null) : ?>
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Bayar</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="<?= base_url('CustPanel/upload/' . $keranjang['id_keranjang']); ?>" method="post"
          enctype="multipart/form-data">
          <div class="modal-body">
            <div class="mb-3">
              <label for="file" class="font-weight-bold">Bukti Bayar <span class="text-danger">*Max ukuran file
                  2mb</span></label>
              <div class="">
                <input type="file" class="form-control" id="file" name="gambar" accept="image/*">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Upload</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <?php endif; ?>


  <?= $this->endSection(); ?>