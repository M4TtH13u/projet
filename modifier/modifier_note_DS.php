<?PHP
include'../fonctions/fonctions.php'
?>
<label>Choix de l'examen :</label>
    <select OnChange="modifier_note2()" id="DS">
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
