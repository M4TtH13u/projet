<?php
$cnx=connect();
mysql_query("SET NAMES UTF8");
$req='select nom,prenom,numEtudiant from utilisateur u, eleve e where e.idPromo="'.$_POST['nb'].'" AND u.idUtil=e.idUtil';
    $res=execReq($req);
    echo'<table><tr>';
   while($donnee=mysql_fetch_assoc($res))
   {
       echo'<td>'.$donnee['nom'].'</td><td>'.$donnee['prenom'].'</td><td>'.$donnee['numEtudiant'].'</td>';
   }
   echo'</tr></table>';
deconnect($cnx); 
?>
