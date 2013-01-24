<?PHP
include'../fonctions/fonctions.php'
//on créer un formulaire pour afficher l'ensemble des matières dans le module (inclu dans ajout_note)
?>
<label>Choix de la matière :</label>
    <select OnChange="modifier_note()" id="matiere">
           <option></option>
           <?php
              $cnx=connect();//on selectionne toutes les matières du module choisi dans ajout_note
              $req='SELECT * FROM matiere WHERE idMod='.$_POST['module'].'';
              $res=execReq($req);
              while($matiere=mysql_fetch_assoc($res))
              {
                   echo'<option  value="'.$matiere['idMat'].'">'.$matiere['libelle'].'</option>';
              }
              deconnect($cnx);
            ?>
     </select>
