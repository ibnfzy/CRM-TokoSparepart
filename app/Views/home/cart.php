<?= $this->extend('home/base'); ?>

<?= $this->section('content'); ?>
<?php $cart = \Config\Services::cart(); ?>

<section class="mt-0 overflow-lg-hidden  vh-lg-100">
  <!-- Page Content Goes Here -->
  <div class="container">
    <form method="POST" action="<?= base_url('update_cart'); ?>">
      <div class="row g-0 vh-lg-100">

        <div class="col-12 col-lg-7 pt-5 pt-lg-10">
          <div class="pe-lg-5">
            <!-- Logo-->
            <a class="navbar-brand fw-bold fs-3 flex-shrink-0 mx-0 px-0" href="./index.html">
              <div class="d-flex align-items-center">
                <svg class="f-w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 77.53 72.26">
                  <path
                    d="M10.43,54.2h0L0,36.13,10.43,18.06,20.86,0H41.72L10.43,54.2Zm67.1-7.83L73,54.2,68.49,62,45,48.47,31.29,72.26H20.86l-5.22-9L52.15,0H62.58l5.21,9L54.06,32.82,77.53,46.37Z"
                    fill="currentColor" fill-rule="evenodd" />
                </svg>
              </div>
            </a>
            <!-- / Logo-->
            <nav class="d-none d-md-block">
              <ul class="list-unstyled d-flex justify-content-start mt-4 align-items-center fw-bolder small">
                <li class="me-4"><a class="nav-link-checkout active" href="#">Keranjang anda</a></li>
                <li class="me-4"><a class="nav-link-checkout " href="#">Pilih metode pembayaran</a></li>
                <li><a class="nav-link-checkout nav-link-last " href="#">Pembayaran</a></li>
              </ul>
            </nav>
            <div class="mt-5">
              <h3 class="fs-5 fw-bolder mb-0 border-bottom pb-4">Keranjang Kamu</h3>
              <div class="table-responsive">
                <table class="table align-middle">
                  <tbody class="border-0">


                    <?php if ($cart->contents() == null) : ?>
                    <div class="row mx-0 py-4 g-0 border-bottom">
                      <div class="col-10 offset-1">
                        <div>
                          <h6 class="justify-content-between d-flex align-items-start mb-2">
                            Keranjang Kosong

                          </h6>

                        </div>

                        </p>
                      </div>
                    </div>
                    <?php endif ?>
                    <!-- Cart Item-->
                    <?php $total = [];
                    $i = 1; ?>
                    <?php foreach ($cart->contents() as $item) : ?>
                    <div class="row mx-0 py-4 g-0 border-bottom">
                      <input type="hidden" name="rowid[<?= $i; ?>]" value="<?= $item['rowid']; ?>">
                      <input type="hidden" name="stok[<?= $i; ?>]" value="<?= $item['stok']; ?>">
                      <div class="col-2 position-relative">
                        <picture class="d-block border">
                          <img class="img-fluid" src="<?= base_url('uploads/' . $item['gambar']); ?>"
                            alt="Gambar gagal diload, silahkan check jaringan anda">
                        </picture>
                      </div>
                      <div class="col-9 offset-1">
                        <div>
                          <h6 class="justify-content-between d-flex align-items-start mb-2">
                            <?= $item['name']; ?>
                            <a title="Hapus Barang dari keranjang?"
                              href="<?= base_url('remove_item/' . $item['rowid']); ?>"><i
                                class="ri-close-line ms-3"></i></a>
                          </h6>
                          <span class="d-block text-muted fw-bolder text-uppercase fs-9 col-4">Kuantitas : <input
                              type="number" name="qtybutton[<?= $i ?>] class=" form-control"
                              value="<?= $item['qty']; ?>"></span>
                        </div>
                        <p class="fw-bolder text-end text-muted m-0">Rp.
                          <?= $subTotal = $item['price'] * $item['qty']; ?>
                        </p>
                      </div>
                    </div>
                    <?php $total[] = $subTotal;
                      $i++;
                    endforeach ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-5 bg-light pt-lg-10 aside-checkout pb-5 pb-lg-0 my-5 my-lg-0">
          <div class="p-4 py-lg-0 pe-lg-0 ps-lg-5">
            <div class="pb-4 border-bottom">
              <button type="submit" class="btn btn-outline-dark w-100 text-center mb-3" role="button">Update
                Keranjang</button>

              <div class="d-flex flex-column flex-md-row justify-content-md-between mb-4 mb-md-2">

                <div>

                  <p class="m-0 fw-bold fs-5">Grand Total</p>
                  <span class="text-muted small">Belum Termasuk biaya admin</span>
                </div>
                <p class="m-0 fs-5 fw-bold">Rp. <?= $subTotalx = array_sum($total); ?></p>
              </div>
            </div>
            <button class="btn btn-dark w-100 text-center" type="button" data-bs-toggle="modal"
              data-bs-target="#staticBackdrop">Pilih Metode Pembayaran</button>
            <hr>
            <a href="<?= base_url('clear_cart'); ?>" class="btn btn-outline-danger w-100 text-center mb-3"
              role="button">Bersihkan
              Keranjang</a>
          </div>
        </div>
      </div>
    </form>
  </div>
  <!-- /Page Content -->
</section>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <form action="<?= base_url('CustPanel/checkout'); ?>" method="post">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Pilih Metode Pembayaran</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <select class="form-control" name="metode" id="metode">
            <option value="1">Transfer ke Bank XYZ</option>
            <option value="2">Cash</option>
          </select>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Proses ke Detail Order</button>
        </div>
      </div>
    </div>
  </form>
</div>

<?php $_SESSION['subtotal'] = $subTotalx; ?>

<?= $this->endSection(); ?>