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

        $name = "ภูธาร เอ็นดู";

        $sql ="
        SELECT * FROM student WHERE name = ?
        ";

        $stmt = $pdo->prepare($sql);

        $stmt->execute([$name]);

        $student = $stmt->fetch(PDO::FETCH_ASSOC);

        echo "นักศึกษาชื่อ " . $name . " มีข้อมูลดังนี้<br>";
        echo "ID: " . $student['id'] . "<br>";

    }catch(PDOException $e){
        echo "เกิดข้อผิดพลาด : " . $e->getMessage();
    }
?>