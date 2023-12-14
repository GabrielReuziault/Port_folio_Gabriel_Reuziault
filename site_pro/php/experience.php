<section id="experience">
<h1>Expérience</h1>
<?php 
//require_once("../YAML/yaml/yaml.php");
$data=yaml_parse_file('YAML/experience.yaml');

echo "<h2>Mes expériences professionnelles</h2>\n";
foreach($data AS $unStage){
	echo "<p>".ucfirst($unStage["poste"])."<br> ".$unStage["entreprise"]."<br>du ".$unStage["debut"]." au ".$unStage["fin"]."<br>à ".$unStage["lieu"]."<br>".$unStage["tache"].".</p>\n";
}
?>

<p>Pour accéder à mon CV, cliquer <a href="cv.pdf">ici</a></p>
</section>