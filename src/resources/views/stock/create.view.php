<?php require base_path('resources/views/partials/head.php'); ?>
<?php require base_path('resources/views/partials/nav.php'); ?>
<?php require base_path('resources/views/partials/banner.php'); ?>


<main class="container-xxl">
  <div class="row gx-5 gy-5">
    <div class="col-md-12 col-lg-6">
      <form action="/stock/create" method="post" enctype="multipart/form-data" class="bg-body-tertiary p-3 border rounded">
        <div class="mb-3">
          <label for="code" class="form-label">Code</label>
          <input type="text" class="form-control" id="code" aria-describedby="codeHelp" name="code" value="<?= old('code') ?>">
          <div id="codeHelp" class="form-text text-danger"><?= $errors['code'] ?? '' ?></div>
        </div>
        <div class="d-flex align-items-center justify-content-between gap-3 mb-3">
          <div class="w-100">
            <label for="code" class="form-label">Brand</label>
            <select class="form-select" aria-label="Selected Brand" aria-describedby="brandHelp" name="brandId">
              <option value="" selected>Choose brand</option>
              <option value="1" <?= selectedIs('brandId', '1') ? 'selected' : '' ?>>One</option>
              <option value="2" <?= selectedIs('brandId', '2') ? 'selected' : '' ?>>Two</option>
              <option value="3" <?= selectedIs('brandId', '3') ? 'selected' : '' ?>>Three</option>
            </select>
            <div id="brandHelp" class="form-text text-danger"><?= $errors['brand'] ?? '' ?></div>
          </div>
          <div class="w-100">
            <label for="product" class="form-label">Product Name</label>
            <input type="text" class="form-control" list="productsOptions" id="product" aria-describedby="productHelp" name="product" value="<?= old('product') ?>">
            <datalist id="productsOptions">
              <option value="Dunk Low Panda">
              <option value="Jordan 1">
            </datalist>
            <div id="productHelp" class="form-text text-danger"><?= $errors['product'] ?? '' ?></div>
          </div>
          <div class="w-100">
            <label for="size" class="form-label">Size</label>
            <input type="text" class="form-control" id="size" aria-describedby="sizeHelp" name="size" value="<?= old('size') ?>">
            <div id="sizeHelp" class="form-text text-danger"><?= $errors['size'] ?? '' ?></div>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-between gap-3 mb-3">
          <div class="w-100">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" class="form-control" id="quantity" aria-describedby="quantityHelp" name="quantity" value="<?= old('quantity') ?>">
            <div id="quantityHelp" class="form-text text-danger"><?= $errors['quantity'] ?? '' ?></div>
          </div>
          <div class="w-100">
            <label for="cost" class="form-label">Cost</label>
            <input type="number" class="form-control" id="cost" aria-describedby="costHelp" name="cost" value="<?= old('cost') ?>">
            <div id="costHelp" class="form-text text-danger"><?= $errors['cost'] ?? '' ?></div>
          </div>
          <div class="w-100">
            <label for="sale" class="form-label">Price to sale</label>
            <input type="number" class="form-control" id="sale" aria-describedby="saleHelp" name="sale" value="<?= old('sale') ?>">
            <div id="saleHelp" class="form-text text-danger"><?= $errors['sale'] ?? '' ?></div>
          </div>
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Image</label>
          <input class="form-control" type="file" id="image" name="image" aria-describedby="imageHelp">
          <div id="imageHelp" class="form-text text-danger"><?= $errors['image'] ?? '' ?></div>
        </div>
        <div class="d-flex align-items-center justify-content-end gap-3">
          <button type="submit" class="btn btn-primary">Create</button>
          <button type="reset" class="btn btn-danger">Reset</button>
        </div>
      </form>
    </div>
    <div class="col-md-12 col-lg-6">
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr class="table-dark">
              <th scope="col">Code</th>
              <th scope="col">Brand</th>
              <th scope="col">Product Name</th>
              <th scope="col">Size</th>
              <th scope="col">Cost</th>
              <th scope="col">Date Time</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($histories as $history) : ?>
              <tr>
                <td><?= $history['code'] ?></td>
                <td><?= $history['brandId'] ?></td>
                <td><?= $history['product_name'] ?></td>
                <td><?= $history['size'] ?></td>
                <td><?= $history['cost'] ?></td>
                <td><?= $history['update_datetime'] ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>

<?php require base_path('resources/views/partials/footer.php'); ?>