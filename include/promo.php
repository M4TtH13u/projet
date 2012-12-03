<?php
include'fonctions.php';
$cnx=connect();
mysql_query("SET NAMES UTF8");

$req='select u.nom nom,u.prenom prenom,e.numEtudiant numEtudiant from utilisateur u, eleve e where e.idPromo="'.$_POST['nb'].'" AND u.idUtil=e.idUtil';
    $res=execReq($req);
    echo'<table>';
   while($donnee=mysql_fetch_assoc($res))
   {
       echo'<tr><td>'.$donnee['nom'].'</td><td>'.$donnee['prenom'].'</td><td>'.$donnee['numEtudiant'].'</td></tr>';
   }
   echo'</table>';
deconnect($cnx); 
?>
