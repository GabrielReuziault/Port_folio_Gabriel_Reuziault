<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Site Professionel Reuziault Gabriel</title>
		<link rel="stylesheet" href="style.css">
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head>
	<body>
        <header>
            <ul>
                <li><a href="#accueil">Accueil</a></li>
                <li><a href="#a_propos">À propos</a></li>
                <li><a href="#competences">Compétences</a></li>
                <li><a href="#experience">Expérience</a></li>
                <li><a href="#formation">Formation</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="https://www.linkedin.com/in/gabriel-reuziault-2a22842a5">LinkedIn</a></li>
            </ul>
        </header>
        <main>
            <?php 
            include("php/accueil.php");
            include("php/a_propos.php");
            include("php/competences.php");
            include("php/experience.php");
            include("php/formation.php");
            include("php/contact_mailer.php");
            ?>
        </main>
    </body>
</html>