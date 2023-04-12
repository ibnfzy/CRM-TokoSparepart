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
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>User</h2>
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
                  <th>Nama</th>
                  <th>Jumlah Transaksi</th>
                  <th>Jumlah Keranjang</th>
                  <th>Total Bayar</th>
                </tr>
              </thead>
              <tbody>
                <?php

                use CodeIgniter\Database\RawSql;

                $db = \Config\Database::connect(); ?>
                <?php foreach ($data as $item) : ?>
                  <?php
                  $get = $db->table('transaksi')->select(new RawSql('DISTINCT id_user, COUNT(id_transaksi) AS jumlah_transaksi, SUM(total_harga) as jumlah_bayar'))
                    ->where('id_user', $item['id_user'])->get()->getRowArray();

                  $getk = $db->table('keranjang_beli')->select(new RawSql('DISTINCT id_user, COUNT(id_keranjang_beli) AS jumlah_transaksi, SUM(total_bayar) as jumlah_bayar'))
                    ->where('id_user', $item['id_user'])->get()->getRowArray();

                  ?>
                  <tr>
                    <td><?= $item['fullname']; ?></td>
                    <td><?= $get['jumlah_transaksi']; ?></td>
                    <td><?= $getk['jumlah_transaksi']; ?></td>
                    <td><?= $getk['jumlah_bayar']; ?></td>
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