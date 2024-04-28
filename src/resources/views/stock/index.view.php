<?php require base_path('resources/views/partials/head.php'); ?>
<?php require base_path('resources/views/partials/nav.php'); ?>
<?php require base_path('resources/views/partials/banner.php'); ?>

<div class="d-flex justify-content-center" data-spinner>
  <div class="spinner-border" role="status">
    <span class="visually-hidden">Loading...</span>
  </div>
</div>
<main class="container-xxl d-none">
  <div class="row mb-3 gy-3 gx-3">
    <div class="col-sm-12 col-md-6 col-lg-4">
      <form role="search">
        <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
      </form>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-8 d-flex justify-content-end">
      <button type="button" class="btn btn-primary btn-sm fw-semibold"><a href="/stock/create" class="text-white text-decoration-none">Create product</a></button>
    </div>
  </div>
  <div class="d-none d-lg-block">
    <table class="table table-striped">
      <thead>
        <tr class="table-dark">
          <th scope="col">No</th>
          <th scope="col">Code</th>
          <th scope="col">Brand</th>
          <th scope="col">Product Name</th>
          <th scope="col">Size</th>
          <th scope="col">Amount</th>
          <th scope="col">Cost</th>
          <th scope="col">Sale Price</th>
          <th scope="col">Date Time</th>
          <th scope="col">Image</th>
          <th scope="col">Create By</th>
          <th scope="col">Tools</th>
        </tr>
      </thead>
      <tbody data-tbody>
      </tbody>
    </table>
  </div>
  <div class="d-sm-block d-lg-none mt-3">
    <div class="row gy-3 gx-3">
      <div class="col-sm-12 col-md-6">
        <div class="border bg-white rounded">
          <div class="d-flex justify-content-between p-3">
            <div>
              <img src="https://i.ebayimg.com/images/g/y0MAAOSwcORkiO-G/s-l1200.jpg" alt="" class="img-thumbnail object-fit-contain" style="width: 150px;height:130px;">
            </div>
            <div class="d-flex flex-column text-end">
              <span class="bold fw-bold">Yeezy Slide</span>
              <span class="text-secondary">40 Eur</span>
              <span class="text-secondary">1 Units</span>
              <span class="text-secondary">9,900 ฿</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php require base_path('resources/views/stock/modal/edit.modal.php'); ?>
</main>

<?php require base_path('resources/views/partials/footer.php'); ?>

