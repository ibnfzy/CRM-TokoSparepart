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
            <a href="<?= base_url('U/Barang/new'); ?>" style="float: right;" class="btn btn-info col-2"><i
                class="fa fa-plus-square-o"></i>Tambah Data</a>
          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Barang</h2>
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

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap"
              cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>~</th>
                  <th>Nama Barang</th>
                  <th>Harga</th>
                  <th>Stok</th>
                  <th>Kategori</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($barang as $item) : ?>
                <tr>
                  <td><?= $item['id_barang']; ?></td>
                  <td><img src="<?= base_url('uploads/' . $item['gambar_barang']); ?>"
                      alt="Gambar Produk <?= $item['nama_barang']; ?>" width="100">
                    <?= $item['nama_barang']; ?></td>
                  <td>Rp. <?= $item['harga_barang']; ?></td>
                  <td><?= $item['stok_barang']; ?></td>
                  <td><?= $item['kategori_barang']; ?></td>
                  <td>
                    <div class="btn-group btn-group-lg" role="group">
                      <a href="<?= base_url('U/Barang/' . $item['id_barang'] . '/edit'); ?>" type="button"
                        class="btn btn-info"><i class="ti-pencil"></i></a>
                      <button onclick="deleteData('<?= $item['id_barang']; ?>')" type="button" class="btn btn-danger"><i
                          class="fa fa-trash"></i>></button>
                    </div>
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

<?= $this->section('script'); ?>
<script>
function deleteData(a) {
  swal({
      title: "Apa kamu yakin?",
      text: "Data akan terhapus",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        $.ajax({
          method: "DELETE",
          url: "Barang/" + a,
          success: function(response) {
            swal("Data Telah Terhapus", {
              icon: "success",
            }).then(() => {
              window.location.reload()
            })
          },
          error: function(response) {
            swal("Terjadi kesalahan pada AJAX", {
              icon: "error",
            })
          }
        });
      }
    });
}
</script>
<?= $this->endSection(); ?>