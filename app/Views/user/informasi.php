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
            <?= form_open('CustPanel/informasi/' . $data['id_user_detail'], [
              'class' => 'form-horizontal form-label-left',
              'data-parsley-validate' => ''
            ]); ?>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Alamat <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <?= form_input('alamat', $data['alamat'] ? $data['alamat'] : '', [
                  'class' => 'form-control col-md-7 col-xs-12',
                  'placeholder' => 'Masukkan Alamat Rumah Anda'
                ]); ?>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kontak Nomor (Whatsapp) <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <?= form_input('nomor', $data['nomor_hp'] ? $data['nomor_hp'] : '', [
                  'class' => 'form-control col-md-7 col-xs-12',
                  'placeholder' => 'Contoh: 085123456789'
                ]); ?>
              </div>
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