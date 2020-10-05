<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: var(--main-bg-color);">
  <a class="navbar-brand" href="<?= base_url() ?>">
    <img src="<?= base_url('assets/img/logo.png') ?>" alt="UPI" class="d-inline-block align-top" width="30" height="30" loading="lazy"> CIPUPI
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <?php if ($loged_in) : ?>
        <li class="nav-item">
          <a class="nav-link" href="#">Upload</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('logout') ?>">Logout</a>
        </li>
      <?php else : ?>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('login') ?>">Login</a>
        </li>
      <?php endif; ?>
    </ul>
    <form class="form-inline my-2 my-lg-0 d-none d-lg-inline">
      <div class="input-group">
        <input class="form-control form-control-sm" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sm text-white" type="button" style="background-color: #DB4437;">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
              <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
            </svg>
          </button>
        </div>
      </div>
    </form>
  </div>
</nav>