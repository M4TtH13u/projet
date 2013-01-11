<?php
$HOTE = 'localhost';
$USER = 'root';
$PASS = '';
$BASE = 'projet';

//connexion à la bdd
function connect(){
	global $HOTE, $USER, $PASS, $BASE;

	$maCnx = mysql_connect($HOTE, $USER, $PASS) or die('Erreur Connexion MySQL: '.mysql_error());
	//on choisi la base sur laquelle on se connecte (le nom de leur bdd phpmyadmin)
	mysql_select_db($BASE) or die('Erreur sélection de base: '.$BASE.' - '.mysql_error());
	return $maCnx;
}

//deconnexion de la bdd
function deconnect($cnx){
	mysql_close($cnx) or die('Erreur Déconnexion: '.mysql_error());
}

//requete à la bdd
function execReq($req){
	$res = mysql_query($req);
	if(!$res){
		echo 'Erreur requête: '.$req.' - '.mysql_error(); 
	 	die('Erreur requête: '.$req.' - '.mysql_error()); 
	}
	return $res;
}
function securite($nb){
    if (isset($_SESSION['idUtil']) && $_SESSION['idRole']>= $nb){
         return 1;
    }
    else   {return 0;}
}

?>