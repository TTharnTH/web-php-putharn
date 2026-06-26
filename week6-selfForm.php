<?php
    $status = false;
    $name = '';
    $error = [];

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $name = $_POST['name'] ?? '';
        if (empty($name)){
            $error["err_name"] = "กรุณากรอกชื่อ";
        }else{
            $status = true;
        }
    }

?>






<!DOCTYPE html>
<html lang='th'>
<head>
    <meta charset='UTF-8'>
    <title>Page Title</title>
</head>
<body>
    <?php if($status): ?>
        <h1>สวัสดี <?php echo trim(htmlspecialchars($name, ENT_QUOTES, 'UTF-8')) ?></h1>
        <h1>สวัสดี <?php echo strip_tags($name) ?></h1>
        <h1>สวัสดี <?php echo trim($name) ?></h1>
    <?php else: ?>
    <form action="" method="post">
        <label>ชื่อ:</label>
        <input type="text" name="name">
        <?php if (isset($error["err_name"])): ?>
            <span style="color: red;"><?php echo $error["err_name"] ?></span>
        <?php endif; ?>
        <br>
        <input type="submit" value="ส่งข้อมูล">
    </form>
    <?php endif; ?>
</body>
</html>