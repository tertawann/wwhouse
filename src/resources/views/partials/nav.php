<nav class="mb-3 p-3 text-bg-dark">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <span>Picksome999</span>
      </a>

      <ul class="nav col-12 col-lg-auto ms-lg-auto me-lg-3 mb-2 justify-content-center mb-md-0">
        <li><a href="/" class="nav-link px-2 <?= urlIs('/') ? 'text-white' : 'text-secondary' ?>">Dashboard</a></li>
        <li><a href="/stock" class="nav-link px-2 <?= urlIs('/stock') ? 'text-white' : 'text-secondary' ?>">Stock</a></li>
      </ul>
      <div class="text-end">
        <button type="button" class="btn btn-outline-light me-2">Login</button>
      </div>
    </div>
  </div>
</nav>