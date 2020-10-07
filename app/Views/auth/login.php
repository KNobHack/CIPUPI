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
              <h1 class="h4 text-gray-900 mb-4">Login</h1>
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
            <form class="user" method="POST" action="<?= base_url('login') ?>">
              <?= csrf_field() ?>
              <div class="form-group">
                <input type="email" name="email" class="form-control form-control-user" aria-describedby="emailHelp" placeholder="Masukkan alamat email...">
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
              </div>
              <!-- <div class="form-group">
                <div class="custom-control custom-checkbox small">
                  <input type="checkbox" class="custom-control-input" id="customCheck">
                  <label class="custom-control-label" for="customCheck">Ingat saya</label>
                </div>
              </div> -->
              <button type="submit" class="btn btn-success btn-user btn-block">
                Login
              </button>
              <!-- <hr>
              <a href="index.html" class="btn btn-primary btn-user btn-block">
                <i class="fab fa-google fa-fw"></i> Login dengan Google
              </a> -->
            </form>
            <hr>
            <!-- <div class="text-center">
              <a class="small" href="forgot-password.html">Forgot Password?</a>
            </div> -->
            <div class="text-center">
              <a class="small" href="<?= base_url('/register') ?>">Registrasi</a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>
<?= $this->endSection() ?>