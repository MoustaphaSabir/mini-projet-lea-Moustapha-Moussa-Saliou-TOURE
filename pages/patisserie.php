<?php
    // Paramètres de connexion
    $serveur = "localhost";
    $utilisateur = "root";
    $mot_de_passe = "";
    $base_de_donnees = "boulangerie-patisserie";
    // Établir la connexion
    $connexion = mysqli_connect($serveur, $utilisateur,
    $mot_de_passe, $base_de_donnees);
    // Vérifier la connexion
    if (!$connexion) {
    die("Échec de la connexion : " . mysqli_connect_error());
    } else {
    echo "Connexion réussie à la base de données.";
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Patisserie">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="./styles/reset.css">
    <link rel="stylesheet" href="./styles/boulangerie.css">
    <title>Patisserie</title>
    <style>
    main{
            max-width: 1400px;
            margin: 0 auto;
            /* background-color: #603c07; */
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <div class="contenairlien">
            <nav><a href="./index.php">Accueil</a></nav>
            <nav><a href="./pages/boulangerie.php">Boulangerie</a></nav>
            <nav><a href="./pages/chocolaterie.php">Chocolaterie</a></nav>
            <nav><a href="./pages/patisserie.php">Patisserie</a></nav>
            <nav><a href="./pages/formulaire.php">Contact</a></nav>
        </div>
   </header>
   <main>
    <div class="block1">
        <div class="text">
            <h1 class="titre">PÂTISSERIES ARTISANALES :</h1>
            <h4> 100% FAITES MAISON</h4>
            <hr>
            <p>À la boulangerie d’Ymare, nous vous proposons un vaste choix de pâtisseries, toutes réalisées maison.</p>
            <p>François Ovide, pâtissier de formation, vous présente des versions revisitées de certains classiques sucrés, ainsi que des gâteaux sur mesure.</p>
        </div>
        <div class="images1intro">
            <img src="../images/imagesPatisserieClassiques/Melba_Ymare_600.jpg" alt="Melba_Ymare_600">
        </div>
    </div>
        <section class="section-2">
            <h2>NOS PÂTISSERIES EXCLUSIVES</h2>
            <hr>
            <p>Venez goûter nos créations originales, conçues par notre artisan pâtissier François Ovide et ses équipes.</p>
        <div class="imagesContenair2">
        <?php
                $sql = "SELECT * FROM produit INNER JOIN categorie ON categorie.id_categorie = produit.id_categorie 
                WHERE categorie.id_categorie = 8;
                ";
                
                $produits = mysqli_query($connexion, $sql);                
            ?>

            <?php if($produits) : ?>
                <?php foreach($produits as $produit) : ?>
                    <figure>
                        <img src="..<?php echo $produit['url_image'] ?>" alt="<?= $produit['titre_image'] ?>">
                        <figcaption><strong><?= $produit['titre_image'] ?></strong>
                        <?= $produit['description_image'] ?>
                        </figcaption>
                    </figure>
                <?php endforeach ?>
                <!-- fermeture du foreach -->
            <?php endif ?>
        </div>
       </section>
    <section class="section-1">
        <h2>NOS PÂTISSERIES CLASSIQUES</h2>
        <hr>
        <p class="paragraphe">Parmi nos pâtisseries à la part ou à partager, vous trouverez en vitrine :</p>
        <p>Les pâtisseries au chocolat sont pour la plupart réalisées avec le chocolat exclusif réalisé par notre artisan pâtissier François Ovide.
             Cet assemblage de fèves de cacao a été sélectionné et conçu sur mesure avec notre fournisseur Cacao Barry.
            Ceci apporte une saveur unique que vous ne trouverez nulle part ailleurs.</p>
            <div class="imagesContenair1">
            <?php
                $sql = "SELECT * FROM produit INNER JOIN categorie ON categorie.id_categorie = produit.id_categorie 
                WHERE categorie.id_categorie = 9;
                ";
                
                $produits = mysqli_query($connexion, $sql);                
            ?>

            <?php if($produits) : ?>
                <?php foreach($produits as $produit) : ?>
                    <figure>
                        <img src="..<?php echo $produit['url_image'] ?>" alt="<?= $produit['titre_image'] ?>">
                        <figcaption><strong><?= $produit['titre_image'] ?></strong>
                        <?= $produit['description_image'] ?>
                        </figcaption>
                    </figure>
                <?php endforeach ?>
                <!-- fermeture du foreach -->
            <?php endif ?>
        </div>
     </section>
    </main>
    <footer>
        <div class="container">
            <div class="adresse">
                <h3 class="ho">Horaires :</h3>
                <p><strong>Du Lundi au Vendredi :</strong></p>
                <p>7h-30 à 13h-00b et 14h à 19h-30</p>
                <p><strong>Samedi :</strong></p>
                <p>7h-30 à 13h-00b et 14h à 19h-30</p>
                <p><strong>Dimanche et jours fériés :</strong></p>
                <p>7h-00 à 13h-00</p>
            </div>
        <img src="../images/imagesAcceuil/logo.jpg" alt="logo de l'entreprise" class="logo">
        <div class="boulangerie">
        <div class="poitou">
            <h3>Boulangerie-Patisserie LE MOULIN :</h3>
            <p>6 Av. Galilée, Bd Louis Braille</strong></p>
            <p><strong>86360 Chasseneuil-du-Poitou</strong></p>
            <p><strong>Tel : 0605954351</strong></p>
            <br>
            <h3>CONTACT :</h3>
            <a href="../pages/formulaire.html" class="contact" >Envoyez-nous un message !</a>
        </div>   
    </footer>
</body>
</html>