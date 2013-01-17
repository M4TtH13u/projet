<?php
include '../fonctions/fonctions.php';
$cnx=connect();
mysql_query("SET NAMES UTF8");
$req='select * from utilisateur u, eleve e WHERE e.idUtil=u.idUtil AND e.idPromo="'.$_POST['nb'].'"';
$res=execReq($req);
while($donnee=mysql_fetch_assoc($res)){
    echo '<label>'.$donnee['nom'].' '.$donnee['prenom'].'</label><input name="util[]" type="checkbox" value="'.$donnee['numEtudiant'].'"/></br>';
}      
deconnect($cnx); 

?>
