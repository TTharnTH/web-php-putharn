<?php

require_once "connect.php";

// รับข้อมูลจากฟอร์ม
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];

// คำสั่ง SQL
$sql = "
UPDATE student
SET
    name = ?,
    email = ?,
    age = ?
WHERE id = ?
";

// เตรียมคำสั่ง
$stmt = $pdo->prepare($sql);

// ประมวลผล
$stmt->execute([
    $name,
    $email,
    $age,
    $id
]);

// กลับไปหน้าหลัก
header("Location: week12-tableData.php");
exit;

?>