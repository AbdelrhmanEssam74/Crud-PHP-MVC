<?php include Templates . "header.php"; ?>
    <h1 class="text-center  my-5 py-3">View All Products </h1>
    <div class="container">
        <div class="row">
            <div class="col-10 mx-auto p-4 border mb-5">
                <?php if(isset($success)): ?>
                    <h3 class="alert alert-success text-center"><?php  echo $success; ?></h3>
                <?php endif; ?>
                <table class="table table-hover">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Description</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php $i=1; ?>
                    <?php /** @var TYPE_NAME $products */
                    foreach($products as $row):  ?>
                        <tr>
                            <td> <?php echo $i; $i++; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['price']; ?> <b class="float-right"> $ </b></td>
                            <td class="text-start"><?php echo $row['description']; ?></td>
                            <td><?php echo $row['quantity']; ?></td>
                            <td>
                                <a href="<?php url('product/edit/'.$row['id']) ?>" class="btn btn-info" >Edit</a>
                            </td>
                            <td>
                                <a href="<?php url('product/delete/'.$row['id']) ?>" class="btn btn-danger" >Delete</a>
                            </td>
                        </tr>
                    <?php  endforeach; ?>
                    </tbody>
                </table>


            </div>
        </div>
    </div>
<?php include Templates . "footer.php"; ?>