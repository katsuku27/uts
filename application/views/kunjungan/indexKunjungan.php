<?php $this->load->view('header'); ?>

<div class="container">

<hr>
  
<div class="card">
  <div class="card-header bg-info">
    Data Kunjungan
  </div>
  <div class="card-body">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Pasien</th>
                <th scope="col">Nama Poli</th>
                <th scope="col">Nama Dokter</th>
                <th scope="col">Keluhan</th>
                <th scope="col">Tanggal Kunjungan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            $no = 1;
            foreach ($dataKunjungan as $value){ 
            ?>

            <tr>
                <th scope="row"><?= $no++ ?></th>
                <td><?= $value->nama ?></td>
                <td><?= $value->nama_poli ?></td>
                <td><?= $value->nama_dokter ?></td>
                <td><?= $value->keluhan ?></td>
                <td><?= $value->tanggal_kunjungan ?></td>
                <td>
                    <a href="kunjungan/update/<?= $value->id_kunjungan ?>" class="btn btn-info">Update</a>
                    <a href="kunjungan/delete/<?= $value->id_kunjungan ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>

        <?php } ?>
        </tbody>
    </table>

    <a href="Kunjungan/create" class="btn btn-success">Tambah Kunjungan</a>

  </div>
</div>

</div>

<?php $this->load->view('footer'); ?>