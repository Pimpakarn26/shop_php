<?php
include 'database/connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    // อัปเดตข้อมูลสินค้าในฐานข้อมูล
    $stmt = $pdo->prepare("UPDATE products SET name = ?, price = ?, description = ? WHERE id = ?");
    $stmt->execute([$name, $price, $description, $id]);

    // กลับไปยังหน้า index
    header('Location: index.php');
    exit();
}
?>
