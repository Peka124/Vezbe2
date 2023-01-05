<?php
require "model/korisnik.php";

session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
    $unn=$_POST['username'];
    $psn=$_POST['password'];

    $kon=new mysqli();

    $korisnik=new Korisnik(null, $unn, $psn);
    $odg1=$korisnik->prijavljivanjeKorisnika($korisnik, $kon);
    $odg2=Korisnik::prijavljivanjeKorisnika($korisnik, $kon);//Pristupanje statickoj funkciji

    if($odg2)
    {
        echo `<script>
        console.log("Uspesno ste se prijavili");
        </script>`;

        $_SESSION['user_id']=$korisnik->id;
        header('Location: home.php');
        exit();
    }else
    {
        echo `<script>
        console.log("Neuspesna prijava ");
        </script>`;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>FON: Zakazivanje kolokvijuma</title>

</head>
<body>
    <div class="login-form">
        <div class="main-div">
            <form method="POST" action="#">
                <div class="container">
                    <label class="username">Korisnicko ime</label>
                    <input type="text" name="username" class="form-control"  required>
                    <br>
                    <label for="password">Lozinka</label>
                    <input type="password" name="password" class="form-control" required>
                    <button type="submit" class="btn btn-primary" name="submit">Prijavi se</button>
                </div>

            </form>
        </div>

        
    </div>
</body>
</html>