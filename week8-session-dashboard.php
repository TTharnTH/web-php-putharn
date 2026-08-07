<?php
    session_start();

    if(isset($_SESSION["username"])){
        echo "ยินดีต้อนรับ " . $_SESSION["username"];
    }else{
        echo "กรุณาล็อคอิน";
    }
?>