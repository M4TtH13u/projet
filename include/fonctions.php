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


if ((!empty($_POST['choixUtil']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['login']) && !empty($_POST['pass']) && !empty($_POST['repass']))&&($_POST['pass']==$_POST['repass'])&&( ($_POST['choixUtil']=="4")||(($_POST['choixUtil']=="2")&&!empty($_POST['promo']))||(($_POST['choixUtil']=="3")&&!empty($_POST['tel'])&& !empty($_POST['numBureau']))))
{
    if ($_POST['choixUtil']=="4")
    {
        $cnx=connect();
        mysql_query("SET NAMES UTF8");
        $req='INSERT INTO utilisateur VALUE("","'.$_POST['login'].'","'.md5($_POST['pass']).'","'.$_POST['nom'].'","'.$_POST['prenom'].'",4)';
        $res=execReq($req);
        deconnect($cnx); 
        echo'L\administrateur a été ajouté';
    }
    elseif ($_POST['choixUtil']=="3") 
    {
        $cnx=connect();
        mysql_query("SET NAMES UTF8");
        $req='INSERT INTO utilisateur VALUE("","'.$_POST['login'].'","'.md5($_POST['pass']).'","'.$_POST['nom'].'","'.$_POST['prenom'].'",3)';
        $res=execReq($req);
        $res = execReq('select idUtil from utilisateur where login="'.$_POST['login'].'" and pass="'.md5($_POST['pass']).'"');
        while($util = mysql_fetch_array($res))
        {
        $req2='INSERT INTO prof VALUE("","'.$_POST['numBureau'].'","'.$_POST['tel'].'","'.$util['idUtil'].'")';
        $res2=execReq($req2);
        }
        deconnect($cnx);
        echo'Le professeur a été ajouté';
    }
    elseif ($_POST['choixUtil']=="2")
    {
        $cnx=connect();
        mysql_query("SET NAMES UTF8");
        $req='INSERT INTO utilisateur VALUE("","'.$_POST['login'].'","'.md5($_POST['pass']).'","'.$_POST['nom'].'","'.$_POST['prenom'].'",2)';
        $res=execReq($req);
        $res = execReq('select idUtil from utilisateur where login="'.$_POST['login'].'" and pass="'.md5($_POST['pass']).'"');
        while($util = mysql_fetch_array($res))
        {
        $req2='INSERT INTO eleve VALUE("",0,"'.$_POST['promo'].'","'.$util['idUtil'].'")';
        $res2=execReq($req2);
        }
        deconnect($cnx);
        echo'L\'élève a été ajouté';
    }
   
}
if (!empty($_POST['type']) && !empty($_POST['prof'])) 
    {
    $cnx=connect();
    $req='UPDATE matiere m, prof p SET m.idProf=null WHERE m.idProf=p.idProf AND p.idUtil="'.$_POST['prof'].'"';
    $res=execReq($req);
    $req='DELETE FROM prof WHERE idUtil="'.$_POST['prof'].'"';
    $res=execReq($req);
    $req='DELETE FROM utilisateur WHERE idUtil="'.$_POST['prof'].'"';
    $res=execReq($req);
    deconnect($cnx);    
}

if (!empty($_POST['type']) && !empty($_POST['eleve']))
{
    $cnx=connect();
    $req='DELETE FROM utilisateur WHERE idUtil"'.$_POST['eleve'].'"';
    $res=execReq($req);
    $req='DELETE FROM participe p, eleve e WHERE idUtil="'.$_POST['eleve'].'" AND p.numEtudiant=e.numEtudiant';
    $res=execReq($req);
    deconnect($cnx);
}


?>