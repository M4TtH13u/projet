<?php
if (securite(4))
{

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
             <input type="submit" onClick="verif2()" value='Supprimer'/>
             <input type="reset" onClick="reinitialiser();"/>
        </fieldset>
    </form>

<?php }
else
{
     echo'<SCRIPT LANGUAGE="JavaScript">
     document.location.href="index.php" 
</SCRIPT>';
}
?>