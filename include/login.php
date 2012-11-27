<?php
include'debut.php';
include'include/fonctions.php';
if (!empty($_POST['pseudo']) && !empty($_POST['mdp']))
{
                $cnx=connect();
		mysql_query("SET NAMES UTF8");
		$req='select * from utilisateur where login="'.$_POST['pseudo'].'"';
		$res=execReq($req);
		while($infoUtil=mysql_fetch_assoc($res))
		{
                    if ($infoUtil['pass']== $_POST['mdp'])
                    {
                           session_start();
                           $_SESSION['prenom'] = $infoUtil['prenom'];
                           $_SESSION['nom'] = $infoUtil['nom'];
                           $_SESSION['idUtil'] = $infoUtil['idUtil'];
                           $_SESSION['idRole'] = $infoUtil['idRole'];
                          echo 'Vous etes connectés <br/> Cliquez <a href="index.php">ici</a> pour revenir sur la page d\'accueil';
                         
                    }
                    else
                    {
                        echo'erreur de connexion mot de passe éroné <br/> Cliquez <a href="index.php">ici</a> pour revenir sur la page d\'accueil';
                    }
		}
		deconnect($cnx);
    
}
else
{
    echo'erreur de connexion  compte éroné<br/> Cliquez <a href="index.php">ici</a> pour revenir sur la page d\'accueil';
}
include'fin.php';
?>
