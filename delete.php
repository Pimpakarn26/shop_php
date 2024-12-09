<?php
include 'database/controller.php';

if (isset($_GET['id'])) {
    deleteProduct($_GET['id']);
    header("Location: index.php");
    exit();
}
?>
