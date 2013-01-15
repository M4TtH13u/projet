<?php 
include '../fonctions/fonctions.php';?>
<label>Matiere :</label>
                <select name="matiere">
                    <option></option>
                    <?php
                        $cnx=connect();
                        mysql_query("SET NAMES UTF8");
                        $req='select * from matiere ma, module mo where ma.idMod=mo.idMod and mo.idPromo='.$_POST['nb'];
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
