<?php
include 'database/connect.php';

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];

    // ดึงข้อมูลสินค้าจากฐานข้อมูล
    $stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->execute([$product_id]);
    $product = $stmt->fetch();

    if (!$product) {
        echo "ไม่พบสินค้านี้";
        exit;
    }
} else {
    echo "ไม่พบข้อมูลสินค้า";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขสินค้า</title>
</head>
<body>
    <h1>แก้ไขสินค้า</h1>
    <form action="updateProduct.php" method="POST">
        <input type="hidden" name="id" value="<?= $product['id'] ?>">

        <label for="name">ชื่อสินค้า:</label>
        <input type="text" id="name" name="name" value="<?= $product['name'] ?>" required><br><br>

        <label for="price">ราคา:</label>
        <input type="number" id="price" name="price" value="<?= $product['price'] ?>" step="0.01" required><br><br>

        <label for="description">คำอธิบาย:</label>
        <textarea id="description" name="description" rows="4" required><?= $product['description'] ?></textarea><br><br>

        <input type="submit" value="อัปเดต">
    </form>
</body>
</html>
