<?php

require_once "connect.php";

// รับ id จาก URL
$id = $_GET['id'];

// ค้นหาข้อมูล
$sql = "SELECT * FROM student WHERE id = ?";

$stmt = $pdo->prepare($sql);

$stmt->execute([$id]);

$student = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>แก้ไขข้อมูลนักศึกษา</title>
</head>
<body>

<h2>แก้ไขข้อมูลนักศึกษา</h2>

<form action="update.php" method="post">

    <!-- ส่ง id ไปยัง update.php -->
    <input type="hidden" name="id" value="<?= $student['id'] ?>">

    <p>
        ชื่อ
        <br>
        <input
            type="text"
            name="name"
            value="<?= $student['name'] ?>">
    </p>

    <p>
        Email
        <br>
        <input
            type="email"
            name="email"
            value="<?= $student['email'] ?>">
    </p>

    <p>
        อายุ
        <br>
        <input
            type="number"
            name="age"
            value="<?= $student['age'] ?>">
    </p>

    <button type="submit">
        บันทึกข้อมูล
    </button>

</form>

<br>

<a href="week12-tableData.php">
    กลับหน้าหลัก
</a>

</body>
</html>