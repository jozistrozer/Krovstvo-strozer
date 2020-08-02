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
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/galerija.css">
    <script src="js/main.js"></script>


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
                <li class="active"><a href="galerija.php">Galerija</a></li>
                <li><a href="povprasevanje.html">Povpraševanje</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><i class="fas fa-facebook"></i></a></li>
                <li><a href="#">M</a></li>
            </ul>
        </div>
    </div>
</nav></div>

<!-- Galerija -->
<div class="container-fluid-gallery">
    <div class="gallery-container">
    <?php
        foreach(glob('res/galerija/*.*') as $file) {
            echo "<div class='img-container'>";
            echo "<img src='".$file."' alt='Strožer, Kleparstvo In Montaža, Žan Strožer S.p.' onclick='OpenPicture(\"$file\");'>";
            echo "</div>";
        }
    ?>
    </div>
</div>

<!-- The Modal -->
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <img src="#" alt="Strožer, Kleparstvo In Montaža, Žan Strožer S.p." id="modal-slika" style="width: 650px; height: 650px; margin-top: 25px;">
  </div>

</div>

</body>

<!-- Noga spletne strani -->
<footer>
    <nav class="navbar navbar-inverse" id="noga">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><div class="footer-header"><div class="brand-name">STROŽER</div>, kleparstvo in montaža, Žan Strožer s.p.</div></a>
            </div>
        </div>
    </nav>
</footer>

<script src="js/galerija.js"></script>

</html>