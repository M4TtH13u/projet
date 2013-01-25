<?php

if (securite(4))
{
            //condition de déclenchement de modification de la BDD (tous les champs remplis)
    if (!empty($_POST['choixMod']) && ((!empty($_POST['promo']) && !empty($_POST['libelle'])) || !empty($_POST['delete'])))
{ // distinction ajout/delete
    if (!empty($_POST['promo']))
    {
        $cnx=connect();//table utilisateur pour l'admin
        mysql_query("SET NAMES UTF8");
        $req='INSERT INTO module VALUE("","'.$_POST['libelle'].'","'.$_POST['promo'].'")';
        $res=execReq($req);
        deconnect($cnx); 
        echo'Le module a été ajouté';
    }
    else
    {
        $cnx=connect();//table utilisateur, prof pour les professeurs
        mysql_query("SET NAMES UTF8");
        $req='DELETE FROM module WHERE idMod="'.$_POST['delete'].'"';
        $res=execReq($req);
        echo'Le module a été supprimé';
    }
   
}

?>
<form id="form_prof_eleve" method="POST">   <!--Création d'un formulaire-->
  <fieldset>
      <!--choix du type d'action effectuer qui déclenche l'affichage des champs correspondants-->
        <label>Action :</label><input id="ajm" type="radio" name="choixMod" onClick="gestion();"/> Ajouter
        <input type="radio" name="choixMod" id ="delm" onClick="gestion();"/>Supprimer
        <!-- partie ajout -->
        <span id="ajout_m">
            <label>Libelle :</label><input type="text" name="libelle"/><br/>
            <label>Promo :</label>
            <select name="promo">
                <option></option>
                <?php         // menu déroulant pour la promo
                    $cnx=connect();
                    mysql_query("SET NAMES UTF8");
                    $req='select * from promo';
                    $res=execReq($req);
                    while($promo=mysql_fetch_assoc($res)){
                        echo '<option name="promo" value="'.$promo['idPromo'].'">'.$promo['libelle'].'</option>';
                    }      
                    deconnect($cnx); 
                ?>
            </select>
        </span>
        <!-- partie suppression -->
        <span id="delete_m">
              <label>Module :</label>
              <select name="delete">
                <option></option>
                <?php         // menu déroulant pour la promo
                    $cnx=connect();
                    mysql_query("SET NAMES UTF8");
                    $req='select * from module';
                    $res=execReq($req);
                    while($module=mysql_fetch_assoc($res)){
                        echo '<option name="delete" value="'.$module['idMod'].'">'.$module['libelle'].'</option>';
                    }      
                    deconnect($cnx); 
                ?>
            </select>
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
