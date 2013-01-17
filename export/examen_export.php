<?PHP
include'../fonctions/fonctions.php'
?>
<label>Choix de l'examen :</label>
    <select OnChange="export_note()" name="DS" id="ds_export">
           <option></option>
           <?php
              $cnx=connect();
              $req='SELECT * FROM examen WHERE idMat='.$_POST['nb'].'';
              $res=execReq($req);
              while($matiere=mysql_fetch_assoc($res))
              {
                   echo'<option  value="'.$matiere['idExam'].'">'.$matiere['libelle'].'</option>';
              }
              deconnect($cnx);
            ?>
     </select>