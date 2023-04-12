<?= $this->extend('admin/base'); ?>

<?= $this->section('content'); ?>

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <!-- <h3>Form Elements</h3> -->
        <div class="input-group">
          <button onclick="history.back()" style="float: right;" class="btn btn-info col-2"><i
              class="fa fa-arrow-circle-o-left"></i>Kembali</button>
        </div>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <!-- <h2>Form Design <small>different form elements</small></h2> -->
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <?= form_open('U/Settings', [
              'class' => 'form-horizontal form-label-left',
              'data-parsley-validate' => ''
            ]); ?>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Alamat Toko <span
                  class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <?= form_input('alamat_toko', $data['alamat_toko'], [
                  'class' => 'form-control col-md-7 col-xs-12',
                  'placeholder' => '',
                  'required' => 'required'
                ]); ?>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kontak Toko <span
                  class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <?= form_input('kontak_toko', $data['kontak_toko'], [
                  'class' => 'form-control col-md-7 col-xs-12',
                  'placeholder' => '',
                  'required' => 'required'
                ]); ?>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Biaya Ongkir (Rp.) <span
                  class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <?= form_input('biaya_ongkir', $data['biaya_ongkir'], [
                  'class' => 'form-control col-md-7 col-xs-12',
                  'placeholder' => '',
                  'required' => 'required'
                ]); ?>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jenis Corousel <span
                  class="required">* Top Selling membutuhkan transaksi dari user, jika data kurang akan menampilkan
                  Rekomendasi Barang</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <?= form_dropdown('corousel_type', [
                  '0' => 'Rekomendasi Barang',
                  '1' => 'Top Selling'
                ], $data['corousel_type'], [
                  'class' => 'form-control col-md-7 col-xs-12',
                  'required' => 'required'
                ]); ?>
              </div>
            </div>

            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<?= $this->endSection(); ?>