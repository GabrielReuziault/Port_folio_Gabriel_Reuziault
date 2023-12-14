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
            <div class="g-recaptcha" data-sitekey="6LfiDTEpAAAAAGaoKb9CZfP7TPhyx_OU-aCbCCAj"></div>
            <input type="submit" value="Envoyer">
    </form>
    <?php
if (isset($_POST['nom'])) {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $objet = $_POST['objet'];
    $message = $_POST['message'];

    $captcha = $_POST['g-recaptcha-response'];
  $url = 'https://www.google.com/recaptcha/api/siteverify';
  $data = array(
    'secret' => '6LfiDTEpAAAAAGaoKb9CZfP7TPhyx_OU-aCbCCAj',
    'response' => $captcha
  );

  $options = array(
    'http' => array(
      'header' => "Content-type: application/x-www-form-urlencoded\r\n",
      'method' => 'POST',
      'content' => http_build_query($data)
    )
  );

  $context = stream_context_create($options);
  $response = file_get_contents($url, false, $context);
  $result = json_decode($response);

  if ($result->success) {
    // Le test Captcha a été réussi, vous pouvez envoyer l'e-mail
    $headers = 'From: ' . $email . "\r\n" .
      'Reply-To: ' . $email . "\r\n" .
      'X-Mailer: PHP/' . phpversion();

    mail('gabriel.reuziault@sts-sio-caen.info', $objet, $message, $headers);

    echo 'Votre message a bien été envoyé.';
  } else {
    // Le test Captcha a échoué
    echo 'Le test Captcha a échoué. Veuillez réessayer.';
  }
}
?>
