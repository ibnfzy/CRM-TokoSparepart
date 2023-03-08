<nav class="navbar navbar-expand-lg navbar-light bg-white flex-column border-0  ">
  <div class="container-fluid">
    <div class="w-100">
      <div class="d-flex justify-content-between align-items-center flex-wrap">

        <!-- Logo-->
        <a class="navbar-brand fw-bold fs-3 m-0 p-0 flex-shrink-0 order-0" href="<?= base_url(); ?>/index.html">
          <div class="d-flex align-items-center">
            <svg class="f-w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 77.53 72.26">
              <path
                d="M10.43,54.2h0L0,36.13,10.43,18.06,20.86,0H41.72L10.43,54.2Zm67.1-7.83L73,54.2,68.49,62,45,48.47,31.29,72.26H20.86l-5.22-9L52.15,0H62.58l5.21,9L54.06,32.82,77.53,46.37Z"
                fill="currentColor" fill-rule="evenodd" />
            </svg>
          </div>
        </a>
        <!-- / Logo-->

        <!-- Navbar Icons-->
        <ul class="list-unstyled mb-0 d-flex align-items-center order-1 order-lg-2 nav-sidelinks">

          <!-- Mobile Nav Toggler-->
          <li class="d-lg-none">
            <span class="nav-link text-body d-flex align-items-center cursor-pointer" data-bs-toggle="collapse"
              data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
              aria-label="Toggle navigation"><i class="ri-menu-line ri-lg me-1"></i> Menu</span>
          </li>
          <!-- /Mobile Nav Toggler-->

          <!-- Navbar Search-->

          <!-- /Navbar Search-->

          <!-- Navbar Login-->
          <li class="ms-1 d-none d-lg-inline-block">
            <a class="nav-link text-body" href="<?= base_url(); ?>/login.html">
              Account
            </a>
          </li>
          <!-- /Navbar Login-->

          <!-- Navbar Cart Icon-->
          <li class="ms-1 d-inline-block position-relative dropdown-cart">
            <button class="nav-link me-0 disable-child-pointer border-0 p-0 bg-transparent text-body" type="button">
              Keranjang (2)
            </button>
            <div class="cart-dropdown dropdown-menu">

              <!-- Cart Header-->
              <div class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-4">
                <h6 class="fw-bolder m-0">Cart Summary (2 items)</h6>
                <i class="ri-close-circle-line text-muted ri-lg cursor-pointer btn-close-cart"></i>
              </div>
              <!-- / Cart Header-->

              <!-- Cart Items-->
              <div>

                <!-- Cart Product-->
                <div class="row mx-0 py-4 g-0 border-bottom">
                  <div class="col-2 position-relative">
                    <picture class="d-block ">
                      <img height="200" class="img-fluid"
                        src="<?= base_url(); ?>/assets/images/products/product-cart-1.jpg"
                        alt="HTML Bootstrap Template by Pixel Rocket">
                    </picture>
                  </div>
                  <div class="col-9 offset-1">
                    <div>
                      <h6 class="justify-content-between d-flex align-items-start mb-2">
                        Nike Air VaporMax 2021
                        <i class="ri-close-line ms-3"></i>
                      </h6>
                      <span class="d-block text-muted fw-bolder text-uppercase fs-9">Size: 9 / Qty: 1</span>
                    </div>
                    <p class="fw-bolder text-end text-muted m-0">$85.00</p>
                  </div>
                </div>
                <!-- Cart Product-->
                <div class="row mx-0 py-4 g-0 border-bottom">
                  <div class="col-2 position-relative">
                    <picture class="d-block ">
                      <img class="img-fluid" src="<?= base_url(); ?>/assets/images/products/product-cart-2.jpg"
                        alt="HTML Bootstrap Template by Pixel Rocket">
                    </picture>
                  </div>
                  <div class="col-9 offset-1">
                    <div>
                      <h6 class="justify-content-between d-flex align-items-start mb-2">
                        Nike ZoomX Vaporfly
                        <i class="ri-close-line ms-3"></i>
                      </h6>
                      <span class="d-block text-muted fw-bolder text-uppercase fs-9">Size: 11 / Qty: 1</span>
                    </div>
                    <p class="fw-bolder text-end text-muted m-0">$125.00</p>
                  </div>
                </div>
              </div>
              <!-- /Cart Items-->

              <!-- Cart Summary-->
              <div>
                <div class="pt-3">
                  <div
                    class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-start mb-4 mb-md-2">
                    <div>
                      <p class="m-0 fw-bold fs-5">Grand Total</p>
                      <span class="text-muted small">Inc $45.89 sales tax</span>
                    </div>
                    <p class="m-0 fs-5 fw-bold">$422.99</p>
                  </div>
                </div>
                <a href="<?= base_url(); ?>/cart.html" class="btn btn-outline-dark w-100 text-center mt-4"
                  role="button">View Cart</a>
                <a href="<?= base_url(); ?>/checkout.html" class="btn btn-dark w-100 text-center mt-2"
                  role="button">Proceed To
                  Checkout</a>
              </div>
              <!-- / Cart Summary-->
            </div>


          </li>
          <!-- /Navbar Cart Icon-->

        </ul>
        <!-- Navbar Icons-->

        <!-- Main Navigation-->
        <div class="flex-shrink-0 collapse navbar-collapse navbar-collapse-light w-auto flex-grow-1 order-2 order-lg-1"
          id="navbarNavDropdown">

          <!-- Menu-->
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>/category.html" role="button">
                Home
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>/category.html" role="button">
                Halaman Barang
              </a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Kategori Barang
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="http://localhost:8080//category.html">Tops</a></li>
                <li><a class="dropdown-item" href="http://localhost:8080//category.html">Bottoms</a></li>
                <li><a class="dropdown-item" href="http://localhost:8080//category.html">Jeans</a></li>
                <li><a class="dropdown-item" href="http://localhost:8080//category.html">T-Shirts</a></li>
                <li><a class="dropdown-item" href="http://localhost:8080//category.html">Shoes</a></li>
                <li><a class="dropdown-item" href="http://localhost:8080//category.html">Accessories</a></li>
              </ul>

            </li>
          </ul> <!-- / Menu-->

        </div>
        <!-- / Main Navigation-->

      </div>
    </div>
  </div>
</nav>