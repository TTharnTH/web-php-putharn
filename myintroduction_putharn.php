<?php
// ไฟล์นำเสนอตัวเองด้วยภาษา PHP อย่างง่าย
$student_name = "ภูธาร เอ็นดู";
$student_id = "5922040036";
$department = "เทคโนโลยีดิจิทัล";
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลนักศึกษา</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f0f8ff; color: #333; padding: 20px; }
        .card { background: #fff; border-radius: 10px; padding: 20px; max-width: 500px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h1 { margin-top: 0; color: #003366; }
        p { line-height: 1.6; }
    </style>
</head>
<body>
    <div class="card">
        <h1>แนะนำตัว</h1>
        <p><strong>ชื่อ:</strong> <?php echo $student_name; ?></p>
        <p><strong>รหัสนักศึกษา:</strong> <?php echo $student_id; ?></p>
        <p><strong>แผนกวิชา:</strong> <?php echo $department; ?></p>
        <p>สวัสดีครับ/ค่ะ นี่คือไฟล์ PHP สำหรับนำเสนอตัวเองอย่างง่าย โดยแสดงชื่อ รหัสนักศึกษา และแผนกวิชา</p>
    </div>
</body>
</html>
