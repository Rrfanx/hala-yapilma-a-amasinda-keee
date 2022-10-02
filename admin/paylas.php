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
    <title>Konu Payla | Admin Panel </title>
    <link rel="stylesheet" href="../framework/css/bootstrap.min.css">
    <link rel="stylesheet" href="../framework/css/style.css">
</head>

<body>

    <div class="container">
        <?php require_once 'header.php' ?>
        <script src="../ckeditor/ckeditor.js"></script>

        <form action="konupaylas.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Başıl Giriniz</label>
                <input type="text" class="form-control" name="baslik" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
  <label for="formFile" class="form-label">Konu img</label>
  <input class="form-control" name="img" type="file" id="formFile">
</div>

            <textarea name="editor1"></textarea>

            <button type="submit" class="btn btn-primary">Konuyu Paylaş</button>
        </form>
        <script>
        CKEDITOR.replace('editor1');
        </script>



    </div>








    <script src="../framework/js/bootstrap.bundle.min.js"></script>
</body>

</html>