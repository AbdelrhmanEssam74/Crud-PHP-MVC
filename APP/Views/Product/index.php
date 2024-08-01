
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <ul>
        <?php /** @var array $products */
        foreach ($products as $product): ?>
            <li> <?php echo $product['name'] ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>