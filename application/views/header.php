<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="<?=site_url('home')?>">Klinik Alakadarnya</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?=site_url('home')?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=site_url('dokter')?>">Dokter</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=site_url('pasien')?>">Pasien</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=site_url('poli')?>">Poli</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=site_url('kunjungan')?>">Kunjungan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout') ?>">
        <span>logout</span></a>
      </li>
    </ul>
     
    <?php if($this->session->userdata('logged_in')): ?>
    <span class="navbar-text mr-2">
    <?= $this->session->userdata('username') ?>
    </span>
    <a href="<?= site_url('home/logout') ?>" class="btn btn-danger">Logout</a>
    <?php endif; ?>

  </div>
</nav>