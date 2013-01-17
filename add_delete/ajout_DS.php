<?php

if (securite(3))
{
  
 
    if ((!empty($_POST['libelle']) && (!empty($_POST['matiere'])) && (!empty($_POST['date'])) && (!empty($_POST['type'])))){
/*        $cnx=connect();
        mysql_query("SET NAMES UTF8");
        $req='INSERT INTO examen VALUE("","'.$_POST['libelle'].'","'.$_POST['matiere'].'","'.$_POST['date'].'","'.$_POST['type'].'")';
        $res=execReq($req);
        for ($i=0;$i<$length;$i++){
        $req='INSERT INTO participe pa ("'.$_POST['idUtil'].'",idExam,"") SELECT idExam FROM examen WHERE libelle="'.$_POST['libelle'].'"';
        $res=execReq($req);
        }
        deconnect($cnx); 
*/        echo 'Le DS à bien été ajouté';
        } 
        else
        {
      
?>
<form id="form_DS" action="#" method="POST">    <!--Création d'un formulaire-->
    <fieldset>
        <legend>Ajout DS :</legend> 
        <div id="promo">
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
        </div>
        <div id="matiere">
        </div>
        <div id="choixeleve">
        </div>
        <span id="button">
        <input type="button" value="Envoyer" Onclick="Exam_eleve();" />
        </span>
        
        <input type="reset" value="Annuler" onClick="reinitialiser();"/>
    </fieldset>
</form>

<?php
        }}      
 ?>
