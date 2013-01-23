<?PHP
include'../fonctions/fonctions.php'
?>
<select name="promo"<?php if (($_POST['nb'])==1)
{
    echo' onChange="export_eleve()"';
    }
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
if (($_POST['nb'])==0)
{
    echo"<input type='submit' value='exporter'/>";
}
?>