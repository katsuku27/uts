<?php $this->load->view('header'); ?>

<div class="container">

<hr>
  
<div class="card">
  <div class="card-header bg-info">
    List Pasien
  </div>
  <div class="card-body">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Pasien</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
                foreach ($dataPasien as $value){ 
            ?>

            <tr>
                <th scope="row"><?= $no++ ?></th>
                <td><?= $value->nama ?></td>
                <td><?= $value->tanggal_lahir ?></td>
                <td><?= $value->alamat ?></td>
                    <td>
                    <a href="pasien/update/<?= $value->id_pasien ?>" class="btn btn-info">Update</a>
                    <a href="pasien/delete/<?= $value->id_pasien ?>" class="btn btn-danger">Delete</a>
                    </td>
            </tr>

            <?php } ?>
        </tbody>
    </table>

    <a href="pasien/create" class="btn btn-success">Tambah Pasien</a>

  </div>
</div>

</div>

<?php $this->load->view('footer'); ?>