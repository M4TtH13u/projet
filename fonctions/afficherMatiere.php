<?PHP       // affichage des matières dans l'ajout d'examen et les modules (inclue dans module)
include'../fonctions/fonctions.php'
?>
<label>Choix de la matière :</label>  <!-- menu déroulant des matières qui déclenchent l'affichage des notes -->
    <select OnChange="afficher_note()" id="matiere">
           <option></option>
           <?php
              $cnx=connect();//on selectionne les matière qui correspondent au module choisi
              $req='SELECT * FROM matiere WHERE idMod='.$_POST['module'].'';
              $res=execReq($req);
              while($matiere=mysql_fetch_assoc($res))
              {
                   echo'<option  value="'.$matiere['idMat'].'">'.$matiere['libelle'].'</option>';
              }
              deconnect($cnx);
            ?>
     </select>

