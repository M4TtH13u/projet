<?php
include'moyenne.php';
if (securite(3))
{

?>
<form id="moyenne" action="#" method="POST">    <!--Création d'un formulaire-->
    <fieldset>
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
                <select name="matiere">
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
            </select>
        </div>
    </fieldset>
</form>

<?php
        }    
 ?>
