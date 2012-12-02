<?php
include'include/debut.php';
include'include/fonctions.php';
if (( !empty($_POST['choixUtil']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['login']) && !empty($_POST['pass']) && !empty($_POST['repass']))&&($_POST['pass']==$_POST['repass'])&&( ($_POST['choixUtil']="4")||(($_POST['choixUtil']="2")&&!empty($_POST['promo']))||(($_POST['choixUtil']="3")&&!empty($_POST['tel'])&& !empty($_POST['numBureau']))))
{
    echo'Ca reste a faire';
}
else
{
?>
<form id="form_prof_eleve" action="#" method="POST">
    <fieldset>
        <legend>Inscription :</legend>
        <?php
        if (isset($_SESSION['idRole'])&& ($_SESSION['idRole']>=3))
            {
            if ($_SESSION['idRole']==4)
                {
                echo '<label>Type :</label><input type="radio" name="choixUtil" onClick="prof();"value="4"/> Administrateur';
                echo '<input type="radio" name="choixUtil" id="prof1" onClick="prof();" value="3"/>Professeur';
                }
            echo '<input type="radio" name="choixUtil" id="eleve1" onClick="prof();" value="2"/>Elève<br/>';
            echo '<label>Nom :</label><input type="text" name="nom"/><br/>';
            echo '<label>Prénom : </label><input type="text" name="prenom"/><br/>';
            echo '<label>Identifiant : </label><input type="text" name="login"/><br/>';
            echo '<label>Mot de passe : </label><input type="password" name="pass"/><br/>';
            echo '<label>Confirmation mot de passe : </label><input type="password" name="repass"/><br/>';
            ?>
            <span id="ajout_promo">
                <label>Promo :</label>
                <select name="promo">
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
                <label>Tél :</label><input type="text" name="tel"/><br/>
                <label>Numéro bureau :</label><input type="text" name="numBureau"/><br/>   
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
}
 include'include/fin.php';   
 ?>
