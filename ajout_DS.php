<?php
include'include/debut.php';
include'include/fonctions.php';
session_start();
if (securite(3))
{

?>
<form id="form_DS" action="#" method="POST">    <!--Création d'un formulaire-->
    <fieldset>
        <legend>Ajout DS :</legend> 
        <label>Choisir la promo</label>
                <?php
                   $cnx=connect();
                   $req='select * from promo';
                   $res=execReq($req);
                   while($promo=mysql_fetch_assoc($res))
                   {
                       echo'<input type ="radio" name="promo" onClick="ajout_DS();" id="'.$promo['libelle'].'" value="'.$promo['idPromo'].'">'.$promo['libelle'].'</input>';
                   }
                   deconnect($cnx);
                   ?>
        <br/>
        <div id="matiere1">
            <label>Matiere :</label>
                <select name="matiere1">
                    <option></option>
                    <?php
                        $cnx=connect();
                        mysql_query("SET NAMES UTF8");
                        $req='select * from matiere ma, module mo where ma.idMod=mo.idMod and mo.idPromo=1';
                        $res=execReq($req);
                        while($matiere=mysql_fetch_assoc($res)){
                            echo '<option value="'.$matiere['idMat'].'">'.$matiere['libelle'].'</option>';  //création du menu déroulant avec association de la BDD et de la table matière
                        }      
                        deconnect($cnx); 
                    ?>
                </select></br>
                <label>Nom de l'examen : </label><input type="text" name="libelle"/><br/>   <!--Création d'un libellé avec le nom de l'examen-->
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
                            echo '<option value="'.$type['idType'].'">'.$type['libelle'].'</option>';   //création du menu déroulant avec association de la BDD et de la table typexam
                        }      
                        deconnect($cnx); 
                    ?>
                </select>
        <br>
        </div>
        <div id="matiere2">
            <label>Matiere :</label>
            <select name="matiere2">
                <option></option>
                <?php
                    $cnx=connect();
                    mysql_query("SET NAMES UTF8");
                    $req='select * from matiere ma, module mo where ma.idMod=mo.idMod and mo.idPromo=2';
                    $res=execReq($req);
                    while($matiere=mysql_fetch_assoc($res)){
                        echo '<option value="'.$matiere['idMat'].'">'.$matiere['libelle'].'</option>';  //création du menu déroulant avec association de la BDD et de la table matière
                    }      
                    deconnect($cnx); 
                ?>
            </select></br>
            <label>Nom de l'examen : </label><input type="text" name="libelle"/><br/>   <!--Création d'un libellé avec le nom de l'examen-->
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
                            echo '<option value="'.$type['idType'].'">'.$type['libelle'].'</option>';   //création du menu déroulant avec association de la BDD et de la table typexam
                        }      
                        deconnect($cnx); 
                    ?>
                </select>
        <br>
        </div>
        <input type="submit" value="Envoyer" />
        <input type="reset" value="Annuler" onClick="reinitialiser();"/>
    </fieldset>
</form>
    


 <?php   
 
    if ((!empty($_POST['libelle']) && !empty($_POST['matiere']) && !empty($_POST['date']) && !empty($_POST['type']))){
        $cnx=connect();
        mysql_query("SET NAMES UTF8");
        $req='INSERT INTO examen VALUE("","'.$_POST['libelle'].'","'.$_POST['matiere'].'","'.$_POST['date'].'","'.$_POST['type'].'")';
        $res=execReq($req);
        deconnect($cnx); 
        echo 'Le DS à bien été ajouté'; 
    }     
 include'include/fin.php'; 
}
 else
{
     echo'<SCRIPT LANGUAGE="JavaScript">
     document.location.href="index.php" 
</SCRIPT>';
}
 ?>
