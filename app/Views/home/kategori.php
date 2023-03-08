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
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Sneakers</a></li>
            <li class="breadcrumb-item active" aria-current="page">New Releases</li>
          </ol>
        </nav>

      </div>
      <div class="d-flex justify-content-end align-items-center mt-4 mt-lg-0 flex-column flex-md-row">


      </div>
    </div> <!-- /Category Toolbar-->

    <!-- Products-->
    <div class="row g-4">
      <div class="col-12 col-sm-6 col-lg-4">
        <!-- Card Product-->
        <div class="card border border-transparent position-relative overflow-hidden h-100 transparent">
          <div class="card-img position-relative">
            <div class="card-badges">
              <span class="badge badge-card"><span class="f-w-2 f-h-2 bg-danger rounded-circle d-block me-1"></span>
                Sale</span>
            </div>
            <span class="position-absolute top-0 end-0 p-2 z-index-20 text-muted"><i class="ri-heart-line"></i></span>
            <picture class="position-relative overflow-hidden d-block bg-light">
              <img class="w-100 img-fluid position-relative z-index-10" title=""
                src="./assets/images/products/product-1.jpg" alt="">
            </picture>
            <div class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2">
              <button class="btn btn-quick-add"><i class="ri-add-line me-2"></i> Quick Add</button>
            </div>
          </div>
          <div class="card-body px-0">
            <a class="text-decoration-none link-cover" href="./product.html">Nike Air VaporMax 2021</a>
            <small class="text-muted d-block">4 colours, 10 sizes</small>
            <p class="mt-2 mb-0 small"><s class="text-muted">$329.99</s> <span class="text-danger">$198.66</span></p>
          </div>
        </div>
        <!--/ Card Product-->
      </div>
    </div>
    <!-- / Products-->

    <!-- Pagination-->
    <div class="d-flex flex-column f-w-44 mx-auto my-5 text-center">
      <nav aria-label="...">
        <ul class="pagination">
          <li class="page-item disabled">
            <a class="page-link">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item active" aria-current="page">
            <a class="page-link" href="#">2</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </div> <!-- / Pagination-->
  </div>

  <!-- /Page Content -->
</section>

<?= $this->endSection(); ?>