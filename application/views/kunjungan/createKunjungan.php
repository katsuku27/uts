<?php $this->load->view('header'); ?>

<div class="container">

<hr>
  
<div class="card">
  <div class="card-header bg-info">
    Tambah Kunjungan
  </div>
    <div class="card-body">
        <form action="<?=site_url('kunjungan/action_create')?>" method="post">
        <div class="form-group">
            <label for="id_pasien">ID Pasien</label>
            <input type="text" class="form-control" id="id_pasien" name="id_pasien" required>
        </div>
        <div class="form-group">
            <label for="id_dokter">ID Dokter</label>
            <input type="text" class="form-control" id="id_dokter" name="id_dokter" required>
        </div>
        <div class="form-group">
            <label for="id_poli">ID Poli</label>
            <input type="text" class="form-control" id="id_poli" name="id_poli" required>
        </div>
        <div class="form-group">
            <label for="keluhan">Keluhan</label>
            <input type="text" class="form-control" id="keluhan" name="keluhan" required>
        </div>
        <div class="form-group">
            <label for="tanggal_kunjungan">Tanggal Kunjungan</label>
            <input type="date" class="form-control" id="tanggal_kunjungan" name="tanggal_kunjungan">
        </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
  </div>
</div>

</div>

<?php $this->load->view('footer'); ?>