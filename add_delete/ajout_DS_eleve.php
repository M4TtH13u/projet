<?php //affiche la liste des élève de la promo sellectionnée avec un choix soux forme de checkbox
include '../fonctions/fonctions.php';
session_start();
if (securite(3))
{
$cnx=connect();
mysql_query("SET NAMES UTF8");
$req='select * from utilisateur u, eleve e WHERE e.idUtil=u.idUtil AND e.idPromo="'.$_POST['nb'].'"';
$res=execReq($req);
while($donnee=mysql_fetch_assoc($res)){
    echo '<label>'.$donnee['nom'].' '.$donnee['prenom'].'</label><input name="util[]" type="checkbox" value="'.$donnee['idUtil'].'"/></br>';
}
echo '<input type="button" onClick="cocher();" value="Tout selectionner"/><input type="button" onClick="decocher();" value="Tout deselectionner" />';
deconnect($cnx); 

}
else// si il n'a pas le droit on le redirige gentillement vers la page d'accueil
{
     echo'<SCRIPT LANGUAGE="JavaScript">
     document.location.href="../index.php" 
</SCRIPT>';
}
?>
