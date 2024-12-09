<?php
include 'database/connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // ใช้ $conn แทน $pdo
    $stmt = $conn->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->execute([$id]);
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$product) {
        die('ไม่พบข้อมูลสินค้า');
    }
} else {
    die('ไม่พบ ID ของสินค้า');
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>แก้ไขสินค้า</title>
</head>
<body>
    <h1>แก้ไขสินค้า</h1>
    <form action="updateProduct.php" method="post">
    <input type="hidden" name="id" value="<?= htmlspecialchars($product['id']) ?>">

    <label for="name">ชื่อสินค้า:</label>
    <input type="text" id="name" name="name" value="<?= htmlspecialchars($product['name']) ?>" required><br><br>

    <label for="price">ราคา:</label>
    <input type="number" id="price" name="price" value="<?= htmlspecialchars($product['price']) ?>" step="0.01" required><br><br>

    <label for="description">คำอธิบาย:</label>
    <textarea id="description" name="description" rows="4" required><?= htmlspecialchars($product['description']) ?></textarea><br><br>

    <input type="submit" value="อัปเดตสินค้า">
</form>

</body>
</html>
