<?php $this->load->view('header'); ?>

<div class="container">

<hr>
  
<div class="card">
  <div class="card-header bg-info">
    Tambah Poli
  </div>
    <div class="card-body">
        <form action="<?=site_url('poli/action_create')?>" method="post">
            <div class="form-group">
                <label for="nama_poli">Nama Poli</label>
                <input type="text" class="form-control" id="nama_poli" name="nama_poli" placeholder="Masukkan Nama Poli...">
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
  </div>
</div>

</div>

<?php $this->load->view('footer'); ?>