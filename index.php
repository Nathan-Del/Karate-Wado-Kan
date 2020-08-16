<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="../asset/jQuery_2-2-1.js"></script>
    <!--CSS-->
    <!-- <link rel="stylesheet" href="../bootstrap-4.3.1/css/bootstrap.css"> -->
    <link rel="stylesheet" href="..//bootstrap-4.4.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../asset/app.css">
    <!--JS-->
    <script async src="..//bootstrap-4.3.1/js/bootstrap.js"></script>
    <script async src="../bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
    <!-- <script async src="../bootstrap-4.4.1-dist/js/bootstrap.js"></script> -->
    <script async src="../asset/app.js"></script>
    <title>Accueil</title>
    <meta name="description" content="USMBM Wado-Kan vous propose de pratiqué le Karaté traditionnel, le Karaté mix/contact, le body karaté, le karaté compétition, le baby karaté, le karaté santé ainsi que le karaté après cancer."/>
</head>
<body>
    <header>
        <?php include ('asset/php/header.php'); ?>  
    </header>
    <main>
        <div class="content">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="../HistoireClub.php">
                        <img class="d-block w-100" src="..//asset/img/carousel2.png" alt="Second slide">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                    <h5 class="titre-img">Le Karaté traditionnel</h5>
                         <p class="sous-titre_img">Pour tous, des plus jeunes aux séniors en quête d’un art martial à la fois complet et efficace, basé sur l’esquive, le respect de soi et de l’autre.</p>
                     </div>
                </div>
                <div class="carousel-item">
                    <a href="http://lemag.ffkarate.fr/temoignages-professeur-club-karate-mix-clubs-redemandent/">
                        <img class="d-block w-100" src="..//asset/img/carousel1.png" alt="First slide">
                    </a>
                     <div class="carousel-caption d-none d-md-block">
                             <p class="sous-titre_img">Le Karaté mix/contact, la synthèse des arts martiaux. Pour les pratiquants qui souhaitent réunir les composantes de percussions debout, projections, immobilisations et soumissions.</p>
                     </div>
                </div>
                <div class="carousel-item">
                    <a href="https://www.ffkarate.fr/body-karate-pourquoi-ca-cartonne/">
                        <img class="d-block w-100" src="..//asset/img/carousel3.png" alt="Third slide">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                         <p class="sous-titre_img">Pour celles et ceux qui recherchent un moment de défoulement et de remise en forme en musique.</p>
                     </div>
                </div>
                <div class="carousel-item">
                    <a href="http://lemag.ffkarate.fr/temoignages-professeur-club-karate-mix-clubs-redemandent/">
                        <img class="d-block w-100" src="..//asset/img/carousel4.png" alt="Second slide">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                    <h5 class="titre-img">Kata & Combat</h5>
                         <p class="sous-titre_img">Pour les plus fougueux qui aiment se mesurer aux autres et à eux-mêmes.</p>
                     </div>
                </div>
                <div class="carousel-item">
                    <a href="../LabelBaby.php">
                        <img class="d-block w-100" src="..//asset/img/carousel5.png" alt="Second slide">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                         <p class="sous-titre_img">À partir de 3 ans, basé sur de la motricité globale à travers un éveil au karaté ludique (Club labellisé Baby Karaté par la FFK).</p>
                     </div>
                </div>
                 <div class="carousel-item">
                    <a href="../LabelCancer.php">
                        <img class="d-block w-100" src="..//asset/img/carousel6.png" alt="Second slide">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                         <p class="sous-titre_img"></p>
                     </div>
                </div>
                 <div class="carousel-item">
                    <a href="../LabelSante.php">
                        <img class="d-block w-100" src="..//asset/img/carousel7.png" alt="Second slide">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                         <p class="sous-titre_img"></p>
                     </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <script type="text/javascript" src="asset/Accueil.js"></script>
    </main>
    <footer>
        <?php include ('asset/php/footer.php'); ?>  
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</body>
</html>