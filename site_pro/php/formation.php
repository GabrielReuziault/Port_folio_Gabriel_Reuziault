<section id="formation">
<h1>Formation</h1>
<?php 
//require_once("../YAML/yaml/yaml.php");
$data=yaml_parse_file('YAML/formation.yaml');

echo "<h2>Mes expériences professionnelles</h2>\n";
foreach($data AS $uneExp){
	echo "<p>".ucfirst($uneExp["formation"])."<br> ".$uneExp["etablissement"]."<br>du ".$uneExp["debut"]." au ".$uneExp["fin"]."<br>à ".$uneExp["lieu"]."<br>".$uneExp["contenu"].".</p>\n";
}

?>

<p>Pour accéder à mon CV, cliquer <a href="cv.pdf">ici</a></p>
</section>