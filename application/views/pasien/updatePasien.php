<?php $this->load->view('header'); ?>

<div class="container">

<hr> 
  
<div class="card">
  <div class="card-header bg-info">
    Update Pasien
  </div>
  <div class="card-body">
    <form action="<?=site_url('Pasien/action_update/' . $dataPasien->id_pasien)?>" method="post">
            <div class="form-group">
                <label for="nama_dokter">Nama Pasien</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $dataPasien->nama ?>">
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $dataPasien->tanggal_lahir ?>">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Masukkan Alamat..." ><?= $dataPasien->alamat ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
</div>

</div>

<?php $this->load->view('footer'); ?>