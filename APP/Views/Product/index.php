<?php include Templates . "header.php"; ?>
    <ul>
<?php /** @var array $products */
foreach ($products as $product): ?>
    <li> <?php echo $product['name'] ?></li>
<?php endforeach; ?>
    </ul>
<?php include Templates . "footer.php"; ?>