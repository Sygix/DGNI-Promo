<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Triumph</title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="style/main.css"> <!-- /promo/style Pour la prod avec la version anglaise -->
    <?php
    echo '<link rel="stylesheet" type="text/css" href="style/'.basename($_SERVER['PHP_SELF'], ".php").'.css">';
    ?>
    <link rel="icon" href="images/crown.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

<nav class="nav">
    <div id="nav-logo-container"><a href="index.php"><img id="nav-logo" src="images/crown.png"></a></div>
    <ul id="nav-center">
        <a href="deck.php"><li>
            Le Jeu
        </li></a>
        <a href="news.php"><li>
            Actualités
        </li></a>
        <a href="store.php"><li>
            La Boutique
        </li></a>
    </ul>
    <ul id="nav-end">
        <li>
            <a href="basket.php"><div id="money-bag"></div></a>
        </li>
        <li>
            <div id="language-button-container">
                <span id="language-button"></span>
                <div class="dropdown-content">
                    <?php
                    echo '<a href="/promo/'.basename($_SERVER['PHP_SELF'], ".php").'">Français</a>';
                    echo '<a href="/promo/EN/'.basename($_SERVER['PHP_SELF'], ".php").'">English</a>';
                    ?>
                </div>
            </div>
            <!-- Bouton langue -->
        </li>
    </ul>
</nav>