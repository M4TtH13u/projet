<?php
 include'../fonctions/fonctions.php';
 if (securite(4))
{
 $cnx=connect();
          mysql_query("SET NAMES UTF8");
          $req='select u.idUtil idUtil, nom,prenom from utilisateur u,eleve e where e.idPromo="'.$_POST['nb'].'" and e.idUtil=u.idUtil';
          $res=execReq($req);
          while($eleve=mysql_fetch_assoc($res)){
              echo'<label>'.$eleve['nom'].' '.$eleve['prenom'].' </label><input name="eleve" type="checkbox" value="'.$eleve['idUtil'].'" /><br/>';
          }
          deconnect($cnx);
          echo"<input type='submit' value='exporter'/>";
}
else
{
     echo'<SCRIPT LANGUAGE="JavaScript">
     document.location.href="../index.php" 
</SCRIPT>';
}
?>