<?php $this->load->view('header'); ?>

<div class="container">

<hr>
  
<div class="card"> 
  <div class="card-header bg-info">
    Update Dokter
  </div>
  <div class="card-body">
    <form action="<?=site_url('Dokter/action_update/' . $dataDokter->id_dokter)?>" method="post">
            <div class="form-group">
                <label for="nama_dokter">Nama Dokter</label>
                <input type="text" class="form-control" id="nama_dokter" name="nama_dokter" value="<?= $dataDokter->nama_dokter ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
</div>

</div>

<?php $this->load->view('footer'); ?>