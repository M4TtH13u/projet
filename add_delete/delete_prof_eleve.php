<?php
if (securite(4))
{
            //condition de déclenchement de modification de la BDD
    if (!empty($_POST['type']) && ((!empty($_POST['prof2']) || (!empty($_POST['eleve'])))))
    {
        if (!empty($_POST['prof2']))
        {
            $cnx=connect();
            $req='UPDATE matiere m, prof p SET m.idProf=null WHERE m.idProf=p.idProf AND p.idUtil="'.$_POST['prof2'].'"';
            $res=execReq($req);
            $req='DELETE FROM prof WHERE idUtil="'.$_POST['prof2'].'"';
            $res=execReq($req);
            $req='DELETE FROM utilisateur WHERE idUtil="'.$_POST['prof2'].'"';
            $res=execReq($req);
            deconnect($cnx);
            echo "l'utilisateur a bien été retiré";
        }
        else{
            $cnx=connect();
            $req='DELETE FROM utilisateur WHERE idUtil="'.$_POST['eleve'].'"';
            $res=execReq($req);
            $req2='select numEtudiant from eleve where idUtil="'.$_POST['eleve'].'"';
            $res2=execReq($req2);
            while ($num=  mysql_fetch_assoc($res2))
            {
             $req='DELETE FROM participe WHERE numEtudiant='.$num['numEtudiant'];
            $res=execReq($req);
             $req='DELETE FROM eleve WHERE numEtudiant='.$num['numEtudiant'];
            $res=execReq($req);
            }
           
            deconnect($cnx);
            echo "l'utilisateur a bien été retiré";
        }
    }
    
?>
<form id="form_prof_eleve" name="form1" action="#" method="POST">   <!--Création d'un formulaire-->
    <fieldset>
        <legend>Suppression :</legend><!--choix de l'utilisateur à supprimer qui déclenche l'affichage des liste d'élève ou du choix de promo-->
        <label>Choix de suppression :</label><input type="radio" name="type" id="prof" value="prof" onChange="afficher_delete();"/>Professeur
                                             <input type ="radio" name="type" value="eleve" id ="eleve" onChange="afficher_delete();"/>Elève<br/>
        <div id="eleve_delete">
            <label>Choisir la promo</label>
            <?php         // radio de selection de la promo qui déclenche l'affichage de la liste d'élève
               $cnx=connect();
               $req='select * from promo';
               $res=execReq($req);
               while($promo=mysql_fetch_assoc($res))
               {
                   echo'<input type ="radio" name="promo" onClick="afficher_delete2('.$promo['idPromo'].');" id="'.$promo['libelle'].'" value="'.$promo['idPromo'].'">'.$promo['libelle'].'</input>';
               }
               deconnect($cnx);
            ?>
            <div id="choixEleve"> <!-- div destinée aux choix de l'élève à modifier -->
            </div>          
        </div>
        <div id="prof_delete">
            <label>Choisir le professeur</label>
            <select name="prof2">
                <option></option>
                <?php         // menu de selection des professeurs
                   $cnx=connect();
                   $req='select u.idUtil idUtil, u.nom nom, u.prenom prenom from utilisateur u ,prof p where p.idUtil=u.idUtil';
                   $res=execReq($req);
                   while($prof=mysql_fetch_assoc($res))
                   {
                       echo'<option value="'.$prof['idUtil'].'">'.$prof['nom'].' '.$prof['prenom'].'</option>';
                   }
                   deconnect($cnx);
                 ?>
             </select>
         </div>
         <input type="submit"  value='Supprimer'/>
         <input type="reset" onClick="reinitialiser();"/>
    </fieldset>
</form>

<div id="res">
</div>

<?php }
else// si il n'a pas le droit on le redirige gentillement vers la page d'accueil
{
     echo'<SCRIPT LANGUAGE="JavaScript">
     document.location.href="index.php" 
</SCRIPT>';
}
?>