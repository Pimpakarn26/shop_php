<?php
include 'connect.php';

// เพิ่มสินค้า
function addProduct($name, $price, $description) {
    global $conn;
    $sql = "INSERT INTO products (name, price, description) VALUES (:name, :price, :description)";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['name' => $name, 'price' => $price, 'description' => $description]);
}

// ดึงข้อมูลสินค้าทั้งหมด
function getAllProducts() {
    global $conn;
    $sql = "SELECT * FROM products";
    return $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

// ดึงข้อมูลสินค้าโดย ID
function getProductById($id) {
    global $conn;
    $sql = "SELECT * FROM products WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['id' => $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// แก้ไขสินค้า
function updateProduct($id, $name, $price, $description) {
    global $conn;
    $sql = "UPDATE products SET name = :name, price = :price, description = :description WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['id' => $id, 'name' => $name, 'price' => $price, 'description' => $description]);
}

// ลบสินค้า
function deleteProduct($id) {
    global $conn;
    $sql = "DELETE FROM products WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['id' => $id]);
}
?>
