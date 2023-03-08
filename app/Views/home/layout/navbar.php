<nav class="navbar navbar-expand-lg navbar-light bg-white flex-column border-0  ">
  <div class="container-fluid">
    <div class="w-100">
      <div class="d-flex justify-content-between align-items-center flex-wrap">

        <!-- Logo-->
        <a class="navbar-brand fw-bold fs-3 m-0 p-0 flex-shrink-0 order-0" href="<?= base_url('/'); ?>">
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
            <a class="nav-link text-body" href="<?= base_url('CustPanel'); ?>">
              Account
            </a>
          </li>
          <!-- /Navbar Login-->

          <!-- Navbar Cart Icon-->
          <li class="ms-1 d-inline-block position-relative dropdown-cart">
            <a href="<?= base_url('Keranjang'); ?>"
              class="nav-link me-0 disable-child-pointer border-0 p-0 bg-transparent text-body">
              Keranjang (2)
            </a>


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
              <a class="nav-link" href="<?= base_url('/'); ?>" role="button">
                Home
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('Katalog'); ?>" role="button">
                Halaman Barang
              </a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Kategori Barang
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?= base_url('Katalog'); ?>">Tops</a></li>
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