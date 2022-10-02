<?php

print_r($_POST);
print_r($_FILES);
require_once '../db.php';
session_start();


if($_SESSION["admin_login"] !== true){
    header("Location: login.php");
}

if(!empty($_POST["baslik"]) && !empty($_POST["editor1"])){
    
    $dosyaad = "img";
    $ad = substr(md5((md5(rand(0,500)))), 0 , 10);
    $yukleme_yeri = __DIR__ . DIRECTORY_SEPARATOR. "..".DIRECTORY_SEPARATOR.$dosyaad.DIRECTORY_SEPARATOR.$ad.".png";

    

    if($_FILES["img"]["size"] > 1000000){
        header("Location: /admin/paylas?err=2");
    }else{
        $dosyauzantı = pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION);
        if($dosyauzantı == "png" || $dosyauzantı == "jpg"){


            $sonuc = move_uploaded_file($_FILES["img"]["tmp_name"], $yukleme_yeri);
            if($sonuc == 1){




                $konu_isim = $_POST["baslik"];
                $konu_icerik = $_POST["editor1"];

                $sonuc_2 =  mysqli_query($db, "INSERT INTO `konu` (`id`, `ismi`, `detay`, `yorum_sayisi`, `goruntulenme`, `tarih`, `img`) VALUES (NULL, '$konu_isim', '$konu_icerik', '0', '0', current_timestamp(), '$ad.png');");
                if($sonuc_2 == 1){
                    header("Location: /admin?suc=1");
                }else{
                    header("Location: /admin/paylas?err=5");
                }

            }else{
                header("Location: /admin/paylas?err=4");
            }


        }else{
            header("Location: /admin/paylas?err=3");
        }
    }

    

    



}else {
    header("Location: /admin/paylas?err=1");
}





?>