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
              <img class="img-fluid" data-zoomable src="<?= base_url('uploads/' . $data['gambar_barang']); ?>" alt="HTML Bootstrap Template by Pixel Rocket">
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
              <div class="d-flex justify-content-start align-items-center disable-child-pointer cursor-pointer" data-pixr-scrollto data-target=".reviews">
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
            <button onclick="add_item('<?= $data['id_barang'] ?>', <?= $data['stok_barang'] ?>)" class="btn btn-dark w-100 mt-4 mb-0 hover-lift-sm hover-boxshadow">Add To Shopping Bag</button>

            <!-- Product Highlights-->
            <div class="my-5">
            </div>
            <!-- / Product Highlights-->

            <!-- Product Accordion -->
            <div class="accordion" id="accordionProduct">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Deskripsi Barang
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionProduct">
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

      <!-- Related Products-->
      <div class="col-12" data-aos="fade-up">
        <h3 class="fs-4 fw-bolder mt-7 mb-4">Rekomendasi</h3>
        <!-- Swiper Latest -->
        <div class="swiper-container" data-swiper data-options='{
                        "spaceBetween": 10,
                        "loop": true,
                        "autoplay": {
                          "delay": 5000,
                          "disableOnInteraction": false
                        },
                        "navigation": {
                          "nextEl": ".swiper-next",
                          "prevEl": ".swiper-prev"
                        },   
                        "breakpoints": {
                          "600": {
                            "slidesPerView": 2
                          },
                          "1024": {
                            "slidesPerView": 3
                          },       
                          "1400": {
                            "slidesPerView": 4
                          }
                        }
                      }'>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <!-- Card Product-->
              <div class="card border border-transparent position-relative overflow-hidden h-100 transparent">
                <div class="card-img position-relative">
                  <div class="card-badges">
                    <span class="badge badge-card"><span class="f-w-2 f-h-2 bg-danger rounded-circle d-block me-1"></span> Sale</span>
                  </div>
                  <span class="position-absolute top-0 end-0 p-2 z-index-20 text-muted"><i class="ri-heart-line"></i></span>
                  <picture class="position-relative overflow-hidden d-block bg-light">
                    <img class="w-100 img-fluid position-relative z-index-10" title="" src="./assets/images/products/product-1.jpg" alt="">
                  </picture>
                  <div class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2">
                    <button class="btn btn-quick-add"><i class="ri-add-line me-2"></i> Quick Add</button>
                  </div>
                </div>
                <div class="card-body px-0">
                  <a class="text-decoration-none link-cover" href="./product.html">Nike Air VaporMax 2021</a>
                  <small class="text-muted d-block">4 colours, 10 sizes</small>
                  <p class="mt-2 mb-0 small"><s class="text-muted">$329.99</s> <span class="text-danger">$198.66</span>
                  </p>
                </div>
              </div>
              <!--/ Card Product-->
            </div>
            <div class="swiper-slide">
              <!-- Card Product-->
              <div class="card border border-transparent position-relative overflow-hidden h-100 transparent">
                <div class="card-img position-relative">
                  <div class="card-badges">
                    <span class="badge badge-card"><span class="f-w-2 f-h-2 bg-success rounded-circle d-block me-1"></span> New In</span>
                  </div>
                  <span class="position-absolute top-0 end-0 p-2 z-index-20 text-muted"><i class="ri-heart-line"></i></span>
                  <picture class="position-relative overflow-hidden d-block bg-light">
                    <img class="w-100 img-fluid position-relative z-index-10" title="" src="./assets/images/products/product-2.jpg" alt="">
                  </picture>
                  <div class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2">
                    <button class="btn btn-quick-add"><i class="ri-add-line me-2"></i> Quick Add</button>
                  </div>
                </div>
                <div class="card-body px-0">
                  <a class="text-decoration-none link-cover" href="./product.html">Nike ZoomX Vaporfly</a>
                  <small class="text-muted d-block">2 colours, 4 sizes</small>
                  <p class="mt-2 mb-0 small">$275.45</p>
                </div>
              </div>
              <!--/ Card Product-->
            </div>
            <div class="swiper-slide">
              <!-- Card Product-->
              <div class="card border border-transparent position-relative overflow-hidden h-100 transparent">
                <div class="card-img position-relative">
                  <div class="card-badges">
                    <span class="badge badge-card"><span class="f-w-2 f-h-2 bg-secondary rounded-circle d-block me-1"></span> Sold Out</span>
                  </div>
                  <span class="position-absolute top-0 end-0 p-2 z-index-20 text-muted"><i class="ri-heart-line"></i></span>
                  <picture class="position-relative overflow-hidden d-block bg-light">
                    <img class="w-100 img-fluid position-relative z-index-10" title="" src="./assets/images/products/product-3.jpg" alt="">
                  </picture>
                </div>
                <div class="card-body px-0">
                  <a class="text-decoration-none link-cover" href="./product.html">Nike Blazer Mid &#x27;77</a>
                  <small class="text-muted d-block">5 colours, 6 sizes</small>
                  <p class="mt-2 mb-0 small text-muted">Sold Out</p>
                </div>
              </div>
              <!--/ Card Product-->
            </div>
            <div class="swiper-slide">
              <!-- Card Product-->
              <div class="card border border-transparent position-relative overflow-hidden h-100 transparent">
                <div class="card-img position-relative">
                  <div class="card-badges">
                  </div>
                  <span class="position-absolute top-0 end-0 p-2 z-index-20 text-muted"><i class="ri-heart-line"></i></span>
                  <picture class="position-relative overflow-hidden d-block bg-light">
                    <img class="w-100 img-fluid position-relative z-index-10" title="" src="./assets/images/products/product-4.jpg" alt="">
                  </picture>
                  <div class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2">
                    <button class="btn btn-quick-add"><i class="ri-add-line me-2"></i> Quick Add</button>
                  </div>
                </div>
                <div class="card-body px-0">
                  <a class="text-decoration-none link-cover" href="./product.html">Nike Air Force 1</a>
                  <small class="text-muted d-block">6 colours, 9 sizes</small>
                  <p class="mt-2 mb-0 small">$425.85</p>
                </div>
              </div>
              <!--/ Card Product-->
            </div>
            <div class="swiper-slide">
              <!-- Card Product-->
              <div class="card border border-transparent position-relative overflow-hidden h-100 transparent">
                <div class="card-img position-relative">
                  <div class="card-badges">
                    <span class="badge badge-card"><span class="f-w-2 f-h-2 bg-danger rounded-circle d-block me-1"></span> Sale</span>
                  </div>
                  <span class="position-absolute top-0 end-0 p-2 z-index-20 text-muted"><i class="ri-heart-line"></i></span>
                  <picture class="position-relative overflow-hidden d-block bg-light">
                    <img class="w-100 img-fluid position-relative z-index-10" title="" src="./assets/images/products/product-5.jpg" alt="">
                  </picture>
                  <div class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2">
                    <button class="btn btn-quick-add"><i class="ri-add-line me-2"></i> Quick Add</button>
                  </div>
                </div>
                <div class="card-body px-0">
                  <a class="text-decoration-none link-cover" href="./product.html">Nike Air Max 90</a>
                  <small class="text-muted d-block">4 colours, 10 sizes</small>
                  <p class="mt-2 mb-0 small"><s class="text-muted">$196.99</s> <span class="text-danger">$98.66</span>
                  </p>
                </div>
              </div>
              <!--/ Card Product-->
            </div>
            <div class="swiper-slide">
              <!-- Card Product-->
              <div class="card border border-transparent position-relative overflow-hidden h-100 transparent">
                <div class="card-img position-relative">
                  <div class="card-badges">
                    <span class="badge badge-card"><span class="f-w-2 f-h-2 bg-danger rounded-circle d-block me-1"></span> Sale</span>
                    <span class="badge badge-card"><span class="f-w-2 f-h-2 bg-success rounded-circle d-block me-1"></span> New In</span>
                  </div>
                  <span class="position-absolute top-0 end-0 p-2 z-index-20 text-muted"><i class="ri-heart-line"></i></span>
                  <picture class="position-relative overflow-hidden d-block bg-light">
                    <img class="w-100 img-fluid position-relative z-index-10" title="" src="./assets/images/products/product-6.jpg" alt="">
                  </picture>
                  <div class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2">
                    <button class="btn btn-quick-add"><i class="ri-add-line me-2"></i> Quick Add</button>
                  </div>
                </div>
                <div class="card-body px-0">
                  <a class="text-decoration-none link-cover" href="./product.html">Nike Glide FlyEase</a>
                  <small class="text-muted d-block">1 colour</small>
                  <p class="mt-2 mb-0 small"><s class="text-muted">$329.99</s> <span class="text-danger">$198.66</span>
                  </p>
                </div>
              </div>
              <!--/ Card Product-->
            </div>
            <div class="swiper-slide">
              <!-- Card Product-->
              <div class="card border border-transparent position-relative overflow-hidden h-100 transparent">
                <div class="card-img position-relative">
                  <div class="card-badges">
                  </div>
                  <span class="position-absolute top-0 end-0 p-2 z-index-20 text-muted"><i class="ri-heart-line"></i></span>
                  <picture class="position-relative overflow-hidden d-block bg-light">
                    <img class="w-100 img-fluid position-relative z-index-10" title="" src="./assets/images/products/product-7.jpg" alt="">
                  </picture>
                  <div class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2">
                    <button class="btn btn-quick-add"><i class="ri-add-line me-2"></i> Quick Add</button>
                  </div>
                </div>
                <div class="card-body px-0">
                  <a class="text-decoration-none link-cover" href="./product.html">Nike Zoom Freak</a>
                  <small class="text-muted d-block">2 colours, 2 sizes</small>
                  <p class="mt-2 mb-0 small">$444.99</p>
                </div>
              </div>
              <!--/ Card Product-->
            </div>
            <div class="swiper-slide">
              <!-- Card Product-->
              <div class="card border border-transparent position-relative overflow-hidden h-100 transparent">
                <div class="card-img position-relative">
                  <div class="card-badges">
                    <span class="badge badge-card"><span class="f-w-2 f-h-2 bg-success rounded-circle d-block me-1"></span> New In</span>
                  </div>
                  <span class="position-absolute top-0 end-0 p-2 z-index-20 text-muted"><i class="ri-heart-line"></i></span>
                  <picture class="position-relative overflow-hidden d-block bg-light">
                    <img class="w-100 img-fluid position-relative z-index-10" title="" src="./assets/images/products/product-8.jpg" alt="">
                  </picture>
                  <div class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2">
                    <button class="btn btn-quick-add"><i class="ri-add-line me-2"></i> Quick Add</button>
                  </div>
                </div>
                <div class="card-body px-0">
                  <a class="text-decoration-none link-cover" href="./product.html">Nike Air Pegasus</a>
                  <small class="text-muted d-block">3 colours, 10 sizes</small>
                  <p class="mt-2 mb-0 small">$178.99</p>
                </div>
              </div>
              <!--/ Card Product-->
            </div>
            <div class="swiper-slide">
              <!-- Card Product-->
              <div class="card border border-transparent position-relative overflow-hidden h-100 transparent">
                <div class="card-img position-relative">
                  <div class="card-badges">
                    <span class="badge badge-card"><span class="f-w-2 f-h-2 bg-success rounded-circle d-block me-1"></span> New In</span>
                  </div>
                  <span class="position-absolute top-0 end-0 p-2 z-index-20 text-muted"><i class="ri-heart-line"></i></span>
                  <picture class="position-relative overflow-hidden d-block bg-light">
                    <img class="w-100 img-fluid position-relative z-index-10" title="" src="./assets/images/products/product-1.jpg" alt="">
                  </picture>
                  <div class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2">
                    <button class="btn btn-quick-add"><i class="ri-add-line me-2"></i> Quick Add</button>
                  </div>
                </div>
                <div class="card-body px-0">
                  <a class="text-decoration-none link-cover" href="./product.html">Nike Air Jordans</a>
                  <small class="text-muted d-block">3 colours, 10 sizes</small>
                  <p class="mt-2 mb-0 small">$154.99</p>
                </div>
              </div>
              <!--/ Card Product-->
            </div>
          </div>

          <!-- Add Arrows -->
          <div class="swiper-prev top-50  start-0 z-index-30 cursor-pointer transition-all bg-white px-3 py-4 position-absolute z-index-30 top-50 start-0 mt-n8 d-flex justify-content-center align-items-center opacity-50-hover">
            <i class="ri-arrow-left-s-line ri-lg"></i>
          </div>
          <div class="swiper-next top-50 end-0 z-index-30 cursor-pointer transition-all bg-white px-3 py-4 position-absolute z-index-30 top-50 end-0 mt-n8 d-flex justify-content-center align-items-center opacity-50-hover">
            <i class="ri-arrow-right-s-line ri-lg"></i>
          </div>


        </div>
        <!-- / Swiper Latest-->
      </div>
      <!-- / Related Products-->

      <!-- Reviews-->
      <div class="col-12" data-aos="fade-up">
        <h3 class="fs-4 fw-bolder mt-7 mb-4 reviews">Reviews</h3>

        <!-- Review Summary-->
        <div class="bg-light p-5 justify-content-between d-flex flex-column flex-lg-row">
          <div class="d-flex flex-column align-items-center mb-4 mb-lg-0">
            <div class="bg-dark text-white f-w-24 f-h-24 d-flex rounded-circle align-items-center justify-content-center fs-2 fw-bold mb-3">
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
                <div class="progress-bar bg-dark" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
                <div class="progress-bar bg-dark" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
                <div class="progress-bar bg-dark" role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
                <div class="progress-bar bg-dark" role="progressbar" style="width: 8%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
                <div class="progress-bar bg-dark" role="progressbar" style="width: 5%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
            <div class="progress-bar bg-dark" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
      swal({
        title: "Silahkan login dahulu untuk melakukan transaksi!",
        icon: "info",
        buttons: true
      }).then((willLogin) => {
        if (willLogin) {
          window.location.replace("<?= base_url('Auth/User') ?>")
        }
      });
    <?php endif; ?>

    <?php if (isset($_SESSION['logged_in_pelanggan']) and $_SESSION['logged_in_pelanggan'] == true) : ?>
      if (stok === 0) {
        return swal({
          title: "Stok produk kosong, tidak dapat menambahkan kekeranjang!",
          icon: "info",
        });
      }

      swal({
          title: "Masukkan Item ke keranjang?",
          icon: "info",
          buttons: true,
          dangerMode: true,
        })
        .then((willLogin) => {
          if (willLogin) {
            $.ajax({
              method: "POST",
              url: "/add_item",
              data: {
                'id': parseInt(id)
              },
              success: function(response) {
                swal({
                  title: "Item berhasil masuk ke cart, pergi ke cart page?",
                  icon: "info",
                  buttons: true,
                }).then((isSuccess) => {
                  if (isSuccess) {
                    window.location.replace("<?= base_url('cart') ?>")
                  }
                });
              },
              error: function(response) {
                swal(response.error);
              }
            });
          } else {
            swal("Item tidak ditambahkan ke cart!");
          }
        });
    <?php endif; ?>
  }
</script>

<?= $this->endSection(); ?>