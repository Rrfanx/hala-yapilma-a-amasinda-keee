<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../framework/css/bootstrap.min.css">
    <link rel="stylesheet" href="../framework/css/style.css">
</head>

<body>

    <div class="container text-center mt-5">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6 ">

                <?php
                if(isset($_GET["err"])){
                    if($_GET["err"] == 1){
                        echo '
                        <div class="alert alert-danger" role="alert">
                        Şifre Veya Kullanıcı Adı Boş
                        </div>
                        ';
                    }elseif($_GET["err"] == 2){
                        echo '
                        <div class="alert alert-danger" role="alert">
                        Kullanıcı Adı Veya Şifre Hatalı
                        </div>
                        ';
                    }
                }
                
                
                ?>


                <H1>Giriş Yap</H1>
                <form action="login_s.php" method="POST">
                    <input class="form-control" type="text" name="username" placeholder="Kullanıcı Adı"
                        aria-label="Kullanıcı Adı"><br>
                    <input class="form-control" type="password" name="password" placeholder="Şifre"
                        aria-label="Şifre"><br>
                    <button type="submit" class="btn btn-primary">Giriş Yap</button>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>

    <script src="../framework/js/bootstrap.bundle.min.js"></script>
</body>

</html>