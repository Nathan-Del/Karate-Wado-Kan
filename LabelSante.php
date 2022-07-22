<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="../asset/jQuery_2-2-1.js"></script>
  <!--CSS-->
    <!-- BOOTDTRAP 4.3.1 -->
    <!-- <link rel="stylesheet" href="../bootstrap-4.3.1/css/bootstrap.css"> -->
    <link rel="stylesheet" href="../bootstrap-4.4.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../asset/app.css">
    <link rel="stylesheet" href="../asset/labels.css">
    <!--JS-->
    <!-- BOOTDTRAP 4.3.1 -->
    <!-- <script async src="../bootstrap-4.3.1/js/bootstrap.js"></script> -->
    <script async src="../bootstrap-4.4.1-dist/js/bootstrap.js"></script>
    <script async src="../asset/app.js"></script>
    <link rel="icon" type="image/png" href="../asset/img/icon-web-address.png" />
    <title>Label Santé</title>
    <meta name="description" content="Certains de nos professeurs sont diplomés avec des spécialités qui leurs permettes de dispensé des cours de karatés spécialisé avec les labels Cancer, Santé et Baby."/>
</head>
<body>
    <header>
        <?php include ('asset/php/header.php'); ?>  
    </header>
    <main>
      <h2 id="titre" class="label-center">Labels</h2>
      <section>
        <ul id="tab-nav">
            <li><a href="../LabelCancer.php">Label Cancer</a></li>
            <li><a href="../LabelSante.php"class="tab-nav-active">Label Santé</a></li>
            <li><a href="../LabelBaby.php">Label Baby</a></li>
        </ul>
      </section>
      <section>
        <h4 class="label-section"><strong>Karaté : Sport Santé</strong></h4>
        <center><img class="label-img" id="img-sante" src="../asset/img/sport_sante.png" alt="sport sante"></center>
        <section class="label-text">
          <p >C’est désormais prouvé, l’activité physique améliore l’état de santé physique et psychique de chacun, au quotidien, à tous les moments de la vie.
            <br>
            <br>
            Lutter contre la sédentarité, l’inactivité et l’ensemble des pathologies chroniques qui y sont liées est un enjeu de santé publique.
            <br>
            <br>
            L’U.S.M.B.M. Karaté a choisi de s’inscrire dans le plan stratégique national « Sport Santé » 2019/2024. Ainsi, nous proposons, aux personnes atteintes d’une affection longue durée (A.L.D.), un karaté sécurisant, adapté à leur pathologie et à visée thérapeutique, encadré par des professionnels qualifiés « Sport Santé ».
            <br>
            <br>
            Vous êtes en A.L.D. ?
            <br>
            <li>Faites-vous prescrire, sur ordonnance, des séances de karaté par votre médecin traitant ou spécialiste,</li>
            <li>Bénéficiez de la prise en charge totale ou partielle de votre cotisation par votre mutuelle 
            (Voir conditions « Sport sur ordonnance auprès de votre mutuelle santé ou de votre assurance),</li>
            <li>Profitez des bienfaits du karaté en toute sécurité et partagez des moments à la fois sportifs et conviviaux.</li>
          </p>
          <br>
          <br>
          <p>Professeurs formés par : </p>
          <br>
          <br>
          <br>
          <br>
          <center><img class="logo-label" src="../asset/img/cdos_karate2.png" alt="cdos karate"></center>
        </section>
      </section>
    </main>
    <footer>
        <?php include ('asset/php/footer.php'); ?>  
    </footer>
</body>
</html>