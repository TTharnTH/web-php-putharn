<?php
    // Database connection parameters
    $host = "localhost";
    $dbname = "school";
    $username = "root";
    $password = "";

    try{
        $pdo = new pdo(
           "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
            $username,
            $password
        );

        $pdo->setAttribute(
            PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION
        );

        $sql ="
        DELETE FROM student WHERE id = 4
        ";

        $pdo->exec($sql);
        echo "ลบข้อมูลสำเร็จแล้ว";
    }catch(PDOException $e){
        echo "เกิดข้อผิดพลาด : " . $e->getMessage();
    }
?>