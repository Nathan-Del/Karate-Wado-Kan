<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="../asset/jQuery_2-2-1.js"></script>
    <!--CSS-->
    <!-- BOOTDTRAP 4.3.1 -->
    <!-- <link rel="stylesheet" href="..//bootstrap-4.3.1/css/bootstrap.css"> -->
    <link rel="stylesheet" href="..//bootstrap-4.4.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="..//asset/app.css">
    <link rel="stylesheet" href="..//asset/info.css">
    <!--JS-->
    <!-- BOOTDTRAP 4.3.1 -->
    <!-- <script async src="..//bootstrap-4.3.1/js/bootstrap.js"></script> -->
    <script async src="..//bootstrap-4.4.1-dist/js/bootstrap.js"></script>
    <script async src="..//asset/app.js"></script>
    <title>Horaires & Tarifs</title>
    <meta name="description" content="Lieu : Dojo situé au sous sol de la salle polyvalente 'Les Tilleuls' - 18 rue de Pontoise. Pour les horaires veuillez consulté le tableau sur cette page pour connaître l'heure de votre cours en fonction de votre age."/>
</head>
<body>
    <header>
        <?php include ('asset/php/header.php'); ?>  
    </header>
    <main>
      <!-- <center><img id="image-tarif" src="..//asset/img/HorairesTarifs.PNG" alt="HorairesTarifs karaté montsoult"></center> -->
      <!-- <p>Ouvrir un fichier PDF  <a href="asset/img/Horaires & tarifs 2020-2021.pdf">exemple</a>.</p> -->
      <center>
        <iframe class="info-pdf" src="asset/img/Horaires & tarifs 2020-2021.pdf" width="80%" height="800px">
        </iframe>
        <p class="info-pdf-link" >Pour consulter la fiche horaire, cliquez ici : <a href="asset/img/Horaires & tarifs 2020-2021.pdf" class="btn btn-danger btn-lg" >PDF</a></p>
    </center>
      
      <br>
      <br>
      <div class="info">
        <p><strong>A noter : </strong>Cours Spécial Compétiteurs Combat tous les jeudis de 18h45 à 20h.</p>
        <p>Partenariat permettant d'accéder aux cours competitions du club de Domont (Mercredi 19h00 - 20h30)</p>
      </div>
      <br>
      <div>
        <p style="text-align: center;"><strong>Inscription possible tout au long de l'année.</strong></p>
      </div>
    </main>
    <footer>
        <?php include ('asset/php/footer.php'); ?>  
    </footer>
</body>
</html>