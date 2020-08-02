<?php
if(isset($_POST["poslji"])){
    $ime = $_POST["ime"];
    $priimek = $_POST["priimek"];
    $telefon = $_POST["telefon"];
    $email = $_POST["email"];
    $naslov = $_POST["naslov"];
    $posta_kraj = $_POST["posta_kraj"];
    $opis_objekta = $_POST["opis_objekta"];

    // Poslji posto

    $to = "strozer.zan@gmail.com";
    $subject = "Novo povpraševanje";
    $txt = "Pridobili ste novo povpraševanje od: \n\r".
            "Ime: " . $ime . "\n\r" .
            "Priimek: " . $priimek . "\n\r" .
            "Telefon: " . $telefon . "\n\r" .
            "E-mail: " . $email . "\n\r" .
            "Naslov: " . $naslov . "\n\r" .
            "Posta in kraj: " . $posta_kraj . "\n\r" .
            "Opis objekta: \n" . $opis_objekta . "\n\r" .
            "Lep pozdrav, www.krovstvo-strozer.si";

    $ok = mail($to,$subject,$txt);

    if($ok){
        header("Location: povprasevanje_sent.php?status=1");
        exit();
    }else{
        header("Location: povprasevanje_sent.php?status=0");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <title>Strožer, krovstvo in kleparstvo</title>

    <!-- Meta oznake za SEO -->
    <meta name="description" content="STROŽER, krovstvo, kleparstvo s.p, Žan Strožer s.p.">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap & CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/d039170b1a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
<!-- Navigacijska fleha -->
<div class="header"><nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="navbar-brand-centered"><img src="res/logotip.png" width="200" height="169" class="logo-img"></div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-brand-centered">
            <ul class="nav navbar-nav">
                <li><a href="index.html">Domov</a></li>
                <li><a href="kontakt.html">Kontakt</a></li>
                <li><a href="galerija.php">Galerija</a></li>
                <li class="active"><a href="povprasevanje.html">Povpraševanje</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="https://www.facebook.com/strozer.kleparstvomontaza" target="_blank"><i class="fab fa-facebook-square fa-1x"></i></a></li>
                <li><a href="mailto:strozer.zan@gmail.com"><i class="fas fa-envelope-square fa-1x"></i></a></li>
            </ul>
        </div>
    </div>
</nav></div>

<!-- NASLOV -->
<h1 class="text-center">Menjavate streho in želite prejeti ponudbo?</h1>
<h4 class="text-center" style="color: dimgrey">Izpolnite obrazec za ponudbo.</h4>
<!-- FORM -->
<div class="form">
    <div class="container">
        <form action="" method="post">
                <div class="form-group">
                    <p style="color:red; float:right;">Vsi podatki so obvezni.</p>
                    <label for="ime" style="margin-top: 25px;">Ime:</label>
                    <input type="text" class="form-control" id="ime" name="ime" required minlength="3">
                </div>
                <div class="form-group">
                    <label for="priimek">Priimek:</label>
                    <input type="text" class="form-control" id="priimek" name="priimek" required minlength="3">
                </div>
                <div class="form-group">
                    <label for="telefon">Telefon:</label>
                    <input type="tel" class="form-control" id="telefon" name="telefon" required pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}"> <p>Oblika: 040-444-444</p>
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" class="form-control" id="email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$">
                </div>
                <div class="form-group">
                    <label for="naslov">Naslov:</label>
                    <input type="text" class="form-control" id="naslov" name="naslov" required>
                </div>
                <div class="form-group">
                    <label for="posta_kraj">Pošta in kraj:</label>
                    <input type="text" class="form-control" id="posta_kraj" name="posta_kraj" required>
                </div>

                <div class="form-group">
                    <label for="opis_objekta">Opis objekta:</label>
                    <textarea name="opis_objekta" class="form-control" id="opis_objekta" style="height: 125px" required></textarea>
                </div>

                <div class="form-group">
                    <input type="submit" name="poslji" class="form-control" value="Pošlji povpraševanje." style="background-color: #e3e3e3; font-weight: bold; color: black; width: 200px;">
                </div>

        </form>
    </div>
</div>

</body>

<!-- Noga spletne strani -->
<footer>
    <div class="partnerji">
        <div class="partner">
            <a href="https://www.creaton.si" target="_blank"><img src="res/partnerji/creaton.jpg" alt="Creaton"></a>
        </div>
        <div class="partner">
            <a href="https://www.wienerberger.si" target="_blank"><img src="res/partnerji/tondach.jpg" alt="Tondach"></a>
        </div>
        <div class="partner">
            <a href="https://www.gerardroofs.si/sl/" target="_blank"><img src="res/partnerji/gerard.jpg" alt="Gerard"></a>
        </div>
        <div class="partner">
            <a href="https://www.salonit.si/" target="_blank"><img src="res/partnerji/salonit_anhovo.jpg" alt="Salonit Anhovo" style="height: 50px"></a>
        </div>
        <div class="partner">
            <a href="https://www.velux.si/" target="_blank"><img src="res/partnerji/velux.jpg" alt="Velux" style="height: 50px"></a>
        </div>
        <div class="partner">
            <a href="http://www.fakro.si/" target="_blank"><img src="res/partnerji/fakro.jpg" alt="Fakro" style="height: 50px"></a>
        </div>
        <div class="partner">
            <a href="http://www.indap.si/" target="_blank"><img src="res/partnerji/indap.jpg" alt="Indap SKM"></a>
        </div>
    </div>
    <nav class="navbar navbar-inverse" id="noga">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><div class="footer-header"><div class="brand-name">STROŽER</div>, kleparstvo in montaža, Žan Strožer s.p.</div></a>
            </div>
        </div>
    </nav>
</footer>
</html>
