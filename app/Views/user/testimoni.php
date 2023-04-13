<?= $this->extend('user/base'); ?>

<?= $this->section('content'); ?>

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <!-- <h3>Users <small>Some examples to get you started</small></h3> -->
        <div class="input-group">
          <a href="<?= base_url('CustPanel/Testimoni/new'); ?>" style="float: right;" class="btn btn-info col-2"><i
              class="fa fa-plus-square-o"></i>Beri Penilaian pada barang</a>
        </div>
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
            <h2>Table Penilaian</h2>
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
                  <th>Nama Produk</th>
                  <th>Bintang</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 0;
                foreach ($data as $item) : ?>
                <?php $db = \Config\Database::connect();
                  $get = $db->table('barang')->where('id_barang', $item['id_barang'])->get()->getRow(); ?>
                <tr>
                  <td><?= $i += 1; ?></td>
                  <td><?= $get->nama_barang; ?></td>
                  <td><?= $item['bintang']; ?></td>
                  <td>
                    <div class="btn-group btn-group-lg" role="group">
                      <a href="<?= base_url('CustPanel/Testimoni/' . $item['id_testimoni'] . '/edit'); ?>" type="button"
                        class="btn btn-info"><i class="align-middle me-2" data-feather="edit"></i></a>
                      <button onclick="deleteData('<?= $item['id_testimoni']; ?>')" type="button"
                        class="btn btn-danger"><i class="align-middle me-2" data-feather="trash-2"></i></button>
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
          url: "Testimoni/" + a,
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