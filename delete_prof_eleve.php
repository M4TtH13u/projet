<?php
include'include/debut.php';
include'include/fonctions.php';
?>
<form id="suppression" method="POST" action="#">
    <label>Choix de suppression :  Professeur</label><input type="radio" name="type" value="prof"/>
    <label>Elève</label><input type ="radio" name="type" value="eleve"/>
    <br/>
    <div id="eleve">
    <?php
     $cnx=connect();
    $req='select * from promo';
    $res=execReq($req);
    while($promo=mysql_fetch_assoc($res))
    {
        echo'<input type ="radio" name="promo" value="'.$promo['idPromo'].'">'.$promo['libelle'].'</input>';
    }
    deconnect($cnx);
    ?>
        <div id="nom_eleve"><select>
                <option></option>
                 <?php
                            $cnx=connect();
                           $req='select nom,prenom from utilisateur u,eleve e  where e.idPromo="'.$_POST['promo'].'" and u.idUtil=e.idUtil';
                           $res=execReq($req);
                           while($eleve=mysql_fetch_assoc($res))
                           {
                               echo'<option  name="eleve" value="'.$eleve['numEtudiant'].'">'.$eleve['nom'].'</option>';
                           }
                           deconnect($cnx);
    ?>
                
             </select>  </div>
    </div>
    <input type="submit" value='Supprimer'/>
</form>
    <?php
include 'include/fin.php';
?>
