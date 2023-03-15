<?= $this->extend('user/base'); ?>

<?= $this->section('content'); ?>

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <!-- <h3>Users <small>Some examples to get you started</small></h3> -->
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">

          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Table Keranjang Belanja</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <!-- <p class="text-muted font-13 m-b-30">
              Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for
              different screen sizes through the dynamic insertion and removal of columns from the table.
            </p> -->

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>~</th>
                  <th>Total Barang</th>
                  <th>Potongan (%)</th>
                  <th>Total Bayar</th>
                  <th>Status</th>
                  <th>Metode Pembayaran</th>
                  <th>-</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1;
                foreach ($keranjang as $item) : ?>
                  <?php
                  switch ($item['status_bayar']) {
                    case 'Menunggu Bukti Bayar':
                      $bg = 'bg-info';
                      break;

                    case 'Menunggu Validasi Bukti Bayar':
                      $bg = 'bg-info';
                      break;

                    case 'Diproses':
                      $bg = 'bg-info';
                      break;

                    case 'Selesai':
                      $bg = 'bg-success';
                      break;

                    case 'Gagal':
                      $bg = 'bg-danger';
                      break;

                    default:
                      $bg = 'bg-danger';
                      break;
                  }; ?>
                  <tr>
                    <td><?= $i++; ?>.</td>
                    <td><?= $item['total_items'] ?></td>
                    <td><?= $item['potongan'] ?>%</td>
                    <td>Rp. <?= $item['total_bayar'] ?></td>
                    <td><span class="badge <?= $bg; ?>"><?= $item['status_bayar'] ?></span></td>
                    <td><?= $item['metode_pembayaran'] ?></td>
                    <td>
                      <?php if ($item['status_bayar'] == 'Selesai') : ?>
                        <!-- TRUE -->
                        <a href="#" type="button" title="Berikan testimoni" style="background-color: darkblue;" class="btn btn-blue text-white"><i class="align-middle" data-feather="star"></i></a>
                      <?php endif ?>
                      <a href="<?= base_url('CustPanel/invoice/' . $item['rowid']); ?>" type="button" title="Lihat Invoice" class="btn btn-warning text-dark"><i class="align-middle" data-feather="file-text"></i></a>

                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>


          </div>
        </div>
      </div>

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Table Transaksi</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <!-- <p class="text-muted font-13 m-b-30">
              Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for
              different screen sizes through the dynamic insertion and removal of columns from the table.
            </p> -->

            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>~</th>
                  <th>Nama Barang</th>
                  <th>Kuantitas</th>
                  <th>Total Harga</th>
                  <th>Tanggal Transaksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $p = 1;
                foreach ($transaksi as $item) : ?>
                  <tr>
                    <td><?= $p++; ?>.</td>
                    <td><?= $item['nama_barang']; ?></td>
                    <td><?= $item['qty_transaksi']; ?></td>
                    <td>Rp. <?= $item['total_harga']; ?></td>
                    <td><?= $item['transaksi_datetime']; ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>


          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>