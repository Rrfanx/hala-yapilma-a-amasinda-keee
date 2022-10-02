<?php
session_start();
require_once '../ayar.php';


if(!isset($_POST["username"]) && !isset($_POST["password"])){
    header("Location: login.php?err=1");
}else{
    if($admin_name == $_POST["username"] || $admin_password == $_POST["password"]){
        $_SESSION["admin_login"] = true;
        header("Location: index.php");
    }else{
        header("Location: login.php?err=2");
    }
}
?>