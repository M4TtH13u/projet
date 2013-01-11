<?PHP
include'../fonctions/fonctions.php'
?>
<label>Choix de la matière :</label>
    <select OnChange="afficher_note()" name="module">
           <option></option>
           <?php
              $cnx=connect();
              $req='SELECT * FROM matiere WHERE idMod='.$_POST['module'].'';
              $res=execReq($req);
              while($matiere=mysql_fetch_assoc($res))
              {
                   echo'<option  value="'.$matiere['idMat'].'">'.$matiere['libelle'].'</option>';
              }
              deconnect($cnx);
            ?>
     </select>

