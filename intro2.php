<?php
// หน้าแนะนำตัวอย่างง่าย
$name = "Phutharn Aendu";
$age = 28;
$occupation = "นักพัฒนาเว็บ";
$hobby = "อ่านหนังสือและเขียนโปรแกรม";
$quote = "สวัสดีครับ ยินดีที่ได้รู้จัก!";
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แนะนำตัว - <?php echo $name; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fb;
            color: #333;
            padding: 2rem;
        }
        .card {
            max-width: 650px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.08);
            padding: 2rem;
        }
        h1 {
            color: #2c3e50;
        }
        p {
            line-height: 1.7;
        }
        .highlight {
            color: #1a73e8;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1><?php echo $quote; ?></h1>
        <p>สวัสดีครับ ผมชื่อ <span class="highlight"><?php echo $name; ?></span>.</p>
        <p>ผมทำงานเป็น <span class="highlight"><?php echo $occupation; ?></span> และชอบ <span class="highlight"><?php echo $hobby; ?></span>.</p>
        <p>ผมอายุ <span class="highlight"><?php echo $age; ?></span> ปี และกำลังเรียนรู้การสร้างเว็บด้วย PHP อย่างต่อเนื่อง.</p>
        <p>ขอบคุณที่เข้ามาชมหน้าของผมครับ!</p>
    </div>
</body>
</html>
