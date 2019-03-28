<!-- Header -->
<?php require_once "header.php" ?>
<!-- Nav -->
<div class="header-container-background">
    <header class="header-container">
        <img src="images/logo3D2.png"
    </header>
</div>
<!-- Header -->
<div id="page-basket">
    <span href="#" id="button-en-savoir" class="button1 meet draw">Récapitulatif d'achat</span>
    <div id="products-list">
        <table>
            <tr><th>Produit</th><th>Prix</th><th>Quantité</th></tr>
            <tr>
                <td class="products">
                    <img class="product-img" src="images/fond_serpent_nordique.webp">
                    <div>
                        <h3 class="product-name">Deck Nordique</h3>
                        <span class="product-stock">En stock</span>
                        <button class="product-delete">Supprimer</button>
                    </div>
                </td>
                <td>
                    <p class="product-price">12€</p>
                </td>
                <td>
                    <button class="button-minus">-</button>
                    <input type="number" value="1" class="product-quantity">
                    <button class="button-plus">+</button>
                </td>
            </tr>
            <tr>
                <td class="products">
                    <img class="product-img" src="images/fond_nymph_air.webp">
                    <div>
                        <h3 class="product-name">Deck Grecque</h3>
                        <span class="product-stock">En stock</span>
                        <button class="product-delete">Supprimer</button>
                    </div>
                </td>
                <td>
                    <p class="product-price">12€</p>
                </td>
                <td>
                    <button class="button-minus">-</button>
                    <input type="number" value="1" class="product-quantity">
                    <button class="button-plus">+</button>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <h4>Total</h4>
                    <h3>24€</h3>
                </td>
            </tr>
        </table>
    </div>
    <a href="" id="proceed" class="button1 meet draw">Finaliser</a>
    <h5 id="retour-note">Vous ne craignez rien ! L'intégralité de notre processus de<br>commande est sécurisé et nous avons une politique de retours<br>de 120 jours.</h5>
</div>
<!-- Footer -->
<?php require_once "footer.php" ?>
<!-- Footer -->
</body>
</html>