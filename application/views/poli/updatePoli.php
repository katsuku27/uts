<?php $this->load->view('header'); ?>

<div class="container">

<hr>
  
<div class="card">
  <div class="card-header bg-info">
    Update Poli
  </div>
  <div class="card-body">
    <form action="<?=site_url('Poli/action_update/' . $dataPoli->id_poli)?>" method="post">
            <div class="form-group">
                <label for="nama_poli">Nama Poli</label>
                <input type="text" class="form-control" id="nama_poli" name="nama_poli" value="<?= $dataPoli->nama_poli ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
</div>

</div>

<?php $this->load->view('footer'); ?> 