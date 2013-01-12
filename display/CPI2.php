<?php
$cnx=connect();
mysql_query("SET NAMES UTF8");

$req='select u.nom nom,u.prenom prenom, u.idUtil idUtil, e.numEtudiant numEtudiant from utilisateur u, eleve e where e.idPromo="2" AND u.idUtil=e.idUtil';
    $res=execReq($req);
    echo'<table>';
    echo'<tr><td>Nom</td><td>Prenom</td><td>Numéro d\'étudiant</td></tr>';
   while($donnee=mysql_fetch_assoc($res))
   {
       if ($donnee['idUtil']==$_SESSION['idUtil']){
                echo'<tr id="perso"><td>'.$donnee['nom'].'</td><td>'.$donnee['prenom'].'</td><td>'.$donnee['numEtudiant'].'</td></tr>';
            }
            else{
                echo'<tr><td>'.$donnee['nom'].'</td><td>'.$donnee['prenom'].'</td><td>'.$donnee['numEtudiant'].'</td></tr>';
            }
   }
   echo'</table>';
deconnect($cnx); 
?>
