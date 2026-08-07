<?php

require_once "connect.php";

// รับ id จาก URL
$id = $_GET['id'];

// คำสั่ง SQL
$sql = "DELETE FROM student WHERE id = ?";

// เตรียมคำสั่ง
$stmt = $pdo->prepare($sql);

// ส่งค่า id
$stmt->execute([$id]);

// กลับหน้าหลัก
header("Location: week12-tableData.php");
exit;

?>