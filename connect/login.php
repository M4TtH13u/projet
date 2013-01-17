<?php
include'../fonctions/fonctions.php';
if (!empty($_POST['pseudo']) && !empty($_POST['mdp']))//si ya eu un login et mdp d'inscrit
{
                $cnx=connect();
		mysql_query("SET NAMES UTF8");
		$req='select * from utilisateur where login="'.$_POST['pseudo'].'"';//on choppe les informations de l'utilisateur
		$res=execReq($req);
		while($infoUtil=mysql_fetch_assoc($res))
		{
                    if ($infoUtil['pass']== md5($_POST['mdp']))// si le mot de passe est ok
                    {
                     session_start();
                       
                     $req2='select * from eleve where idUtil="'.$infoUtil['idUtil'].'"';// s'il s'agit d'un élève on lui enregistre sa promo
                     $res2=execReq($req2);
            
                     while($eleve=mysql_fetch_assoc($res2))
                     {
                         
                      $_SESSION['idPromo'] = $eleve['idPromo'];
                     }   
        
                     $_SESSION['prenom'] = $infoUtil['prenom'];
                     $_SESSION['nom'] = $infoUtil['nom'];
                           $_SESSION['idUtil'] = $infoUtil['idUtil'];
                           $_SESSION['idRole'] = $infoUtil['idRole'];
                    }
                }
		deconnect($cnx);
}
echo'<SCRIPT LANGUAGE="JavaScript">
     document.location.href="../index.php?page=accueil" 
</SCRIPT>';

?>
