<?= $this->extend('home/base'); ?>

<?= $this->section('content'); ?>

<section class="mt-0 ">
  <!-- Page Content Goes Here -->

  <!-- Breadcrumbs-->
  <!-- / Breadcrumbs-->

  <div class="container-fluid mt-5">

    <!-- Product Top Section-->
    <div class="row g-9" data-sticky-container>

      <!-- Product Images-->
      <div class="col-12 col-md-6 col-xl-7">
        <div class="row g-3" data-aos="fade-right">
          <div class="col-12">
            <picture>
              <img class="img-fluid" data-zoomable src="<?= base_url('uploads/' . $data['gambar_barang']); ?>"
                alt="HTML Bootstrap Template by Pixel Rocket">
            </picture>
          </div>
        </div>
      </div>
      <!-- /Product Images-->

      <!-- Product Information-->
      <div class="col-12 col-md-6 col-lg-5">
        <div class="sticky-top top-5">
          <div class="pb-3" data-aos="fade-in">
            <div class="d-flex align-items-center mb-3">
              <p class="small fw-bolder text-uppercase tracking-wider text-muted m-0 me-4">
                <?= $data['kategori_barang']; ?></p>
              <div class="d-flex justify-content-start align-items-center disable-child-pointer cursor-pointer"
                data-pixr-scrollto data-target=".reviews">
                <!-- Review Stars Small-->
                <div class="rating position-relative d-table">
                  <div class="position-absolute stars" style="width: 30%">
                    <i class="ri-star-fill text-dark mr-1"></i>
                    <i class="ri-star-fill text-dark mr-1"></i>
                    <i class="ri-star-fill text-dark mr-1"></i>
                    <i class="ri-star-fill text-dark mr-1"></i>
                    <i class="ri-star-fill text-dark mr-1"></i>
                  </div>
                  <div class="stars">
                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                  </div>
                </div> <small class="text-muted d-inline-block ms-2 fs-bolder">(105 reviews)</small>
              </div>
            </div>

            <h1 class="mb-1 fs-2 fw-bold"><?= $data['nama_barang']; ?></h1>
            <div class="d-flex justify-content-between align-items-center">
              <p class="fs-4 m-0">Rp. <?= $data['harga_barang']; ?></p>
            </div>
            <button onclick="add_item('<?= $data['id_barang'] ?>', <?= $data['stok_barang'] ?>)"
              class="btn btn-dark w-100 mt-4 mb-0 hover-lift-sm hover-boxshadow">Add To Shopping Bag</button>

            <!-- Product Highlights-->
            <div class="my-5">
            </div>
            <!-- / Product Highlights-->

            <!-- Product Accordion -->
            <div class="accordion" id="accordionProduct">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    Deskripsi Barang
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                  data-bs-parent="#accordionProduct">
                  <div class="accordion-body">
                    <p class="m-0">
                      <?= $data['desc_barang']; ?>
                    </p>
                  </div>
                </div>
              </div>

            </div>
            <!-- / Product Accordion-->
          </div>
        </div>
      </div>
      <!-- / Product Information-->
    </div>
    <!-- / Product Top Section-->

    <div class="row g-0">

      <!-- / Related Products-->

      <!-- Reviews-->
      <div class="col-12" data-aos="fade-up">
        <h3 class="fs-4 fw-bolder mt-7 mb-4 reviews">Reviews</h3>

        <!-- Review Summary-->
        <div class="bg-light p-5 justify-content-between d-flex flex-column flex-lg-row">
          <div class="d-flex flex-column align-items-center mb-4 mb-lg-0">
            <div
              class="bg-dark text-white f-w-24 f-h-24 d-flex rounded-circle align-items-center justify-content-center fs-2 fw-bold mb-3">
              4.3</div>
            <!-- Review Stars Medium-->
            <div class="rating position-relative d-table">
              <div class="position-absolute stars" style="width: 88%">
                <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                <i class="ri-star-fill text-dark ri-2x mr-1"></i>
              </div>
              <div class="stars">
                <i class="ri-star-fill ri-2x mr-1 text-muted opacity-25"></i>
                <i class="ri-star-fill ri-2x mr-1 text-muted opacity-25"></i>
                <i class="ri-star-fill ri-2x mr-1 text-muted opacity-25"></i>
                <i class="ri-star-fill ri-2x mr-1 text-muted opacity-25"></i>
                <i class="ri-star-fill ri-2x mr-1 text-muted opacity-25"></i>
              </div>
            </div>
          </div>
          <div class="d-flex flex-grow-1 flex-column ms-lg-8">
            <div class="d-flex align-items-center justify-content-start mb-2">
              <div class="f-w-20">
                <!-- Review Stars Small-->
                <div class="rating position-relative d-table">
                  <div class="position-absolute stars" style="width: 100%">
                    <i class="ri-star-fill text-dark mr-1"></i>
                    <i class="ri-star-fill text-dark mr-1"></i>
                    <i class="ri-star-fill text-dark mr-1"></i>
                    <i class="ri-star-fill text-dark mr-1"></i>
                    <i class="ri-star-fill text-dark mr-1"></i>
                  </div>
                  <div class="stars">
                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                  </div>
                </div>
              </div>
              <div class="progress d-flex flex-grow-1 mx-4 f-h-1">
                <div class="progress-bar bg-dark" role="progressbar" style="width: 80%" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="fw-bold small d-block f-w-4 text-end">55</span>
            </div>
            <div class="d-flex align-items-center justify-content-start mb-2">
              <div class="f-w-20">
                <!-- Review Stars Small-->
                <div class="rating position-relative d-table">
                  <div class="position-absolute stars" style="width: 80%">
                    <i class="ri-star-fill text-dark mr-1"></i>
                    <i class="ri-star-fill text-dark mr-1"></i>
                    <i class="ri-star-fill text-dark mr-1"></i>
                    <i class="ri-star-fill text-dark mr-1"></i>
                    <i class="ri-star-fill text-dark mr-1"></i>
                  </div>
                  <div class="stars">
                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                  </div>
                </div>
              </div>
              <div class="progress d-flex flex-grow-1 mx-4 f-h-1">
                <div class="progress-bar bg-dark" role="progressbar" style="width: 60%" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="fw-bold small d-block f-w-4 text-end">32</span>
            </div>
            <div class="d-flex align-items-center justify-content-start mb-2">
              <div class="f-w-20">
                <!-- Review Stars Small-->
                <div class="rating position-relative d-table">
                  <div class="position-absolute stars" style="width: 60%">
                    <i class="ri-star-fill text-dark mr-1"></i>
                    <i class="ri-star-fill text-dark mr-1"></i>
                    <i class="ri-star-fill text-dark mr-1"></i>
                    <i class="ri-star-fill text-dark mr-1"></i>
                    <i class="ri-star-fill text-dark mr-1"></i>
                  </div>
                  <div class="stars">
                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                  </div>
                </div>
              </div>
              <div class="progress d-flex flex-grow-1 mx-4 f-h-1">
                <div class="progress-bar bg-dark" role="progressbar" style="width: 30%" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="fw-bold small d-block f-w-4 text-end">15</span>
            </div>
            <div class="d-flex align-items-center justify-content-start mb-2">
              <div class="f-w-20">
                <!-- Review Stars Small-->
                <div class="rating position-relative d-table">
                  <div class="position-absolute stars" style="width: 40%">
                    <i class="ri-star-fill text-dark mr-1"></i>
                    <i class="ri-star-fill text-dark mr-1"></i>
                    <i class="ri-star-fill text-dark mr-1"></i>
                    <i class="ri-star-fill text-dark mr-1"></i>
                    <i class="ri-star-fill text-dark mr-1"></i>
                  </div>
                  <div class="stars">
                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                  </div>
                </div>
              </div>
              <div class="progress d-flex flex-grow-1 mx-4 f-h-1">
                <div class="progress-bar bg-dark" role="progressbar" style="width: 8%" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="fw-bold small d-block f-w-4 text-end">5</span>
            </div>
            <div class="d-flex align-items-center justify-content-start mb-2">
              <div class="f-w-20">
                <!-- Review Stars Small-->
                <div class="rating position-relative d-table">
                  <div class="position-absolute stars" style="width: 20%">
                    <i class="ri-star-fill text-dark mr-1"></i>
                    <i class="ri-star-fill text-dark mr-1"></i>
                    <i class="ri-star-fill text-dark mr-1"></i>
                    <i class="ri-star-fill text-dark mr-1"></i>
                    <i class="ri-star-fill text-dark mr-1"></i>
                  </div>
                  <div class="stars">
                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                  </div>
                </div>
              </div>
              <div class="progress d-flex flex-grow-1 mx-4 f-h-1">
                <div class="progress-bar bg-dark" role="progressbar" style="width: 5%" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="fw-bold small d-block f-w-4 text-end">1</span>
            </div>
            <p class="mt-3 mb-0 d-flex align-items-start"><i class="ri-chat-voice-line me-2"></i> 105 customers have
              reviewed this product</p>
          </div>
        </div><!-- / Rewview Summary-->

        <!-- Reviews-->
        <div class="row g-6 g-md-8 g-lg-10 my-3">
          <div class="col-12 col-lg-6 col-xxl-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <!-- Review Stars Small-->
              <div class="rating position-relative d-table">
                <div class="position-absolute stars" style="width: 80%">
                  <i class="ri-star-fill text-dark mr-1"></i>
                  <i class="ri-star-fill text-dark mr-1"></i>
                  <i class="ri-star-fill text-dark mr-1"></i>
                  <i class="ri-star-fill text-dark mr-1"></i>
                  <i class="ri-star-fill text-dark mr-1"></i>
                </div>
                <div class="stars">
                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                </div>
              </div>
              <div class="text-muted small">20th September 2020 by DaveD</div>
            </div>
            <p class="fw-bold mb-2">Great fit, great price</p>
            <p class="fs-7">Worth buying this for value for money. But be warned: get one size larger as the medium is
              closer to small medium!</p>
          </div>
          <div class="col-12 col-lg-6 col-xxl-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <!-- Review Stars Small-->
              <div class="rating position-relative d-table">
                <div class="position-absolute stars" style="width: 40%">
                  <i class="ri-star-fill text-dark mr-1"></i>
                  <i class="ri-star-fill text-dark mr-1"></i>
                  <i class="ri-star-fill text-dark mr-1"></i>
                  <i class="ri-star-fill text-dark mr-1"></i>
                  <i class="ri-star-fill text-dark mr-1"></i>
                </div>
                <div class="stars">
                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                </div>
              </div>
              <div class="text-muted small">18th September 2020 by Sandra K</div>
            </div>
            <p class="fw-bold mb-2">Not worth the money</p>
            <p class="fs-7">Loose and poor stiching on the sides. Won&#x27;t buy this again.</p>
          </div>
          <div class="col-12 col-lg-6 col-xxl-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <!-- Review Stars Small-->
              <div class="rating position-relative d-table">
                <div class="position-absolute stars" style="width: 90%">
                  <i class="ri-star-fill text-dark mr-1"></i>
                  <i class="ri-star-fill text-dark mr-1"></i>
                  <i class="ri-star-fill text-dark mr-1"></i>
                  <i class="ri-star-fill text-dark mr-1"></i>
                  <i class="ri-star-fill text-dark mr-1"></i>
                </div>
                <div class="stars">
                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                </div>
              </div>
              <div class="text-muted small">16th September 2020 by MikeS</div>
            </div>
            <p class="fw-bold mb-2">Decent for the price</p>
            <p class="fs-7">I buy these often as they are good quality and value for money.</p>
          </div>
          <div class="col-12 col-lg-6 col-xxl-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <!-- Review Stars Small-->
              <div class="rating position-relative d-table">
                <div class="position-absolute stars" style="width: 85%">
                  <i class="ri-star-fill text-dark mr-1"></i>
                  <i class="ri-star-fill text-dark mr-1"></i>
                  <i class="ri-star-fill text-dark mr-1"></i>
                  <i class="ri-star-fill text-dark mr-1"></i>
                  <i class="ri-star-fill text-dark mr-1"></i>
                </div>
                <div class="stars">
                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                </div>
              </div>
              <div class="text-muted small">14th September 2020 by Frankie</div>
            </div>
            <p class="fw-bold mb-2">Great little T</p>
            <p class="fs-7">Wore this to my local music festival - went down well.</p>
          </div>
          <div class="col-12 col-lg-6 col-xxl-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <!-- Review Stars Small-->
              <div class="rating position-relative d-table">
                <div class="position-absolute stars" style="width: 70%">
                  <i class="ri-star-fill text-dark mr-1"></i>
                  <i class="ri-star-fill text-dark mr-1"></i>
                  <i class="ri-star-fill text-dark mr-1"></i>
                  <i class="ri-star-fill text-dark mr-1"></i>
                  <i class="ri-star-fill text-dark mr-1"></i>
                </div>
                <div class="stars">
                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                </div>
              </div>
              <div class="text-muted small">20th September 2020 by Kevin</div>
            </div>
            <p class="fw-bold mb-2">Great for the BBQ</p>
            <p class="fs-7">Bought this on the off chance it would work well with my skinny jeans, was a great decision.
              Would recommend.</p>
          </div>
          <div class="col-12 col-lg-6 col-xxl-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <!-- Review Stars Small-->
              <div class="rating position-relative d-table">
                <div class="position-absolute stars" style="width: 20%">
                  <i class="ri-star-fill text-dark mr-1"></i>
                  <i class="ri-star-fill text-dark mr-1"></i>
                  <i class="ri-star-fill text-dark mr-1"></i>
                  <i class="ri-star-fill text-dark mr-1"></i>
                  <i class="ri-star-fill text-dark mr-1"></i>
                </div>
                <div class="stars">
                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                </div>
              </div>
              <div class="text-muted small">20th September 2020 by Holly</div>
            </div>
            <p class="fw-bold mb-2">Nothing special but it&#x27;s okay</p>
            <p class="fs-7">It&#x27;s a t-shirt. What can I say, it does the job.</p>
          </div>
        </div>
        <!-- / Reviews-->

        <!-- Review Pagination-->
        <div class="d-flex flex-column f-w-44 mx-auto my-5 text-center">
          <small class="text-muted">Showing 6 of 105 reviews</small>
          <div class="progress f-h-1 mt-3">
            <div class="progress-bar bg-dark" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
              aria-valuemax="100"></div>
          </div>
          <a href="#" class="btn btn-outline-dark btn-sm mt-5 align-self-center py-3 px-4 border-2">Load More</a>
        </div><!-- / Review Pagination-->
      </div>
      <!-- / Reviews-->
    </div>

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
            swal.fire(response.error);
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