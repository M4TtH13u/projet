<?php

if (securite(3))
{

 
    if ((!empty($_POST['libelle']) && (!empty($_POST['matiere'])) && (!empty($_POST['date'])) && (!empty($_POST['type'])))){
        if (!empty($_POST['util'])){
            $cnx=connect();
            mysql_query("SET NAMES UTF8");
            $req='INSERT INTO examen VALUE("","'.$_POST['libelle'].'","'.$_POST['matiere'].'","'.$_POST['date'].'","'.$_POST['type'].'")';
            $res=execReq($req);
            $req='SELECT idExam FROM examen WHERE libelle="'.$_POST['libelle'].'"';
            $res=execReq($req);
            while($donnee=mysql_fetch_assoc($res))
                {
                    $exam=$donnee['idExam'];
                }
            foreach (($_POST['util']) as $nb){
            $req='INSERT INTO participe VALUES("'.$nb.'","'.$exam.'","")';
            $res=execReq($req);
            }
            deconnect($cnx); 
            echo 'Le DS à bien été ajouté';
            }
            else{
                echo "Aucun élève n'a été selectionné pour participer à cet examen";
            }
        } 
        else
        {
      
?>
<form id="form_DS" action="#" method="POST">    <!--Création d'un formulaire-->
    <fieldset>
        <legend>Ajout d'un Examen :</legend> 
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
         <div id="tableau">
        </div>
        <div id="choixeleve">
        </div>
        <span id="button">
        <input type="button" value="Envoyer" Onclick="Exam_eleve();"/>
        </span>
        
        <input type="reset" value="Annuler" onClick="reinitialiser();"/>
    </fieldset>
</form>

<?php
        }}      
 ?>
