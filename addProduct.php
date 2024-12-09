<?php
include 'database/connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    // เพิ่มสินค้าในฐานข้อมูล
    $stmt = $pdo->prepare("INSERT INTO products (name, price, description) VALUES (?, ?, ?)");
    $stmt->execute([$name, $price, $description]);

    // กลับไปยังหน้า index
    header('Location: index.php');
    exit();
}
?>
