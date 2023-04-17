<?= $this->extend('home/base'); ?>

<?= $this->section('content'); ?>

<section class="mt-0 ">
  <!-- Page Content Goes Here -->

  <!-- Category Top Banner -->

  <!-- Category Top Banner -->

  <div class="container-fluid" data-aos="fade-in">
    <!-- Category Toolbar-->
    <div class="d-flex justify-content-between items-center pt-5 pb-4 flex-column flex-lg-row">
      <div>
        <!-- <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Sneakers</a></li>
            <li class="breadcrumb-item active" aria-current="page">New Releases</li>
          </ol>
        </nav> -->

      </div>
      <div class="d-flex justify-content-end align-items-center mt-4 mt-lg-0 flex-column flex-md-row">


      </div>
    </div> <!-- /Category Toolbar-->

    <!-- Products-->
    <div class="row g-4">
      <?php foreach ($data as $item) : ?>
      <div class="col-12 col-sm-6 col-lg-4">
        <!-- Card Product-->
        <div class="card border border-transparent position-relative overflow-hidden h-100 transparent">
          <div class="card-img position-relative">
            <div class="card-badges">
              <span class="badge badge-card"><span class="f-w-2 f-h-2 bg-danger rounded-circle d-block me-1"></span>
                <?= $item['kategori_barang']; ?></span>
            </div>
            <span class="position-absolute top-0 end-0 p-2 z-index-20 text-muted"><i class="ri-heart-line"></i></span>
            <picture class="position-relative overflow-hidden d-block bg-light">
              <img class="w-100 img-fluid position-relative z-index-10" title=""
                src="<?= base_url('uploads/' . $item['gambar_barang']); ?>" alt="">
            </picture>
            <div class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2">
              <button onclick="add_item('<?= $item['id_barang'] ?>', <?= $item['stok_barang'] ?>)"
                class="btn btn-quick-add"><i class="ri-add-line me-2"></i> Lihat Detail</button>
            </div>
          </div>
          <div class="card-body px-0">
            <a class="text-decoration-none link-cover"
              href="<?= base_url('Detail/' . $item['id_barang']); ?>"><?= $item['nama_barang']; ?></a>
            <small class="text-muted d-block">Stok : <?= $item['stok_barang']; ?></small>
            <p class="mt-2 mb-0 small">Rp. <?= $item['harga_barang']; ?></p>
          </div>
        </div>
        <!--/ Card Product-->
      </div>
      <?php endforeach ?>
    </div>
    <!-- / Products-->

    <!-- Pagination-->
    <?= $pager->links('barang', 'kategori') ?>
    <!-- / Pagination-->
  </div>

  <!-- /Page Content -->
</section>

<?= $this->endSection(); ?>

<?= $this->section('script'); ?>

<script>
function add_item(id, stok) {
  <?php if (!isset($_SESSION['logged_in_pelanggan']) or $_SESSION['logged_in_pelanggan'] == false) :  ?>
  swal.fire({
    title: "Silahkan login dahulu untuk melakukan transaksi!",
    icon: "info",
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
  }).then((willLogin) => {
    if (willLogin.isConfirmed) {
      window.location.replace("<?= base_url('Auth/User') ?>")
    }
  });
  <?php endif; ?>

  <?php if (isset($_SESSION['logged_in_pelanggan']) and $_SESSION['logged_in_pelanggan'] == true) : ?>
  if (stok === 0) {
    return swal.fire({
      title: "Stok produk kosong, tidak dapat menambahkan kekeranjang!",
      icon: "info",
    });
  }

  swal.fire({
      title: "Masukkan Item ke keranjang?",
      icon: "info",
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
    })
    .then((willLogin) => {
      if (willLogin.isConfirmed) {
        $.ajax({
          method: "POST",
          url: "/add_item",
          data: {
            'id': parseInt(id)
          },
          success: function(response) {
            swal.fire({
              title: "Item berhasil masuk ke Keranjang, pergi ke halaman Keranjang?",
              icon: "info",
              buttons: true,
            }).then((isSuccess) => {
              if (isSuccess) {
                window.location.replace("<?= base_url('Keranjang') ?>")
              }
            });
          },
          error: function(response) {
            swal(response.error);
          }
        });
      } else {
        swal.fire("Item tidak ditambahkan ke Keranjang!");
      }
    });
  <?php endif; ?>
}
</script>

<?= $this->endSection(); ?>