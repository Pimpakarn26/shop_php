<?php
include 'connect.php';

// ตัวอย่างการดึงข้อมูล
function getAllEmployees() {
    global $conn;
    $sql = "SELECT * FROM employees";
    return $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}
?>
