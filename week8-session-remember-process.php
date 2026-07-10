<?php

session_start();

$username = $_POST["username"];
$password = $_POST["password"];

if($username=="admin" && $password=="1234"){

    session_regenerate_id(true);

    $_SESSION["username"]=$username;

    if(isset($_POST["remember"])){

        setcookie(
            "username",
            $username,
            time()+60*60*24*7
        );

    }

    echo "Login Success";

}else{

    echo "Login Failed";

}
?>