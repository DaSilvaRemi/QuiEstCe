<?php
require "Personnage.php";

$lunettes = $_POST['lunettes'];
$moustache = $_POST['moustache'];
$chapeau = $_POST['chapeau'];
$cheveux = $_POST['cheveux'];
$boucleoreille = $_POST['boucleoreille'];
$barbe = $_POST['barbe'];
$noeudpap = $_POST['noeudpap'];
$codeperso=$lunettes.$moustache.$chapeau.$cheveux.$boucleoreille.$barbe.$noeudpap;
$personnage = new Personnage($codeperso);

$nberreur = $personnage->erreur();
$personnage->remplacement($nberreur);

echo("code objet corrigé : ".$personnage->get_code()."<br/>");
header('Location: index.php?image='.$personnage->get_code().'&erreur='.$nberreur);

?>