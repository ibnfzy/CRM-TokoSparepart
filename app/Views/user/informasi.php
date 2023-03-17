<?= $this->extend('user/base'); ?>

<?= $this->section('content'); ?>

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Customer Informasi</h3>
      </div>

    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <?= form_open('CustPanel/informasi/' . $data['id_user_detail']); ?>
            <div class="mb-3">
              <label class="form-label">Alamat</label>
              <?= form_input('alamat', $data['alamat'] ? $data['alamat'] : '', [
                'class' => 'form-control',
                'placeholder' => 'Masukkan Alamat Rumah Anda'
              ]); ?>
            </div>
            <div class="mb-3">
              <label class="form-label">Kontak Nomor (Whatsapp)</label>
              <?= form_input('nomor', $data['nomor_hp'] ? $data['nomor_hp'] : '', [
                'class' => 'form-control',
                'placeholder' => 'Contoh: 085123456789'
              ]); ?>
            </div>
            <button class="btn btn-info" type="submit">
              <i class="align-middle me-2" data-feather="check-square"></i> Save
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>