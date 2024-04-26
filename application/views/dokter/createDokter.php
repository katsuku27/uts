<?php $this->load->view('header'); ?>

<div class="container">

<hr>
  
<div class="card">
  <div class="card-header bg-info">
    Tambah Dokter
  </div>
    <div class="card-body">
        <form action="<?=site_url('dokter/action_create')?>" method="post">
            <div class="form-group">
                <label for="nama_dokter">Nama Dokter</label>
                <input type="text" class="form-control" id="nama_dokter" name="nama_dokter" placeholder="Masukkan Nama Dokter...">
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
  </div> 
</div>

</div>

<?php $this->load->view('footer'); ?>