<?PHP
include'../fonctions/fonctions.php';
//on créer un formulaire pour afficher l'ensemble des examens dans la matière (inclu dans ajout_note)
?>

<label>Choix de l'examen :</label>
    <select OnChange="modifier_note2()" name="DS" id="DS">
           <option></option>
           <?php    // on selectionne tous les examens de la matière selectionnée dans modifier_note_matière
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
