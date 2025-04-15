<?php

require_once("model/Catos.php");

header("Location: index.php");

$cato = new Catos();

$cato->setId($_POST["id"]);
$cato->deletar();

?>