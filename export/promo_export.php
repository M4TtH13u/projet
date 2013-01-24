<?php
include'../fonctions/fonctions.php';
session_start();
if (securite(2)) //toujours la même fonction de sécurité.
{
?>
<select name="promo"<?php if (($_POST['nb'])==1)
// si le nombre envoyé par le javascript est 1 alors on va rajouter un onChange permettant de faire apparaitre la liste des élèves
    
{
    echo' onChange="export_eleve()"';
    }
    // Sinon on veut juste exporter la promo et non pas les élèves donc on ne rajoute rien de plus
?> id="export_promo">
      <option></option>
      
      <?php
      
          $cnx=connect();
          mysql_query("SET NAMES UTF8");
          $req='select * from promo';
          $res=execReq($req);
          while($promo=mysql_fetch_assoc($res)){
              echo '<option  value="'.$promo['idPromo'].'">'.$promo['libelle'].'</option>';
          }      
          deconnect($cnx); 
      ?>
</select>
<?php
// si on doit juste choisir une promo on rajouter un bouton pour valider le formulaire
if (($_POST['nb'])==0)
{
    echo"<br/><input type='submit' value='exporter'/>";
}
}
else
{
     echo'<SCRIPT LANGUAGE="JavaScript">
     document.location.href="../index.php" 
</SCRIPT>';
}
?>