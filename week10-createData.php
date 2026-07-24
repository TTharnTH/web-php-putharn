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
        INSERT INTO student (name,email,age)
        VALUES ('เทียนมี่มี ไหมไม่รู้', 'example2@email.com', 20)
        ";

        $pdo->exec($sql);
        echo "เพิ่มข้อมูลสำเร็จแล้ว";
    }catch(PDOException $e){
        echo "เกิดข้อผิดพลาด : " . $e->getMessage();
    }
?>