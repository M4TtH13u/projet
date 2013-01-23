<?php
 include'../fonctions/fonctions.php';
?>
<label>Choix du module :</label>
    <select OnChange="export_matiere()" id="export_module">
           <option></option>
           <?php
              $cnx=connect();
              $req='SELECT * FROM module ';
              $res=execReq($req);
              while($module=mysql_fetch_assoc($res))
              {
                   echo'<option  value="'.$module['idMod'].'">'.$module['libelle'].'</option>';
              }
              deconnect($cnx);
            ?>
     </select>
