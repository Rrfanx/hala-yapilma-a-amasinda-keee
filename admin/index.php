<?php

require_once '../db.php';


if($_SESSION["admin_login"] !== true){
    header("Location: login.php");
}



?>


<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Panel </title>
    <link rel="stylesheet" href="../framework/css/bootstrap.min.css">
    <link rel="stylesheet" href="../framework/css/style.css">
</head>

<body>

    <div class="container">
        <?php require_once 'header.php' ?>



    </div>








    <script src="../framework/js/bootstrap.bundle.min.js"></script>
</body>

</html>