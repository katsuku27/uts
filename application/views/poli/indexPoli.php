<?php $this->load->view('header'); ?>

<div class="container">

<hr>
  
<div class="card">
  <div class="card-header bg-info">
    List Poli
  </div>
  <div class="card-body">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Poli</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
                foreach ($dataPoli as $value){ 
            ?>

            <tr>
                <th scope="row"><?= $no++ ?></th>
                <td><?= $value->nama_poli ?></td>
                    <td>
                    <a href="poli/update/<?= $value->id_poli ?>" class="btn btn-info">Update</a>
                    <a href="poli/delete/<?= $value->id_poli ?>" class="btn btn-danger">Delete</a>
                    </td>
            </tr>

            <?php } ?>
        </tbody>
    </table>

    <a href="poli/create" class="btn btn-success">Tambah Poli</a>

  </div>
</div>

</div>

<?php $this->load->view('footer'); ?>