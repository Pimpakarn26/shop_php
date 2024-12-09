<?php
include 'db/controller.php';
$products = getAllProducts();
?>

<!DOCTYPE html>
<html>
<head>
    <title>ระบบจัดการสินค้า</title>
</head>
<body>
    <h1>สินค้าทั้งหมด</h1>
    <a href="addForm.php">เพิ่มสินค้าใหม่</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>ชื่อสินค้า</th>
            <th>ราคา</th>
            <th>คำอธิบาย</th>
            <th>การจัดการ</th>
        </tr>
        <?php foreach ($products as $product): ?>
        <tr>
            <td><?= $product['id'] ?></td>
            <td><?= $product['name'] ?></td>
            <td><?= $product['price'] ?></td>
            <td><?= $product['description'] ?></td>
            <td>
                <a href="editForm.php?id=<?= $product['id'] ?>">แก้ไข</a>
                <a href="delete.php?id=<?= $product['id'] ?>">ลบ</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
