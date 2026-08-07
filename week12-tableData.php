<?php
    require_once "connect.php";

    $sql = "SELECT * FROM student";

    $stmt = $pdo->query($sql);

    $students = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ข้อมูลนักเรียน</title>
    </head>
    <body>
        <h2>ข้อมูลนักเรียน</h2>
        <a href="add.php">เพิ่มข้อมูลนักเรียน</a>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>email</th>
                <th>age</th>
                <th>Actions</th>
            </tr>
            <?php foreach($students as $student){ ?>
            <tr>
                <td><?= $student['id']?></td>
                <td><?= $student['name']?></td>
                <td><?= $student['email']?></td>
                <td><?= $student['age']?></td>
                <td>
                    <a href="edit.php?id=<?= $student['id']?>">แก้ไข</a>
                    <a href="delete.php?id=<?= $student['id']?>">ลบ</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>