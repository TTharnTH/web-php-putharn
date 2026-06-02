<?php
$title = 'สถานที่ท่องเที่ยวจังหวัดนครศรีธรรมราช';
$attractions = [
    [
        'name' => 'พระบรมธาตุเจดีย์นครศรีธรรมราช (Wat Phra Mahathat Woramahawihan)',
        'location' => 'ตัวเมืองนครศรีธรรมราช',
        'desc' => 'พระบรมธาตุเจดีย์ศักดิ์สิทธิ์คู่เมือง เป็นศูนย์รวมจิตใจของชาวนครฯ มีสถาปัตยกรรมและประวัติศาสตร์ยาวนาน',
        'tips' => 'ควรแต่งกายสุภาพ เข้าชมได้ทั้งวัน แต่ช่วงเช้าและเย็นอากาศสบายกว่า',
        'image' => 'https://via.placeholder.com/600x350?text=Phra%20Borommathat'
    ],
    [
        'name' => 'อุทยานแห่งชาติเขาหลวง (Khao Luang National Park)',
        'location' => 'อำเภอเมืองและอำเภอใกล้เคียง',
        'desc' => 'ภูเขา ป่าดิบชื้น น้ำตกและเส้นทางเดินป่าที่สวยงาม เหมาะสำหรับการชมธรรมชาติและนก',
        'tips' => 'เตรียมรองเท้าสำหรับเดินป่า น้ำดื่ม และเช็คสภาพอากาศก่อนออกเดินทาง',
        'image' => 'https://via.placeholder.com/600x350?text=Khao%20Luang'
    ],
    [
        'name' => 'หาดขนอม และโลมาสีชมพู (Khanom Beach & Pink Dolphins)',
        'location' => 'อำเภอขนอม',
        'desc' => 'หาดทรายงดงาม น้ำใส และเป็นจุดชมโลมาสีชมพูที่มีชื่อเสียงของภาคใต้',
        'tips' => 'ออกเรือชมโลมาในช่วงเช้าหรือเย็น จ้างมัคคุเทศก์ท้องถิ่นเพื่อความปลอดภัย',
        'image' => 'https://via.placeholder.com/600x350?text=Khanom%20Beach'
    ],
    [
        'name' => 'พิพิธภัณฑสถานแห่งชาตินครศรีธรรมราชและเขตเมืองเก่า',
        'location' => 'ตัวเมืองนครศรีธรรมราช',
        'desc' => 'เรียนรู้ประวัติศาสตร์ ศิลปวัตถุ และวัฒนธรรมพื้นถิ่นของนครศรีธรรมราช',
        'tips' => 'เดินเที่ยวเมืองเก่า ชมสถาปัตยกรรมแบบพื้นถิ่นและชิมอาหารท้องถิ่น',
        'image' => 'https://via.placeholder.com/600x350?text=Museum'
    ],
];
?><!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo htmlspecialchars($title); ?></title>
    <style>
        body{font-family:Arial,Helvetica,sans-serif;margin:0;padding:0;background:#f7f7f7;color:#222}
        .container{max-width:900px;margin:24px auto;padding:20px;background:#fff;border-radius:8px;box-shadow:0 2px 6px rgba(0,0,0,0.08)}
        h1{margin-top:0}
        .attraction{display:flex;gap:16px;padding:12px 0;border-bottom:1px solid #eee}
        .attraction img{width:260px;height:150px;object-fit:cover;border-radius:6px}
        .info{flex:1}
        .name{font-size:18px;font-weight:700;margin:0 0 6px}
        .loc{color:#666;margin-bottom:8px}
        .tips{background:#f0f8ff;border-left:4px solid #3b82f6;padding:8px;border-radius:4px;color:#034}
        .footer{margin-top:18px;color:#555;font-size:14px}
    </style>
</head>
<body>
<div class="container">
    <h1><?php echo htmlspecialchars($title); ?></h1>
    <p>รวมสถานที่ท่องเที่ยวเด่นของจังหวัดนครศรีธรรมราช พร้อมคำแนะนำสั้น ๆ สำหรับนักท่องเที่ยว</p>

    <?php foreach($attractions as $a): ?>
        <div class="attraction">
            <img src="<?php echo htmlspecialchars($a['image']); ?>" alt="<?php echo htmlspecialchars($a['name']); ?>">
            <div class="info">
                <p class="name"><?php echo htmlspecialchars($a['name']); ?></p>
                <p class="loc"><?php echo htmlspecialchars($a['location']); ?></p>
                <p><?php echo htmlspecialchars($a['desc']); ?></p>
                <p class="tips"><strong>คำแนะนำ:</strong> <?php echo htmlspecialchars($a['tips']); ?></p>
            </div>
        </div>
    <?php endforeach; ?>

    <div class="footer">ต้องการเนื้อหาเพิ่มเติมหรือให้ผมเพิ่มรูป/แผนที่ไหม? แจ้งได้เลย</div>
</div>
</body>
</html>
