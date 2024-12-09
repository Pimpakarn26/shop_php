<?php
include 'connect.php';

function loginUser($username, $password) {
    global $conn;
    $sql = "SELECT * FROM users WHERE username = :username AND password = :password";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['username' => $username, 'password' => md5($password)]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
