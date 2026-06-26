<?php
    $status = false;
    $name = '';
    $error = [];

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = $_POST['name'] ?? '';
        if (empty($name)) {
            $error["name"] = "กรุณากรอกชื่อ";
        } else {
            $status = true;
        }
    }


?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Self-form</title>
</head>
<body>
    <?php if ($status): ?>
        <h1>สวัสดีคุณ <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></h1>
    <?php else: ?>
    <form method="post" action="">
        <label>ชื่อ:</label>
        <input type="text" name="name">
        <?php if (isset($error["name"])): ?>
            <span style="color: red;"><?php echo $error["name"]; ?></span>
        <?php endif; ?>
        <br>
        <button type="submit">ส่งข้อมูล</button>
    </form>
    <?php endif; ?>
</body>
</html>