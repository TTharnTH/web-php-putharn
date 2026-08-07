<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>เพิ่มข้อมูลนักศึกษา</title>
</head>
<body>

<h2>เพิ่มข้อมูลนักศึกษา</h2>

<form action="insert.php" method="post">

    <p>
        ชื่อ<br>
        <input type="text" name="name">
    </p>

    <p>
        Email<br>
        <input type="email" name="email">
    </p>

    <p>
        อายุ<br>
        <input type="number" name="age">
    </p>

    <button type="submit">
        บันทึกข้อมูล
    </button>

</form>

<br>

<a href="index.php">
    กลับหน้าหลัก
</a>

</body>
</html>