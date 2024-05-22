<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact">
    <title>Contact</title>
    <link rel="stylesheet" href="../styles/reset.css">
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="../styles/boulangerie.css">
    <link rel="stylesheet" href="../styles/contact.css">
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
        <div class="container">
            <div class="horaires">
                <h3>Horaires :</h3>
                <table>
                    <tr>
                        <td><strong>Du Lundi au Vendredi :</strong></td>
                        <td>7h30 à 13h00 et 14h à 19h30</td>
                    </tr>
                    <tr>
                        <td><strong>Samedi :</strong></td>
                        <td>7h30 à 13h00 et 14h à 19h30</td>
                    </tr>
                    <tr>
                        <td><strong>Dimanche et jours fériés :</strong></td>
                        <td>7h00 à 13h00</td>
                    </tr>
                </table>
            </div>
            <div class="contact-form">
                <h3>Contactez-nous :</h3>
                <form action="#" method="post">
                    <label for="name">Nom* :</label>
                    <input type="text" id="name" name="name" required>
                    <br>
                    <label for="prenom">Prenom* :</label>
                    <input type="text" id="prenom" name="prenom" required>
                    <br>
                    <label for="email">Email* :</label>
                    <input type="email" name="email" id="email">
                    <br>
                    <label for="tel">Téléphone* :</label>
                    <input type="tel" id="tel" name="tel" required>
                    <br>
                    <label for="message">Message :</label>
                    <textarea id="message" name="message" required></textarea>
                    <br>
                    <button type="submit">Envoyer</button>
                    <button type="reset">Annuler</button>
                </form>
            </div>
            <div class="adresse-google">
                <h3>Adresse Google :</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2738.5218891019167!2d0.36190807602155267!3d46.655956553139596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47fdbd90a5964e3d%3A0x9e721effe85142a!2sL&#39;%C3%A9cole%20atypique!5e0!3m2!1sfr!2sfr!4v1711630789437!5m2!1sfr!2sfr" width="600" height="450" style="border:0;"
                 allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
        <div class="adresse">
            <h3>Horaires :</h3>
            <p> <strong>Du Lundi au Vendredi :</strong></p>
            <p>7h-30 à 13h-00b et 14h à 19h-30</p>
            <p><strong>Samedi :</strong></p>
            <p>7h-30 à 13h-00b et 14h à 19h-30</p>
            <p><strong>Dimanche et jours fériés : </strong></p>
            <p>7h-00 à 13h-00</p>
        </div>
        <div class="logo">
            <img src="../images/imagesAcceuil/logo.jpg" alt="logo de l'entreprise">
        </div>
        <div class="boulangerie">
        <div class="poitou">
            <h3>Boulangerie-Patisserie :</h3>
            <p>Adresse : 6 Av. Galilée, Bd Louis Braille</strong></p>
            <p><strong>86360 Chasseneuil-du-Poitou</strong></p>
            <p><strong>Tel : 0605954351</strong></p>
            <br>
            <h3>CONTACT :</h3>
            <a href="../pages/formulaire.html" class="contact" >Envoyez-nous un message</a>
        </div>   
    </footer>
</body>
</html>