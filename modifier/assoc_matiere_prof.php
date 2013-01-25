<?php
if (securite(4))
{
    if (!empty($_POST['prof']) && (!empty($_POST['associer_mat']) || !empty($_POST['dissocier_mat'])))
    {
        $cnx=connect();
        if (!empty($_POST['associer_mat']))
        {
             
                   $req='Update matiere set idProf="'.$_POST['prof'].'" where idMat="'.$_POST['associer_mat'].'" ';
                   $res=execReq($req);
                   echo 'Professeur associé à la matière';
        }
        else
        {
            $req='Update matiere set idProf=null where idMat="'.$_POST['dissocier_mat'].'"';
                   $res=execReq($req);
                   echo 'Professeur dissocié à la matière';
        }
        deconnect($cnx);
    }
?>

<form  method="POST">   <!--Création d'un formulaire-->
  <fieldset>
      <!--choix du type d'action effectuer qui déclenche l'affichage des champs correspondants-->
        <label>Action :</label><input id="asm" type="radio" name="choixMod" onClick="associer();"/> Associer
        <input type="radio" name="choixMod" id ="dsm" onClick="associer();"/>Dissocier</br>
        <!-- partie ajout -->
        <label>Choisir le professeur</label>
            <select name="prof" id="prof_assoc" onChange="dissocier();">
                <option></option>
                <?php         // menu de selection des professeurs
                   $cnx=connect();
                   $req='select u.idUtil idUtil, u.nom nom, u.prenom prenom, p.idProf idProf from utilisateur u ,prof p where p.idUtil=u.idUtil';
                   $res=execReq($req);
                   while($prof=mysql_fetch_assoc($res))
                   {
                       echo'<option value="'.$prof['idProf'].'">'.$prof['nom'].' '.$prof['prenom'].'</option>';
                   }
                   deconnect($cnx);
                 ?>
             </select>
        <span id="assoc_mat">
            <label>Module</label>
              <select name="associer_module" id ="associer_mod" onChange="associer2();">
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
            </select><br/>
            <span id="afficher_mat"></span>
        </span>
        
  
        <!-- partie suppression -->
        <span id="dissocier_mat">
             
        </span>
      <br>
      <input type="submit"  value="Envoyer" />
      <input type="reset" value="Annuler" onClick="reinitialiser();"/>
  </fieldset>
</form>  
<?php 
}
else// si il n'a pas le droit on le redirige gentillement vers la page d'accueil
{
     echo'<SCRIPT LANGUAGE="JavaScript">
     document.location.href="index.php" 
</SCRIPT>';
}

