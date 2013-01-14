<?php
if (securite(4))
{

    if ((!empty($_POST['type']) && !empty($_POST['prof'])) || (!empty($_POST['type']) && !empty($_POST['eleve'])))
    {
        if (!empty($_POST['prof']))
        {
            $cnx=connect();
            $req='UPDATE matiere m, prof p SET m.idProf=null WHERE m.idProf=p.idProf AND p.idUtil="'.$_POST['prof'].'"';
            $res=execReq($req);
            $req='DELETE FROM prof WHERE idUtil="'.$_POST['prof'].'"';
            $res=execReq($req);
            $req='DELETE FROM utilisateur WHERE idUtil="'.$_POST['prof'].'"';
            $res=execReq($req);
            deconnect($cnx);
            echo "l'utilisateur a bien été retiré";
        }
        else{
            $cnx=connect();
            $req='DELETE FROM utilisateur WHERE idUtil"'.$_POST['eleve'].'"';
            $res=execReq($req);
            $req='DELETE FROM participe p, eleve e WHERE idUtil="'.$_POST['eleve'].'" AND p.numEtudiant=e.numEtudiant';
            $res=execReq($req);
            deconnect($cnx);
            echo "l'utilisateur a bien été retiré";
        }
    }
else{

    
?>
    <form id="form_prof_eleve" name="form1" action="#" method="POST">
        <fieldset>
            <legend>Suppression :</legend>
            <label>Choix de suppression :</label><input type="radio" name="type" id="prof" value="prof" onChange="afficher_delete();"/>Professeur
                                                 <input type ="radio" name="type" value="eleve" id ="eleve" onChange="afficher_delete();"/>Elève<br/>
            <div id="eleve_delete">
                <label>Choisir la promo</label>
                <?php
                   $cnx=connect();
                   $req='select * from promo';
                   $res=execReq($req);
                   while($promo=mysql_fetch_assoc($res))
                   {
                       echo'<input type ="radio" name="promo" onClick="afficher_delete2('.$promo['idPromo'].');" id="'.$promo['libelle'].'" value="'.$promo['idPromo'].'">'.$promo['libelle'].'</input>';
                   }
                   deconnect($cnx);
                ?>
                <div id="choixEleve"> 
                </div>          
            </div>
            <div id="prof_delete">
                <label>Choisir le professeur</label>
                <select name="prof">
                    <option></option>
                    <?php
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

<?php } }
else
{
     echo'<SCRIPT LANGUAGE="JavaScript">
     document.location.href="index.php" 
</SCRIPT>';
}
?>