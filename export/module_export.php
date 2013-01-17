<?php
 include'../fonctions/fonctions.php';
?>
<label>Choix du module :</label>
    <select OnChange="export_matiere()" id="export_module">
           <option></option>
           <?php
              $cnx=connect();
              $req='SELECT * FROM module WHERE idMod='.$_POST['module'].'';
              $res=execReq($req);
              while($matiere=mysql_fetch_assoc($res))
              {
                   echo'<option  value="'.$matiere['idMat'].'">'.$matiere['libelle'].'</option>';
              }
              deconnect($cnx);
            ?>
     </select>
