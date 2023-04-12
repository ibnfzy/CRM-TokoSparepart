<?= $this->extend('home/base'); ?>

<?= $this->section('content'); ?>

<section class="mt-0 overflow-hidden ">
  <!-- Page Content Goes Here -->

  <!-- / Top banner -->
  <section class="vh-75 vh-lg-60 container-fluid rounded overflow-hidden pb-2" data-aos="fade-in">
    <!-- Swiper Info -->
    <div class="swiper-container overflow-hidden rounded h-100 bg-light" data-swiper data-options='{
              "spaceBetween": 0,
              "slidesPerView": 1,
              "effect": "fade",
              "speed": 1000,
              "loop": true,
              "parallax": true,
              "observer": true,
              "observeParents": true,
              "lazy": {
                "loadPrevNext": true
              },
              "autoplay": {
                  "delay": 5000,
                  "disableOnInteraction": true
              },
              "pagination": {
                "el": ".swiper-pagination",
                "clickable": true
                }
              }'>
      <div class="swiper-wrapper">

        <?php if ($corousel_type == 'Rekomendasi') : ?>
          <?php $q = 1; ?>
          <?php foreach ($corousel as $item) : ?>
            <div class="swiper-slide position-relative h-100 w-100">
              <div class="w-100 h-100 overflow-hidden position-absolute z-index-1 top-0 start-0 end-0 bottom-0">
                <div class="w-100 h-100 bg-img-cover bg-pos-center-center overflow-hidden" data-swiper-parallax="-100" style=" will-change: transform; background-image: url(<?= base_url('uploads/' . $item['gambar']) ?>)">
                </div>
              </div>
              <div class="container position-relative z-index-10 d-flex h-100 align-items-start flex-column justify-content-center">
                <p class="title-small text-white opacity-75 mb-0" data-swiper-parallax="-100">Rekomendasi</p>
                <h2 class="display-3 tracking-wide fw-bold text-uppercase tracking-wide text-white" data-swiper-parallax="100">

                  <?= $fajar = (fmod($q, 2) == 1) ? '<span class="text-outline-light">Toko Fajar</span> 88' : 'Toko Fajar<span class="text-outline-light"> 88</span>'; ?>
                </h2>
                <div data-swiper-parallax-y="-25">
                  <a href="<?= base_url(); ?>/category.html" class="btn btn-psuedo text-white" role="button">Lihat
                    Barang</a>
                </div>
              </div>
            </div>
            <?php $q++; ?>
          <?php endforeach ?>
        <?php endif ?>

        <?php if ($corousel_type == 'Top Selling') : ?>
          <?php $q = 1; ?>
          <?php foreach ($corousel as $item) : ?>
            <div class="swiper-slide position-relative h-100 w-100">
              <div class="w-100 h-100 overflow-hidden position-absolute z-index-1 top-0 start-0 end-0 bottom-0">
                <div class="w-100 h-100 bg-img-cover bg-pos-center-center overflow-hidden" data-swiper-parallax="-100" style=" will-change: transform; background-image: url(<?= base_url('uploads/' . $item['gambar']) ?>)">
                </div>
              </div>
              <div class="container position-relative z-index-10 d-flex h-100 align-items-start flex-column justify-content-center">
                <p class="title-small text-white opacity-75 mb-0" data-swiper-parallax="-100">Top Selling</p>
                <h2 class="display-3 tracking-wide fw-bold text-uppercase tracking-wide text-white" data-swiper-parallax="100">
                  <?= $fajar = (fmod($q, 2) == 1) ? '<span class="text-outline-light">Toko Fajar</span> 88' : 'Toko Fajar<span class="text-outline-light"> 88</span>'; ?>
                </h2>
                <div data-swiper-parallax-y="-25">
                  <a href="<?= base_url(); ?>/category.html" class="btn btn-psuedo text-white" role="button">Lihat
                    Barang</a>
                </div>
              </div>
            </div>
            <?php $q++; ?>
          <?php endforeach ?>
        <?php endif ?>

        <!-- Slide-->

        <!-- /Slide-->

      </div>

      <div class="swiper-pagination swiper-pagination-bullet-light"></div>

    </div>
    <!-- / Swiper Info-->
  </section>
  <!--/ Top Banner-->
  <hr>

  <div class="py-3 bg-img-cover position-relative overflow-hidden bg-pos-center-center rounded-0" style="background-color: white;">
    <div class="container-fluid position-relative z-index-20" data-aos="fade-right" data-aos-delay="300">
      <h1 class="fw-bold display-6 mb-4">Rekomendasi Barang</h1>
      <div class="col-12 col-md-6">
        <!-- <p class="text-white mb-0 fs-5">
          When it's time to head out and get your Kicks on, have a look at our latest arrivals. Whether you're into
          Nike, Adidas, Dunks or New Balance, we really have something for everyone!
        </p> -->
      </div>
    </div>
  </div>

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
      <?php foreach ($rekom as $item) : ?>
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
                <img class="w-100 img-fluid position-relative z-index-10" title="" src="<?= base_url('uploads/' . $item['gambar_barang']); ?>" alt="">
              </picture>
              <div class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2">
                <button onclick="add_item('<?= $item['id_barang'] ?>', <?= $item['stok_barang'] ?>)" class="btn btn-quick-add"><i class="ri-add-line me-2"></i> Quick Add</button>
              </div>
            </div>
            <div class="card-body px-0">
              <a class="text-decoration-none link-cover" href="<?= base_url('Detail/' . $item['id_barang']); ?>"><?= $item['nama_barang']; ?></a>
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