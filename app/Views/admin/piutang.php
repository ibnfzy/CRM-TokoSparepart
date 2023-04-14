<?= $this->extend('admin/base'); ?>

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
            <h2>Table Piutang</h2>
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
                foreach ($data as $item) : ?>
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
                    <td><?= $item['total_barang'] ?></td>
                    <td><?= $item['potongan'] ?>%</td>
                    <td>Rp. <?= $item['total_bayar'] ?></td>
                    <td><span class="badge <?= $bg; ?>"><?= $item['status_bayar'] ?></span></td>
                    <td><?= $item['metode_pembayaran'] ?></td>
                    <td>
                      <a href="<?= base_url('U/Transaksi/' . $item['id_user'] . '/' . $item['rowid']); ?>" type="button" title="Lihat Invoice" class="btn btn-warning text-dark"><i class="align-middle" data-feather="file-text"></i>
                        Invoice</a>

                    </td>
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