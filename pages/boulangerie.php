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
    <meta name="description" content="Boulangerie">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../styles/reset.css">
    <link rel="stylesheet" href="../styles/boulangerie.css">
    <title>Boulangerie</title>
</head>
<body>
    <header>
        <div class="contenairlien">
            <nav><a href="../index.php">Accueil</a></nav>
            <nav><a href="../pages/boulangerie.php">Boulangerie</a></nav>
            <nav><a href="../pages/chocolaterie.php">Chocolaterie</a></nav>
            <nav><a href="../pages/patisserie.php">Patisserie</a></nav>
            <nav><a href="../pages/formulaire.php">Contact</a></nav>
        </div>
   </header>
   <main>
        <div class="contenair-boulangerie">
            <div class="block1">
                <div class="text">
                    <h1 class="titre">Boulangerie :</h1>
                    <h4>DES PAINS CLASSIQUES ET SPÉCIAUX FAITS MAISON</h4>
                    <hr>
                    <p>Tous les pains, baguettes et viennoiseries que nous proposons à la Boulangerie d’Ymare sont pétris et cuits sur place. Certaines recettes 
                    sont uniques, élaborées par nos artisans boulangers.</p>
                    <p>La farine de blé utilisée est une farine Label Rouge. Elle est fabriquée avec du blé cultivé en France et transformé en région parisienne dans le Vexin. Ceci vous garantit une qualité gustative du pain et une chaîne d’approvisionnement courte. Quand au beurre 
                    utilisé dans nos viennoiseries, c’est un beurre AOP.</p>
                    <p>Nous proposons des baguettes et pains blancs classiques, mais également un large choix de pains spéciaux. Ceux-ci peuvent varier en fonction des saisons, de l’envie de notre équipe
                    boulangère et de l’attente de notre clientèle.</p>
                    <p>Le pain est cuit tout au long de la journée pour vous assurer du pain
                    frais quelle que soit l’heure de votre passage</p>
                </div>
                <div class="images1intro">
                    <img src="../images/imagesBoulangerie/images1intro.jpg" alt="images1intro">
                </div>
            </div>
            <section class="section-1">
                <h2>NOS PAINS SPÉCIAUX</h2>
                <hr>
                <p class="paragraphe">Les pains spéciaux permettent d’agrémenter les repas des grandes occasions ou simplement de varier les saveurs. Les pains suivants 
                sont actuellement disponibles dans notre boulangerie d’Ymare :</p>
                <div class="imagesContenair1">
                <?php
                        
                    // mysqli_close($connexion);
                    // Exécuter une requête SELECT

                        // Vérifier si la requête a réussi
                        // Exécuter une requête SELECT
                    $sql = "SELECT * FROM produit INNER JOIN categorie ON categorie.id_categorie = produit.id_categorie 
                    WHERE categorie.id_categorie = 2;
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
            <section class="section-2">
                <h2>NOS BAGUETTES SPÉCIALES</h2>
                <hr>
                <p>En plus de la baguette classique,
                    découvrez nos baguettes originales pour varier les saveurs</p>
            <div class="imagesContenair2">
                <?php
                $sql = "SELECT * FROM produit INNER JOIN categorie ON categorie.id_categorie = produit.id_categorie 
                WHERE categorie.id_categorie = 3
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
       </div>
      </div>
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
            <a href=".. /pages/formulaire.html" class="contact" >Envoyez-nous un message !</a>
        </div>   
    </footer>
</body>
</html>