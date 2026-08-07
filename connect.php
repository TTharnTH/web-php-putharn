<?php
// Database connection parameters
    $host = "localhost";
    $dbname = "school";
    $username = "root";
    $password = "";

    $pdo = new pdo(
           "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
            $username,
            $password
        );

        $pdo->setAttribute(
            PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION
        );
?>