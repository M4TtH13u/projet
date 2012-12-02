<?php
include'include/debut.php';
include'include/fonctions.php';
if (( !empty($_POST['type']) && !empty($_POST['promo']) && !empty($_POST['eleve'])) || (!empty($_POST['type']) && !empty($_POST['prof'])))
{
    echo'Ca reste a faire';
}
else
{
?>
<form id="suppression" method="POST" action="#">
    <label>Choix de suppression :  Professeur</label><input type="radio" name="type" id="prof" value="prof" onClick="afficher_delete();"/>
    <label>Elève</label><input type ="radio" name="type" value="eleve" id ="eleve" onClick="afficher_delete();"/>
    <br/>
    <div id="eleve_delete">
    <?php
     $cnx=connect();
    $req='select * from promo';
    $res=execReq($req);
    while($promo=mysql_fetch_assoc($res))
    {
        echo'<input type ="radio" name="promo" onClick="afficher_delete2();" id="'.$promo['libelle'].'" value="'.$promo['idPromo'].'">'.$promo['libelle'].'</input>';
    }
    deconnect($cnx);
    ?>
        <div id="eleve_CPI1"><select  name="eleve">
                <option></option>
                 <?php
                            $cnx=connect();
                           $req='select * from utilisateur u,eleve e  where u.idUtil=e.idUtil and e.idPromo=1';
                           $res=execReq($req);
                           while($eleve=mysql_fetch_assoc($res))
                           {
                            echo'<option  value="'.$eleve['idUtil'].'">'.$eleve['nom'].' '.$eleve['prenom'].'</option>';
                           }
                           deconnect($cnx);
    ?>
                
             </select>  </div>
         <div id="eleve_CPI2">
             <select  name="eleve">
                <option></option>
                 <?php
                            $cnx=connect();
                           $req='select * from utilisateur u,eleve e  where u.idUtil=e.idUtil and e.idPromo=2';
                           $res=execReq($req);
                           while($eleve=mysql_fetch_assoc($res))
                           {
                            echo'<option  name="eleve" value="'.$eleve['idUtil'].'">'.$eleve['nom'].' '.$eleve['prenom'].'</option>';
                           }
                           deconnect($cnx);
                  ?>
             </select>  
         </div>          
    </div>
    <div id="prof_delete">
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
    <input type="submit" value='Supprimer'/>
</form>
    <?php
}
include 'include/fin.php';
?>
