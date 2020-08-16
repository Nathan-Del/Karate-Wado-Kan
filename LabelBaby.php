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
    <title>Label Baby</title>
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
            <li><a href="../LabelSante.php">Label Santé</a></li>
            <li><a href="../LabelBaby.php" class="tab-nav-active">Label Baby</a></li>
        </ul>
      </section>
      <section>
        <h4 class="label-section2"><strong>Baby karaté </strong></h4>
        <center><img class="label-img" src="../asset/img/baby_karate.png" alt="baby karate"></center>
        <section class="label-text">
          <p >Les cours de Baby Karaté sont avant tout basés sur le développement psychique, physique et social de l’enfant. L’approche pédagogique se traduit par des expériences motrices (par exemple : favoriser l’équilibre et la coordination) ainsi que par le développement du schéma corporel (connaissance du corps).
            <br>
            <br>
            Des valeurs citoyennes et des notions lexicales japonaises sont introduites dès le Baby Karaté.
            <br>
            <br>
            Notre club est labellisé Baby Karaté par la Fédération Française de Karaté, ce qui signifie que les éducateurs sportifs qui encadrent vos enfants sont diplômés et formés à la pratique spécifique des tout-petits.
            <br>
            <br>
            Durant les cours, les enfants, entre 3 et 5 ans évoluent en karatégi (kimono), souvent avec des gants de karaté, pour faire « comme les grands ». Ils abordent l’art martial de manière ludique et entièrement sécurisée, toujours dans le respect de soi et de l’autre.
            <br>
            <br>
            Les parents sont invités à attendre leur petit karatéka à l’extérieur de la salle d’entrainement durant les 45 minutes de séance et de leur donner une petite bouteille d’eau.             
            <br>
          </p>
          <center><img id="doudou" src="../asset/img/doudou_karate.png" alt="doudou"></center>
          
          <p>Eventuellement, Doudou peut être glissé dans son sac. Néanmoins, les tétines, biberons, couche-culotte… n’ont pas leur place sur le tatami.</p>
          <p>Le professeur, ou son assistant référent, vous tiendront informés de l’évolution de votre petit. Vous pourrez, même, de temps à autres, être invités à participer aux séances. Mais gare à vous, votre bout de chou va rapidement devenir un(e) petit(e) ninja… !!!
          </p>
        </section>
    </section>
    </main>
    <footer>
        <?php include ('asset/php/footer.php'); ?>  
    </footer>
</body>
</html>