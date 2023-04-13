<?= $this->extend('user/base'); ?>

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
            <?= form_open('CustPanel/Testimoni/' . $item['id_testimoni'], [
              'class' => 'form-horizontal form-label-left',
              'data-parsley-validate' => ''
            ], ['_method' => 'PUT']); ?>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pilih Barang <span
                  class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <?= form_dropdown('id_barang', $data, $item['id_barang'], [
                  'class' => 'form-control col-md-7 col-xs-12'
                ]); ?>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Berikan nilai <span
                  class="required">* dari 1 sampai 5</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <?= form_input('nilai', $item['bintang'], [
                  'class' => 'form-control col-md-7 col-xs-12',
                  'placeholder' => ''
                ], 'number'); ?>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Isi Testimoni <span
                  class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <?= form_textarea('isi', $item['isi_testimoni'], [
                  'class' => 'form-control col-md-7 col-xs-12'
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