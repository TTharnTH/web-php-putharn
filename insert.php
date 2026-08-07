<?php

require_once "connect.php";

// รับข้อมูลจากฟอร์ม
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];

// คำสั่ง SQL
$sql = "INSERT INTO student (name, email, age)
        VALUES (?, ?, ?)";

// เตรียมคำสั่ง SQL
$stmt = $pdo->prepare($sql);

// ส่งข้อมูลไปยังฐานข้อมูล
$stmt->execute([
    $name,
    $email,
    $age
]);

// กลับไปหน้าหลัก
header("Location: week12-tableData.php");
exit;

?>