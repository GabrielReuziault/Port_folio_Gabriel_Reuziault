<section id="accueil">
<h1>Accueil</h1>
<?php
//require_once("../YAML/yaml/yaml.php");
$data=yaml_parse_file('YAML/accueil.yaml');

echo "<h2>Présentation</h2>";
echo "<p>".ucfirst($data["prenom"])." ".ucfirst($data["nom"])." ".ucfirst($data["age"]).", ".$data["accroche"]."<br>".ucfirst($data["lieu"])."</p>\n";
echo "<img id='img' src=".$data["photo"].">";

?>
</section>