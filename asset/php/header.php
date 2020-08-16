<?php

    echo '<h1 style="text-align: center; font-size: 2vw;">
        <img id="logo" src="../asset/img/Logo USMBM Wado Kan.jpg" alt="logo USMBM wado-kan" width="42" height="42">
        <img id="logo2" src="../asset/img/logo-usmbm-karate.png" alt="logo USMBM karate" width="42" height="42">
        USMBM Wado-Kan (Karaté Montsoult, Baillet-en-France, Maffliers)
        <a href="https://www.facebook.com/KarateMontsoult">
            <img id="logoFacebook" src="../asset/img/facebook.png" alt="logo facebook depuis flaticon.com" width="42" height="42">
        </a>
        </h1>';

    echo '<nav class="navbar navbar-expand-lg navbar-dark bg-primary" class="back-color" data-toggle="sticky-onscroll">
    <!--Important pour le responsive-->
    <a class="navbar-brand" href="../index.php">Accueil</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDD" aria-controls="navbarDD" aria-expanded="false" aria-label="Navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarDD">
        <ul class="navbar-nav bg-primary mx-auto">
            <li class="nav-item bg-primary dropdown">
                <a class="nav-link dropdown-toggle" id="aprop-hover" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    A propos
                </a>
                <ul class="dropdown-menu bg-primary">
                    <li><a class="dropdown-item sous-aprop-hover" href="../HistoireClub.php">Histoire du Club</a></li>
                    <li><a class="dropdown-item sous-aprop-hover" href="../Senseis.php">Equipe pédagogique</a></li>
                    <li><a class="dropdown-item sous-aprop-hover" href="../LabelCancer.php">Labels</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="info-hover" href="../Infos.php">Horaires et Tarifs<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="technique-hover" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Fiches Techniques
                </a>
                <ul class="dropdown-menu bg-primary">
                    <li><a class="dropdown-item dropdown-toggle sous-tech-hover" href="#">Katas</a>
                        <ul class="dropdown-menu bg-primary">
                            <li><a class="dropdown-item sous-kata-hover" href="../Katas/pinanNidan.php">Pinan Nidan</a></li>
                            <li><a class="dropdown-item sous-kata-hover" href="../Katas/pinanShodan.php">Pinan Shodan</a></li>
                            <li><a class="dropdown-item sous-kata-hover" href="../Katas/pinanSandan.php">Pinan Sandan</a></li>
                            <li><a class="dropdown-item sous-kata-hover" href="../Katas/pinanYodan.php">Pinan Yodan</a></li>
                            <li><a class="dropdown-item sous-kata-hover" href="../Katas/pinanGodan.php">Pinan Godan</a></li>
                            <li><a class="dropdown-item sous-kata-hover" href="../Katas/NaiHanchi.php">NaiHanchi</a></li>
                            <li><a class="dropdown-item sous-kata-hover" href="../Katas/Bassai.php">Bassai</a></li>
                            <li><a class="dropdown-item sous-kata-hover" href="../Katas/Kushanku.php">Kushanku</a></li>
                            <li><a class="dropdown-item sous-kata-hover" href="../Katas/Jion.php">Jion</a></li>
                            <li><a class="dropdown-item sous-kata-hover" href="../Katas/Wanshu.php">Wanshu</a></li>
                            <li><a class="dropdown-item sous-kata-hover" href="../Katas/Seishan.php">Seishan</a></li>
                            <li><a class="dropdown-item sous-kata-hover" href="../Katas/Chinto.php">Chinto</a></li>
                            <li><a class="dropdown-item sous-kata-hover" href="../Katas/Jitte.php">Jitte</a></li>
                            <li><a class="dropdown-item sous-kata-hover" href="../Katas/Niseishi.php">Niseishi</a></li>
                            <li><a class="dropdown-item sous-kata-hover" href="../Katas/Rohai.php">Rohai</a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item dropdown-toggle sous-tech-hover" href="#">Kihon Kumite</a>
                        <ul class="dropdown-menu bg-primary">
                            <li><a class="dropdown-item sous-kihon-hover" href="../KihonKumite/KihonKumiteN1.php">Kihon Kumite N°1</a></li>
                            <li><a class="dropdown-item sous-kihon-hover" href="../KihonKumite/KihonKumiteN2.php">Kihon Kumite N°2</a></li>
                            <li><a class="dropdown-item sous-kihon-hover" href="../KihonKumite/KihonKumiteN3.php">Kihon Kumite N°3</a></li>
                            <li><a class="dropdown-item sous-kihon-hover" href="../KihonKumite/KihonKumiteN4.php">Kihon Kumite N°4</a></li>
                            <li><a class="dropdown-item sous-kihon-hover" href="../KihonKumite/KihonKumiteN5.php">Kihon Kumite N°5</a></li>
                            <li><a class="dropdown-item sous-kihon-hover" href="../KihonKumite/KihonKumiteN6.php">Kihon Kumite N°6</a></li>
                            <li><a class="dropdown-item sous-kihon-hover" href="../KihonKumite/KihonKumiteN7.php">Kihon Kumite N°7</a></li>
                            <li><a class="dropdown-item sous-kihon-hover" href="../KihonKumite/KihonKumiteN8.php">Kihon Kumite N°8</a></li>
                            <li><a class="dropdown-item sous-kihon-hover" href="../KihonKumite/KihonKumiteN9.php">Kihon Kumite N°9</a></li>
                            <li><a class="dropdown-item sous-kihon-hover" href="../KihonKumite/KihonKumiteN10.php">Kihon Kumite N°10</a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item dropdown-toggle sous-tech-hover" href="#">Tanto Dori</a>
                        <ul class="dropdown-menu bg-primary">
                            <li><a class="dropdown-item sous-tanto-hover" href="../TantoDori/TantoDoriN1.php">TantoDori N°1</a></li>
                            <li><a class="dropdown-item sous-tanto-hover" href="../TantoDori/TantoDoriN2.php">TantoDori N°2</a></li>
                            <li><a class="dropdown-item sous-tanto-hover" href="../TantoDori/TantoDoriN3.php">TantoDori N°3</a></li>
                            <li><a class="dropdown-item sous-tanto-hover" href="../TantoDori/TantoDoriN4.php">TantoDori N°4</a></li>
                            <li><a class="dropdown-item sous-tanto-hover" href="../TantoDori/TantoDoriN5.php">TantoDori N°5</a></li>
                            <li><a class="dropdown-item sous-tanto-hover" href="../TantoDori/TantoDoriN6.php">TantoDori N°6</a></li>
                            <li><a class="dropdown-item sous-tanto-hover" href="../TantoDori/TantoDoriN7.php">TantoDori N°7</a></li>
                            <li><a class="dropdown-item sous-tanto-hover" href="../TantoDori/TantoDoriN8.php">TantoDori N°8</a></li>
                            <li><a class="dropdown-item sous-tanto-hover" href="../TantoDori/TantoDoriN9.php">TantoDori N°9</a></li>
                            <li><a class="dropdown-item sous-tanto-hover" href="../TantoDori/TantoDoriN10.php">TantoDori N°10</a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item sous-tech-hover" href="../Glossaire.php">Lexique</a></li>
                    <li><a class="dropdown-item dropdown-toggle sous-tech-hover" href="#">Coin des karatés kids</a>
                        <ul class="dropdown-menu bg-primary">
                            <li><a class="dropdown-item sous-kids-hover" href="../KarateKids/Ceinture.php">Nouer sa ceinture</a></li>
                            <li><a class="dropdown-item sous-kids-hover" href="../KarateKids/CodeMoral.php">Code Moral</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="grade-hover" href="../GradeFormation.php">Grades et Formations<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="competition-hover" href="../Competition.php">Compétitions<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="galerie-hover" href="../galerie.php">Galerie<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="lien-utile-hover" href="../LiensUtile.php">Liens Utiles<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-hover" href="../Apropos.php">Contact<span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>';

?>




