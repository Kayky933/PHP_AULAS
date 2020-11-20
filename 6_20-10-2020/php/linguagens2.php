<?php
echo '<pre>';
echo htmlspecialchars(print_r($_POST, true));
echo '</pre>';
echo "<br> Nome : ". $_POST["Dados"]["nome"];
echo "<br> Idade : ".$_POST["Dados"]["idade"];
echo "<br> Curso : ".$_POST["Curso"][0];

if (isset($_POST['enviar'])){
echo "<br>Você gosta das linguagens:<br/>";
foreach($_POST['linguagens'] AS $languagem)
echo "$languagem<br />";
}
?>