<?php

include'fonctions.php';
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
                    }
                }
		deconnect($cnx);
}
echo'<SCRIPT LANGUAGE="JavaScript">
     document.location.href="../index.php" 
</SCRIPT>';

?>
