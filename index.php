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
        <h2 style="text-align: center; font-weight: bold; color: red;">⚠️ Informations COVID-19</h2>
        <br>
        <p style="text-align: center;">Vous l’aurez compris, cette rentrée sportive sera particulière puisque placée sous le signe "Mesures COVID-19". Aussi, pour la santé et la sécurité de tous, notre section, avec la FFK et les différentes communes, a mis en place un protocole sanitaire strict que chacun se devra de <strong> respecter scrupuleusement</strong>.</p>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-lg-4">
                    <h4 style="font-style:italic; font-weight: bold">
                    À l’inscription :
                    </h4>
                    <ul>
                        <li>Tout adhérent se doit de fournir son dossier d’inscription complet. (Merci de privilégier le forum des associations pour finaliser votre dossier afin de limiter les passages au Dojo).</li>
                        <li>Aucun adhérent ne sera admis au Dojo sans son dossier complet.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-lg-4">
                    <h4 style="font-style:italic; font-weight: bold">
                    Avant l’entrainement :
                    </h4>
                    <ul>
                        <li>Chaque adhérent prépare son sac de sport dans lequel se trouvent : sa bouteille d’eau (facile à ouvrir pour les plus jeunes), une serviette éponge, du gel hydroalcoolique, un paquet de mouchoirs à usage unique, ses gants de karaté, ses protections personnelles => il n’y aura aucun prêt de matériel,</li>
                        <li>L’adhérent revêt son karatégi propre et repassé, chez lui, par-dessus lequel il a mis son survêtement pour se rendre à l’entrainement (Attention ! Les vestiaires resteront fermés),</li>
                        <li>Les parents s’assurent que les plus jeunes sont passés aux toilettes avant leur arrivée</li>
                        <li>Tout adhérent qui présente des symptômes tels que, fièvre, nez qui coule, mal de gorge, mal de ventre, diarrhée, perte de goût… est invité à ne pas se présenter à l’entraînement,</li>
                        <li>Le pratiquant se présente aux cours, propre, les ongles de pieds et de mains propres et coupés, les cheveux propres et attachés.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-lg-4">
                    <h4 style="font-style:italic; font-weight: bold">
                    À l’arrivée au Dojo : 
                    </h4>
                    <ul>
                        <li>Le port du masque est obligatoire, à partir de 11 ans, et vivement conseillé pour les plus jeunes, dès l’arrivée sur le parking,</li>
                        <li>Le sas d’entrée à la salle d’entrainement devra être un lieu de passage rapide. Les parents, enfants, … devront attendre à l’extérieur du sas,</li>
                        <li>Un enfant sera accompagné d’une seule personne,</li>
                        <li>Le dojo sera accessible aux seuls adhérents dont le cours débutera. Les parents sont invités à patienter à l’extérieur de la salle d’entrainement (pas dans le sas),</li>
                        <li>Les chaussures devront être retirées dans le sas, et placées dans le sac de sport du pratiquant (prévoir un sac plastique pour les stocker),</li>
                        <li>•Avant d’entrer dans le dojo, les mains et les pieds de chaque pratiquant <p style="font-weight: bold; display:inline-block; margin-bottom: auto;">devront être nettoyés et désinfectés</p>,</li>
                        <li>Chaque adhérent déposera son sac au bord du tatami de façon à y avoir accès durant le cours, sans en sortir.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-lg-4">
                    <h4 style="font-style:italic; font-weight: bold">
                    Durant les cours : 
                    </h4>
                    <ul>
                        <li>Avant de se positionner pour le salut, les pratiquants déposeront leur masque dans leur sac,</li>
                        <li>Bien que les sports de contact soient autorisés, les pratiquants veilleront à respecter une distance d’au moins 1 mètre les uns des autres, surtout en dehors des exercices,</li>
                        <li>Régulièrement, les pratiquants seront invités à se laver les mains au gel hydroalcoolique,</li>
                        <li>Pour les enseignants, le port du masque sera privilégié,</li>
                        <li>Le matériel à usage collectif sera limité à un positionnement au sol que le pratiquant ne devra pas manipuler.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-lg-4">
                    <h4 style="font-style:italic; font-weight: bold">
                    Après le cours :  
                    </h4>
                    <ul>
                        <li>Après le salut, le pratiquant récupérera son sac et sortira du tatami par le "côté fenêtres » de la salle,</li>
                        <li>Le pratiquant quittera l’enceinte sportive immédiatement après son cours.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-lg-4">
                    <h4 style="font-style:italic; font-weight: bold">
                    De retour à la maison : 
                    </h4>
                    <ul>
                        <li>Chaque pratiquant ou le parent pour les plus jeunes, portera une attention très particulière à sa propre hygiène, ainsi qu'au soin et à l’entretien de son équipement (le karatégi devra être lavé après chaque entrainement (pas de lavage à 60 degrés pour ne pas l’abimer) et repassé, les protections devront être désinfectées et séchées…).</li>
                    </ul>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="asset/Accueil.js"></script>
    </main>
    <footer>
        <?php include ('asset/php/footer.php'); ?>  
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</body>
</html>