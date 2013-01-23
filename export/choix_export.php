<form>
    <fieldset>
   <legend> Exportation </legend>
 
    
 <p>Voulez vous exporter par rapport à:</p>
<label>une matiere</label><input type="radio" name="choix"  onChange="export_matiere();"/>
<label>une promo</label><input type="radio" name="choix"   onChange="export_promo(0);"/>
<label>un(e) élève</label><input type="radio" name="choix" onChange="export_promo(1);"/>

<!--
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
-->
<div id="choix_export"></div>

</fieldset>
</form>