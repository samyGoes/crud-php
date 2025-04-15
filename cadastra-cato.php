<?php

require_once("model/Catos.php");

header("Location: index.php");

$cato = new Catos();

$cato->setNome($_POST["nome"]);
$cato->setRga($_POST["rga"]);
$cato->setPelagem($_POST["pelagem"]);
$cato->setIdade($_POST["idade"]);

$cato->cadastrar();

?>