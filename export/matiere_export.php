
<?php
include'../fonctions/fonctions.php';
session_start();
if (securite(2))
{
?>
<label>Choix de la matière :</label>
    <select name="mat" id="exporter_matiere">
           <option></option>
           <?php
              $cnx=connect();
              $req='SELECT * FROM matiere WHERE idMod='.$_POST['module'].'';// on sélectionne tous les matières dont le module est celui sélectionné par l'utilisateur
             $res=execReq($req);
              while($matiere=mysql_fetch_assoc($res))
              {
                   echo'<option  value="'.$matiere['idMat'].'">'.$matiere['libelle'].'</option>';
              }
              deconnect($cnx);
            ?>
     </select>
<input type="submit" value="Exporter"/>
<?php
}
else
{
     echo'<SCRIPT LANGUAGE="JavaScript">
     document.location.href="../index.php" 
</SCRIPT>';
}
?>

