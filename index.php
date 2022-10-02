<?php

require_once 'db.php';
?>


<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NARCOS BLOG SİTESİ </title>
    <link rel="stylesheet" href="./framework/css/bootstrap.min.css">
    <link rel="stylesheet" href="./framework/css/style.css">
</head>

<body>

    <div class="container">
        <?php require_once 'header.php' ?>

        <div class="row">
            <div class="col-md-9 ">


                <div class="row ">
                    <?php
                   
                   $sorgu1 = mysqli_query($db , "SELECT * FROM `konu` ORDER BY `konu`.`id` DESC");
                   while ($icerik = mysqli_fetch_assoc($sorgu1)) {
                    $isim = str_replace(" ", "", $icerik["ismi"]);
                    $url = $isim . "." . $icerik["id"];

                    ?>
                   
                    <div class=" mx-auto border border-3 col-9 mt-4">

                        <img src="./img/<?php echo $icerik["img"] ?>" class="mt-2" alt="RESİM BULUNAMADI"
                            style="width: 100%; height: 250px;">
                            <a href="b/<?php echo $url?>" style="text-decoration: none; color: black;">
                        <h3><?php echo $icerik["ismi"] ?></h3></a>
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-people" viewBox="0 0 16 16">
                                <path
                                    d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                            </svg>
                            <span class="h6"><?php echo $icerik["goruntulenme"] ?></span>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chat-right-dots " viewBox="0 0 16 16">
                                <path
                                    d="M2 1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h9.586a2 2 0 0 1 1.414.586l2 2V2a1 1 0 0 0-1-1H2zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12z" />
                                <path
                                    d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                            </svg>
                            <span class="h6"><?php echo $icerik["yorum_sayisi"] ?></span>
                        </p>
                       
                    </div>
                    

                    <?php
                   }
                   
                   
                   ?>
                </div>





            </div>
            <div class="col-md-3 ">

                <div style="background-color: #dcdcdc;">
                    <div class="text-center h3 mt-2 mt-4">En Çok Görüntülenen </div>
                    <hr>


                    <?php
                    
                    
                    $sorgu2 = mysqli_query($db, "SELECT * FROM `konu` ORDER BY `konu`.`goruntulenme` ASC  LIMIT 5");
                    while ($icerik = mysqli_fetch_assoc($sorgu2)) {
                     $isim = str_replace(" ", "", $icerik["ismi"]);
                     $url = $isim . "." . $icerik["id"];
                     ?>
                     
                    <a href="b/<?php echo $url?>" style="text-decoration: none;">
                    <div class=" mt-4 text-center">
                        <img src="./img/1.jpg" alt="RESİM BULUNAMADI" style="width: 100%;height: 150px;">
                        <h4 style="color: black;"><?php echo $icerik["ismi"] ?></h4>
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-people" viewBox="0 0 16 16">
                                <path
                                    d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                            </svg>
                            <span class="h6" style="color: black;"><?php echo $icerik["goruntulenme"] ?></span>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chat-right-dots " viewBox="0 0 16 16">
                                <path
                                    d="M2 1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h9.586a2 2 0 0 1 1.414.586l2 2V2a1 1 0 0 0-1-1H2zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12z" />
                                <path
                                    d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                            </svg>
                            <span class="h6" style="color: black;"><?php echo $icerik["yorum_sayisi"] ?></span>
                        </p>
                    </div>
                    </a>


                    <?php
                    }
                    
                    ?>


                </div>





            </div>






        </div>


    </div>



    <script src="./framework/js/bootstrap.bundle.min.js"></script>
</body>

</html>