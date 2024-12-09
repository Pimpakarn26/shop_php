<?php
include 'database/controller.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    updateProduct($_POST['id'], $_POST['name'], $_POST['price'], $_POST['description']);
    header("Location: index.php");
    exit();
}
?>
