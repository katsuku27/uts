<?php $this->load->view('header'); ?>

<div class="container">

<hr>
  
<div class="card">
  <div class="card-header bg-info">
    List Dokter
  </div>
  <div class="card-body">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Dokter</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead> 
        <tbody>
            <?php 
            $no = 1;
                foreach ($dataDokter as $value){ 
            ?>

            <tr>
                <th scope="row"><?= $no++ ?></th>
                <td><?= $value->nama_dokter ?></td>
                    <td>
                    <a href="dokter/update/<?= $value->id_dokter ?>" class="btn btn-info">Update</a>
                    <a href="dokter/delete/<?= $value->id_dokter ?>" class="btn btn-danger">Delete</a>
                    </td>
            </tr>

            <?php } ?>
        </tbody>
    </table>

    <a href="create" class="btn btn-success">Tambah Dokter</a>

  </div>
</div>

</div>

<?php $this->load->view('footer'); ?>