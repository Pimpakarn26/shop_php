<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มสินค้า</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
    <h1>เพิ่มสินค้าใหม่</h1>
    <form action="insert.php" method="post">
        <label>ชื่อสินค้า:</label>
        <input type="text" name="name" required><br>
        
        <label>ราคา:</label>
        <input type="number" name="price" required><br>
        
        <label>คำอธิบาย:</label>
        <textarea name="description" required></textarea><br>
        
        <button type="submit">บันทึก</button>
    </form>
</body>
</html>
