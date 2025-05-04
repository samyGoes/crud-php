<?php

require_once("model/Catos.php");

//header("Location: index.php");

$cato = new Catos();

$cato->setNome($_POST["nome"]);
$cato->setRga($_POST["rga"]);
$cato->setRaca($_POST["raca"]);
$cato->setPelagem($_POST["pelagem"]);
$cato->setDataNasc($_POST["data"]);

$cato->cadastrar();

?>