<?php
include 'database/controller.php';
$products = getAllProducts();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบจัดการสินค้า</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
    <?php include 'layout/header.php'; ?>
    <div class="container">
        <h2>สินค้าทั้งหมด</h2>
        <a href="addForm.php" class="button">เพิ่มสินค้าใหม่</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ชื่อสินค้า</th>
                    <th>ราคา</th>
                    <th>คำอธิบาย</th>
                    <th>การจัดการ</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'database/connect.php';
                $stmt = $conn->query("SELECT * FROM products");
                $products = $stmt->fetchAll();

                foreach ($products as $product) {
                    echo "<tr>
                            <td>{$product['id']}</td>
                            <td>{$product['name']}</td>
                            <td>{$product['price']}</td>
                            <td>{$product['description']}</td>
                            <td>
                                <a href='editForm.php?id={$product['id']}' class='edit-link'>แก้ไข</a> |
                                <a href='deleteProduct.php?id={$product['id']}' class='delete-link'>ลบ</a>
                            </td>
                        </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <?php include 'layout/footer.php'; ?>
</body>
</html>
