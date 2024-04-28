<form action="">
  <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="editModalLabel">Edit</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
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
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="hidden" id="productId">
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</form>