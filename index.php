<!-- Header -->
<?php require_once "header.php" ?>
<!-- Nav -->
<div class="header-container-background">
    <header class="header-container">
        <img src="images/logo3D2.png">
        <a href="../jeu" class="button1 draw meet">JOUER</a>
    </header>
</div>
<!-- Header -->
<div class="new-player">
    <div class="title">
        <div class="arrow-right"></div>
        <h2 class="title-font">NOUVEAU JOUEUR ?</h2>
        <div class="arrow-left"></div>
    </div>
    <video id="teaser-video" controls preload="auto">
        <source src="video/anim_vf.webm">
    </video>
    <p id="new-text">Deux mythologies s’affrontent : la mythologie Grecque et la mythologie Nordique. Les dieux de l’Olympe et d’Ásgard mènent un combat déchainant les éléments, l’eau, la terre et l’air, dans le but d’obtenir le monopole sur le monde et d’imposer leurs idéaux sur les peuples.
    </p>
    <a href="histoire.php" id="button-en-savoir" class="button1 meet draw">En savoir plus</a>
    <ul>
        <li>
            <div id="two-men" class="rounded"></div>
            <p>2 Joueurs</p>
        </li>
        <li>
            <div id="hourglass" class="rounded"></div>
            <p>~ 20 minutes</p>
        </li>
        <li>
            <div id="years-o" class="rounded"></div>
            <p>À partir de 8 ans</p>
        </li>
    </ul>
</div>
<div id="article-container">
    <article id="articles-container">
        <div class="title">
            <div class="arrow-right"></div>
            <h2 class="title-font">Dernières Actualités</h2>
            <div class="arrow-left"></div>
        </div>

        <article id="big">
            <div id="big-article-image"></div>
            <div id="big-text">
                <p>L’harmonie dominait le monde antique, les peuples prospéraient, les plaines étaient verdoyantes, et le ciel régnait d’un bleu azur. Mais l’histoire qui allait bouleverser le cours de toutes ces vies paisibles était de mauvais augure.

                    La terre commençait à trembler de manière constante, les domaines champêtres et les montagnes se fracturaient, les récoltes n’étaient plus assez abondantes pour la population.
                </p>
                <div id="more-container">
                    <p>0 - Il y a x heures</p>
                    <a href="histoire.php" id="big-article-button" class="button1 draw meet">En savoir plus</a>
                </div>
            </div>
        </article>

        <article class="small">
            <div id="carte-serpent" class="small-image"></div>
            <div class="small-text">
                <p>Nous avons le plaisir de vous accueillir sur ce nouveau site, visant à donner toutes les informations concernant notre nouveau jeu Triumph...</p>
            </div>
        </article>
        <article class="small">
            <div id="carte-vent" class="small-image"></div>
            <div class="small-text">
                <p>Pourquoi avoir choisi comme thème la mythologie pour notre jeu ? Tout simplement car nous aimons l’histoire, ainsi que travailler dans un univers épique à la limite du fantastique.</p>
            </div>
        </article>
        <article class="small">
            <div id="carte-terre" class="small-image"></div>
            <div class="small-text">
                <p>Participez à notre premier jeu concours et tentez de remporter une version physique du jeu Triumph ! Trois boîtes sont à remporter, alors ne tardez pas et rejoignez les combats épiques !</p>
            </div>
        </article>
        <button onclick="location.href='news.php';" href="news.php" id="see-all" class="button1 draw meet">Tout voir</button>
    </article>
</div>
<!-- Footer -->
<?php require_once "footer.php" ?>
<!-- Footer -->
</body>
</html>