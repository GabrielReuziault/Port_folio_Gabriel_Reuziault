<section id="competences">
<h1>Compétences</h1>
<?php 
//require_once("../YAML/yaml/yaml.php");
$data = yaml_parse_file('YAML/competences.yaml');

echo "<h2>Développement</h2>\n";
foreach($data["developpement"] as $uneDonnee){
    echo "<p>".ucfirst($uneDonnee["competence"])." : ";
    for($i = 0; $i < $uneDonnee["niveau"]; $i++){
        echo "⭐";
    }
    echo "</p>\n";
}

echo "<h2>Réseau</h2>\n";
foreach($data["reseau"] as $uneDonnee){
    echo "<p>".ucfirst($uneDonnee["competence"])." : ";
    for($i = 0; $i < $uneDonnee["niveau"]; $i++){
        echo "⭐";
    }
    echo "</p>\n";
}

echo "<h2>Langues</h2>\n";
foreach($data["langues"] as $uneDonnee){
    echo "<p>".ucfirst($uneDonnee["competence"])." : ";
    for($i = 0; $i < $uneDonnee["niveau"]; $i++){
        echo "⭐";
    }
    echo "</p>\n";
}

echo "<h2>Certifications</h2>\n";
foreach($data["certif"] as $uneDonnee){
    echo "<p>".ucfirst($uneDonnee["competence"])." : score de ".$uneDonnee["niveau"]."</p>\n";
}
?>
</section>