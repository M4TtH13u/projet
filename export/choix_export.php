
<label>Promo :</label>
<select name="promo" onChange="export_eleve();" id="export_promo">
      <option></option>
      
      <?php
      include'../fonctions/fonctions.php';
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
<div id="eleve_export"></div>
<div id="module_export"></div>
<div id="matiere_export"></div>
<div id="examen_export"></div>