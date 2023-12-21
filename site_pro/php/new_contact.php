<section id="contact">
    <h1>Contact</h1>
    <form action="index.php#contact" method="post">
        <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom">
        <label for="email">Adresse e-mail</label>
            <input type="email" name="email" id="email">
        <label for="subject">Objet</label>
            <input type="text" name="objet" id="objet">
        <label for="message">Message</label>
            <textarea name="message" id="message"></textarea>
            <button type="submit" value="Envoyer">Envoyer votre mail</button>
    </form>
<?php
if (isset($_POST['nom'])) {
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $objet = $_POST['objet'];
    $message = $_POST['message'];
    $to = "gabriel.reuziault@sts-sio-caen.info";
    $headers = 'De : '.$nom.", ".$email."\r\n";
    mail($to, $objet, $message, $headers);
    echo("Votre message a bien été envoyé.");
}
?>