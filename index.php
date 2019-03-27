<!-- Header -->
<?php require_once "header.php" ?>
<!-- Nav -->
<div class="header-container-background">
    <header class="header-container">
        <img src="images/logo3D2.png">
        <button class="button1 draw meet">JOUER</button>
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
    <button id="button-en-savoir" class="button1 meet draw">En savoir plus</button>
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
            <p>À partie de 8 ans</p>
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
                <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium architecto culpa cum dignissimos eum excepturi inventore itaque iusto labore, mollitia optio pariatur provident reiciendis rem, saepe, sit tempora totam veniam.</span><span>Adipisci aspernatur blanditiis consectetur consequatur consequuntur dolorem est iste laboriosam nesciunt nostrum quam quasi.</span>
                </p>
                <div id="more-container">
                    <p>0 - Il y a x heures</p>
                    <span id="big-article-button" class="button1 draw meet">En savoir plus</span>
                </div>
            </div>
        </article>

        <article class="small">
            <div id="carte-serpent" class="small-image"></div>
            <div class="small-text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut ea inventore ipsa iste, magnam maiores, molestiae provident reprehenderit repudiandae.</p>
            </div>
        </article>
        <article class="small">
            <div id="carte-vent" class="small-image"></div>
            <div class="small-text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut ea inventore ipsa iste, magnam maiores, molestiae provident reprehenderit repudiandae.</p>
            </div>
        </article>
        <article class="small">
            <div id="carte-terre" class="small-image"></div>
            <div class="small-text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut ea inventore ipsa iste, magnam maiores, molestiae provident reprehenderit repudiandae.</p>
            </div>
        </article>
        <button id="see-all" class="button1 draw meet">Tout voir</button>
    </article>
</div>
<!-- Footer -->
<?php require_once "footer.php" ?>
<!-- Footer -->
</body>
</html>