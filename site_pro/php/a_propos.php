<section id="a_propos">
<h1>À propos</h1>
<?php
require_once("../YAML/yaml/yaml.php");
$data = yaml_parse_file('YAML/a_propos.yaml');

echo "<h2>".$data["accroche"]."</h2>\n";

echo "<p>".$data["paragraphe_presentation"]."</p>\n";

echo "<img id='img' src=".$data["photo"].">";
?>
</section>