<?php
include'include/debut.php';
//include'include/fin.php';
include'include/fonctions.php';
?>
<form id="form_ajout_prof_eleve" name="form1" action="#" method="POST">
    <fieldset>
        <legend>Inscription :</legend>
    <?php
    if ($_SESSION['idRole']>=3){
            if ($_SESSION['idRole']==4){
                echo '<label>Administrateur<input type="radio" name="choixUtil" onClick="prof();"/></label>';
                echo '<label>Professeur<input type="radio" name="choixUtil" id="prof1" onClick="prof();"/></label>';
            }
        echo '<label>Elève<input type="radio" name="choixUtil" id="eleve1" onClick="prof();"/></label></br>';
        echo '<label>Nom :<input type="text"/></label></br>';
        echo '<label>Prénom :<input type="text"/></label></br>';
        echo '<label>Identifiant :<input type="text"/></label></br>';
        echo '<label>Mot de passe :<input type="password"/></label></br>';
        echo '<label>Confirmation mot de passe :<input type="password"/></label></br>';
    ?>
    <div id="ajout_promo">
        <label>Promo :</label>
        <select>
        <option></option>
    <?php
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
        </div>
              

    
            <div id="ajout_prof">
            <?php
             echo '<label>Tél :<input type="text"/></label></br>';
             echo '<label>Numéro bureau :<input type="text"/></label></br>';    
             ?>
             </div>
        <?php
         }
        ?>
            <input type="submit" value="Envoyer" />
            <input type="reset" value="Annuler" />
    
    </fieldest>
 
</form>
    


 <?php   
 include'include/fin.php';   
 ?>
