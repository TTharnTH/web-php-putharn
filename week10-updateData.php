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
        UPDATE student
        SET age = 21
        WHERE id = 1
        ";
        $pdo->exec($sql);
        echo "เปลี่ยนแปลงข้อมูลแล้ว";
    }catch(PDOException $e){
        echo "เกิดข้อผิดพลาด : " . $e->getMessage();
    }
?>