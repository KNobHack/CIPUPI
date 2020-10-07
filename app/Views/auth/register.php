<?= $this->extend('layouts/auth') ?>

<?= $this->section('content') ?>
<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-xl-5 col-lg-7 col-md-9">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Registrasi Akun</h1>
            </div>
            <?php if ($error = session('error')) : ?>
              <div class="alert alert-danger" role="alert">
                <?= $error ?>
              </div>
            <?php elseif (!empty($pesan)) : ?>
              <div class="alert alert-<?= $pesan['mode'] ?>" role="alert">
                <?= $pesan['pesan'] ?>
              </div>
            <?php endif ?>
            <form class="user" method="POST" action="<?= base_url('register') ?>">
              <?= csrf_field() ?>
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Masukkan Alamat Email...">
              </div>
              <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Masukkan Username...">
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password">
              </div>
              <div class="form-group">
                <input type="password" name="password_confirm" class="form-control" placeholder="Ulangi Password">
              </div>
              <button type="submit" class="btn btn-success btn-user btn-block">
                Registrasi
              </button>
            </form>
            <hr>
            <div class="text-center">
              <a class="small" href="<?= base_url('/register') ?>">Sudah punya akun</a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>
<?= $this->endSection() ?>