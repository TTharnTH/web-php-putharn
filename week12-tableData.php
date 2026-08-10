<?php
    require_once "connect.php";

    $page = $_GET['page'] ?? 1;
    $limit = 10;
    $offset = ($page - 1) * $limit;

    // นับจำนวนข้อมูล
    $totalRows = $pdo->query("SELECT COUNT(*) FROM student")->fetchColumn();
    $totalPages = ceil($totalRows / $limit);

    // ดึงข้อมูลเฉพาะหน้า
    $sql = "
    SELECT *
    FROM student
    LIMIT :limit
    OFFSET :offset
    ";

    $stmt = $pdo->prepare($sql);

    $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);

    $stmt->execute();

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
                    <a href="delete.php?id=<?= $student['id']?>"
                    onclick="return confirm('คุณต้องการลบข้อมูลนี้ใช่หรือไม่?')">ลบ</a>
                </td>
            </tr>
            <?php } ?>
        </table>
        <?php
        for($i=1;$i<=$totalPages;$i++){
            echo "<a href='?page=$i'>$i</a> ";
        }  
        ?>
    </body>
</html>