<?php
include 'database/connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    // อัปเดตข้อมูลสินค้า
    $stmt = $conn->prepare("UPDATE products SET name = ?, price = ?, description = ? WHERE id = ?");
    $stmt->execute([$name, $price, $description, $id]);

    // ย้อนกลับไปหน้า index
    header('Location: index.php');
    exit();
}
?>
