<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Kesehatan adalah jalan ninja ku.">
  <meta name="author" content="Kelompok Webpro">
  <link rel="icon" href="<?= base_url($list_config['base_images']) ?>/icon.png">

  <title><?= $list_config['title'] ?></title>
  <link rel="stylesheet" href="<?= base_url($list_config['base_css']) ?>/fontawesome/css/all.min.css">
  <link href="<?= base_url($list_config['base_css']) ?>/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      padding-top: 100px;
    }
  </style>
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: #00b300;">
      <div class="container">
        <a class="navbar-brand" href="#"><i class="fas fa-hospital"></i> <?= $list_config['title'] ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?= base_url() ?>">Halaman Utama</a>
            </li>
          </ul>
          <div class="navbar-form navbar-left">
            <a href="<?= base_url() ?>login" ?><button type="button" class="btn btn-outline-info text-white">Masuk</button></a>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <main role="main">
    <div class="cotainer">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">Masuk</div>
            <div class="card-body">
              <form action="<?= base_url('login') ?>" method="post" autocomplete="off">
                <?php if (isset($error_message)) { ?>
                  <div class="form-group row">
                    <div class="alert alert-danger col-md-12" role="alert">
                      <?= $error_message ?>
                    </div>
                  </div>
                <?php } else if (isset($sukses_message)) { ?>
                  <div class="form-group row">
                    <div class="alert alert-success col-md-12" role="alert">
                      <?= $sukses_message ?>
                      <meta http-equiv="refresh" content="5;url=<?= base_url(); ?>" />
                    </div>
                  </div>
                <?php } ?>
                <div class="form-group row">
                  <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                  <div class="col-md-6">
                    <input type="text" class="form-control" name="email_address" id="email" required autofocus>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                  <div class="col-md-6">
                    <input type="password" class="form-control" name="password" id="password" required>
                  </div>
                </div>
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    MASUK
                  </button>
                  <a href="#" class="btn btn-link">
                    Belum membuat akun?
                  </a>
                </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="<?= base_url($list_config['base_js']) ?>/popper.min.js"></script>
  <script src="<?= base_url($list_config['base_js']) ?>/bootstrap.min.js"></script>
  <script src="<?= base_url($list_config['base_js']) ?>/holder.min.js"></script>
</body>

</html>