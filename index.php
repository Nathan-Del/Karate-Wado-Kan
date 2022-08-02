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
    <link rel="icon" type="image/png" href="../asset/img/icon-web-address.png" />
    <title>Accueil</title>
    <meta name="description" content="USMBM Wado-Kan vous propose de pratiqué le Karaté traditionnel, le Karaté mix/contact, le body karaté, le karaté compétition, le baby karaté, le karaté santé ainsi que le karaté après cancer."/>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-M53KPWBT4T"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-M53KPWBT4T');
    </script>
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
                <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
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
                    <a href="https://www.ffkarate.fr/karate-mix/">
                        <img class="d-block w-100" src="..//asset/img/carousel1.png" alt="First slide">
                    </a>
                     <div class="carousel-caption d-none d-md-block">
                             <p class="sous-titre_img">Le Karaté mix/contact, la synthèse des arts martiaux. Pour les pratiquants qui souhaitent réunir les composantes de percussions debout, projections, immobilisations et soumissions.</p>
                     </div>
                </div>
                <div class="carousel-item">
                    <a href="https://www.ffkarate.fr/karate/body-karate/">
                        <img class="d-block w-100" src="..//asset/img/carousel3.png" alt="Third slide">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                         <p class="sous-titre_img">Pour celles et ceux qui recherchent un moment de défoulement et de remise en forme en musique.</p>
                     </div>
                </div>
                <div class="carousel-item">
                    <a href="https://www.ffkarate.fr/competitions/">
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
                <div class="carousel-item">
                    <a href="#">
                        <img class="d-block w-100" src="..//asset/img/carousel8.png" alt="Second slide">
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
        <br>
        <br>
        <br>
        <h3 style="text-align: center;">Au sein de la section karaté nous vous proposons un large choix de cours adaptés à tous : </h3>
        <br>
        <div class="container karate-section">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-lg-4">
                    <h4 style="font-style:italic; font-weight: bold">
                    Le baby karaté :
                    </h4>
                    <ul>
                        <li>Il peut ce pratiquer à partir de 3 ans, basé sur de la motricité globale à travers un éveil au karaté ludique (Club labellisé Baby Karaté par la FFK).</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container karate-section">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-lg-4">
                    <h4 style="font-style:italic; font-weight: bold">
                    Le karaté traditionnel :
                    </h4>
                    <ul>
                        <li>Il est fait pour tous, des plus jeunes aux séniors en quête d’un art martial à la fois complet et efficace, basé sur l’esquive, le respect de soi et de l’autre.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container karate-section">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-lg-4">
                    <h4 style="font-style:italic; font-weight: bold">
                    Le karaté compétition : 
                    </h4>
                    <ul>
                        <li>Pour les plus fougueux qui aiment se mesurer aux autres et à eux-mêmes, nous vous proposons cette discipline qui comprend le kata et le combat.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container karate-section">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-lg-4">
                    <h4 style="font-style:italic; font-weight: bold">
                    Le karaté mix/contact : 
                    </h4>
                    <ul>
                        <li>La synthèse des arts martiaux. Pour les pratiquants qui souhaitent réunir les composantes de percussions debout, projections, immobilisations et soumissions.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container karate-section">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-lg-4">
                    <h4 style="font-style:italic; font-weight: bold">
                    Le body karaté :  
                    </h4>
                    <ul>
                        <li>Pour celles et ceux qui recherchent un moment de défoulement et de remise en forme en musique. Pour les Kids, association de mouvements d’arts martiaux chorégraphiés sur des rythmes musicaux endiablés !</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container karate-section">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-lg-4">
                    <h4 style="font-style:italic; font-weight: bold">
                    Karaté Adapté Séniors : 
                    </h4>
                    <ul>
                        <li>Il permet, par des mouvements souples et lents, d’améliorer ses capacités fonctionnelles, sa mémoire, son équilibre, sa coordination, tout en retrouvant une énergie générale, à la fois du corps et de l’esprit. Pratique principalement adaptée aux séniors, mais aussi à toute personne désireuse de s’accomplir dans un art martial sans affrontement.</li>
                    </ul>
                </div>
            </div>
        </div>
        <br>
        <p style="text-align: center;">Ainsi, chacun évolue au rythme de ses capacités et de ses envies. <br> 
        Hommes, femmes, très jeunes, moins jeunes, débutants, confirmés, introvertis, fougueux… le karaté est un art martial adapté à tous.</p>
        <script type="text/javascript" src="asset/Accueil.js"></script>
    </main>
    <footer>
        <?php include ('asset/php/footer.php'); ?>  
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</body>
</html>