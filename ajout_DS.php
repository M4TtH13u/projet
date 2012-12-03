<?php
include'include/debut.php';
include'include/fonctions.php';

/*     $cnx=connect();
        mysql_query("SET NAMES UTF8");
        $req='INSERT INTO examen VALUE("","'.$_POST['libelle'].'","'.$_POST['idMat'].'","'.$_POST['date'].'","'.$_POST['idType'].'")';
        $res=execReq($req);
        deconnect($cnx); 
        echo'Le DS à bien été ajouté'; 
*/
?>
<form id="form_DS" action="#" method="POST">
    <fieldset>
        <legend>Ajout DS :</legend>     
        <label>Nom de l'examen : </label><input type="text" name="libelle"/><br/>
            <label>Matiere :</label>
                <select name="matiere">
                    <option></option>
                    <?php
                        $cnx=connect();
                        mysql_query("SET NAMES UTF8");
                        $req='select * from matiere';
                        $res=execReq($req);
                        while($matiere=mysql_fetch_assoc($res)){
                            echo '<option value="'.$matiere['idMat'].'">'.$matiere['libelle'].'</option>';
                        }      
                        deconnect($cnx); 
                    ?>
                </select></br>
            <label>Date : </label><input type="date" name="date"/><br/>
            <label>Type d'examen :</label>
                <select name="type">
                    <option></option>
                    <?php
                        $cnx=connect();
                        mysql_query("SET NAMES UTF8");
                        $req='select * from typexam';
                        $res=execReq($req);
                        while($type=mysql_fetch_assoc($res)){
                            echo '<option value="'.$type['idType'].'">'.$type['libelle'].'</option>';
                        }      
                        deconnect($cnx); 
                    ?>
                </select>
        <br>
        <input type="submit" value="Envoyer" />
        <input type="reset" value="Annuler" onClick="reinitialiser();"/>
    </fieldset>
</form>
    


 <?php   
 
 include'include/fin.php';   
 ?>
