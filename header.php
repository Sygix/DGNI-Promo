<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Triumph</title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="style/main.css">
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
            <a href="#"><div id="money-bag"></div></a>
        </li>
        <li>
            <a href="#"><div id="language-button"></div></a>
            <!-- Bouton langue -->
        </li>
    </ul>
</nav>