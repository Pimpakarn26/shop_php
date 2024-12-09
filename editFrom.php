<?php
include 'database/controller.php';
$product = getProductById($_GET['id']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>แก้ไขสินค้า</title>
</head>
<body>
    <h1>แก้ไขสินค้า</h1>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        <label>ชื่อสินค้า:</label>
        <input type="text" name="name" value="<?= $product['name'] ?>" required><br>
        <label>ราคา:</label>
        <input type="number" name="price" value="<?= $product['price'] ?>" required><br>
        <label>คำอธิบาย:</label>
        <textarea name="description" required><?= $product['description'] ?></textarea><br>
        <button type="submit">บันทึก</button>
    </form>
</body>
</html>
