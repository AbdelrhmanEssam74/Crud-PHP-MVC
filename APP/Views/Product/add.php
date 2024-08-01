<?php include Templates . "header.php"; ?>
    <h1 class="text-center  my-5 py-3">Add New Product</h1>
    <div class="container">
        <div class="row">
            <div class="col-10 mx-auto p-4 border mb-5">
                <form method="post" action="<?php url('Product/store') ?>">
                    <div class="mb-3">
                        <label class="form-label" for="product">Name</label>
                        <input required type="text" class="form-control" id="product" placeholder="Product Name" name="product">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="product">Price</label>
                        <input required type="text" class="form-control" id="product" placeholder="Product Price" name="Price">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="product">Description</label>
                        <input required type="text" class="form-control" id="product" placeholder="Product Description" name="Description">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="product">Quantity</label>
                        <input required type="number" pattern="^[1-9][0-9]*$" class="form-control" id="product" placeholder="Product Quantity" name="Quantity" min="1" required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php include Templates . "footer.php"; ?>