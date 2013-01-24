<?php
 include'../fonctions/fonctions.php';
 session_start();
 if (securite(2))
{
 $cnx=connect();
          mysql_query("SET NAMES UTF8");
          // on sélectionne tous les élèves dont la promo est celle sélectionné par l'utilisateur
          $req='select u.idUtil idUtil, nom,prenom from utilisateur u,eleve e where e.idPromo="'.$_POST['nb'].'" and e.idUtil=u.idUtil';
          $res=execReq($req);
          while($eleve=mysql_fetch_assoc($res)){
              echo'<label>'.$eleve['nom'].' '.$eleve['prenom'].' </label><input name="eleve" type="radio" value="'.$eleve['idUtil'].'" /><br/>';
          }
          deconnect($cnx);
          echo"<input type='submit' value='exporter'/>";// on affiche le bouton pour valider l'exportation
}
else
{
     echo'<SCRIPT LANGUAGE="JavaScript">
     document.location.href="../index.php" 
</SCRIPT>';
}
?>