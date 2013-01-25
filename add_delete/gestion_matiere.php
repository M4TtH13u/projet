<?php
if (securite(4))
{
            //condition de déclenchement de modification de la BDD (tous les champs remplis)
    if (!empty($_POST['choixMat']) && ((!empty($_POST['prof']) && !empty($_POST['module']) && !empty($_POST['coef']) && !empty($_POST['libelle'])) || !empty($_POST['delete'])))
{ // distinction ajout/delete
    if (!empty($_POST['libelle']))
    {
        $cnx=connect();//table utilisateur pour l'admin
        mysql_query("SET NAMES UTF8");
        $req='INSERT INTO matiere VALUE("","'.$_POST['libelle'].'","'.$_POST['coef'].'","'.$_POST['module'].'","'.$_POST['prof'].'")';
        $res=execReq($req);
        deconnect($cnx); 
        echo'La matiere a été ajouté';
    }
    else
    {
        $cnx=connect();//table utilisateur, prof pour les professeurs
        mysql_query("SET NAMES UTF8");
        $req='DELETE FROM matiere WHERE idMat="'.$_POST['delete'].'"';
        $res=execReq($req);
        echo'La matiere a été supprimé';
    }
   
}
?>
<form id="form_prof_eleve" method="POST">   <!--Création d'un formulaire-->
  <fieldset>
      <!--choix du type d'action effectuer qui déclenche l'affichage des champs correspondants-->
        <label>Action :</label><input id="ajm" type="radio" name="choixMat" onClick="gestion();"/> Ajouter
        <input type="radio" name="choixMat" id ="delm" onClick="gestion();"/>Supprimer
        <!-- partie ajout -->
        <span id="ajout_m">
            <label>Libelle :</label><input type="text" name="libelle"/><br/>
            <label>Coef :</label><input type="text" name="coef"/><br/>
            <label>Module :</label>
            <select name="module">
                <option></option>
                <?php         // menu déroulant pour le module
                    $cnx=connect();
                    mysql_query("SET NAMES UTF8");
                    $req='select * from module';
                    $res=execReq($req);
                    while($module=mysql_fetch_assoc($res)){
                        echo '<option name="module" value="'.$module['idMod'].'">'.$module['libelle'].'</option>';
                    }      
                    deconnect($cnx); 
                ?>
            </select>
            <label>Professeur en charge :</label>
            <select name="prof">
                <option></option>
                <?php         // menu déroulant pour le module
                    $cnx=connect();
                    mysql_query("SET NAMES UTF8");
                    $req='select * from prof p, utilisateur u WHERE p.idUtil=u.idUtil';
                    $res=execReq($req);
                    while($prof=mysql_fetch_assoc($res)){
                        echo '<option name="prof" value="'.$prof['idProf'].'">'.$prof['nom'].' '.$prof['prenom'].'</option>';
                    }      
                    deconnect($cnx); 
                ?>
            </select>
        </span>
        <!-- partie suppression -->
        <span id="delete_m">
            <label>Choix du module :</label>
    <select OnChange="gestion2()" id="gestion_matiere">
           <option></option>
           <?php
              $cnx=connect();
              $req='SELECT * FROM module ';// on sélectionne tous les modules on les affiches dans un select
              $res=execReq($req);
              while($module=mysql_fetch_assoc($res))
              {
                   echo'<option  value="'.$module['idMod'].'">'.$module['libelle'].'</option>';
              }
              deconnect($cnx);
            ?>
     </select>
            <span id="delete_m2"></span>
        </span>
      <br>
      <input type="submit"  value="Envoyer" />
      <input type="reset" value="Annuler" onClick="reinitialiser();"/>
  </fieldset>
</form>  
<?php } 
else// si il n'a pas le droit on le redirige gentillement vers la page d'accueil
{
     echo'<SCRIPT LANGUAGE="JavaScript">
     document.location.href="index.php" 
</SCRIPT>';
}
?>
