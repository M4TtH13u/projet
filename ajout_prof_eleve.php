<?php
include'include/debut.php';
//include'include/fin.php';
include'include/fonctions.php';
?>
<form id="form_prof_eleve" name="form1" action="#" method="POST">
    <fieldset>
        <legend>Inscription :</legend>
        <?php
        if (isset($_SESSION['idRole'])&& ($_SESSION['idRole']>=3))
            {
            if ($_SESSION['idRole']==4)
                {
                echo '<label>Type :</label><input type="radio" name="choixUtil" onClick="prof();"/> Administrateur';
                echo '<input type="radio" name="choixUtil" id="prof1" onClick="prof();"/>Professeur';
                }
            echo '<input type="radio" name="choixUtil" id="eleve1" onClick="prof();"/>Elève<br/>';
            echo '<label>Nom :</label><input type="text"/><br/>';
            echo '<label>Prénom : </label><input type="text"/><br/>';
            echo '<label>Identifiant : </label><input type="text"/><br/>';
            echo '<label>Mot de passe : </label><input type="password"/><br/>';
            echo '<label>Confirmation mot de passe : </label><input type="password"/><br/>';
            ?>
            <span id="ajout_promo">
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
           </span>
            <span id="ajout_prof">
                <label>Tél :</label><input type="text"/><br/>
                <label>Numéro bureau :</label><input type="text"/><br/>   
           </span>
            <?php
            }
            ?>
        <br>
        <input type="submit" value="Envoyer" />
        <input type="reset" value="Annuler" onClick="reinitialiser();"/>
    </fieldset>
</form>
    


 <?php   
 include'include/fin.php';   
 ?>
