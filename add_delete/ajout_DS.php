<?php
//Page principale d'ajout d'examen
if (securite(3))
{
    if ((!empty($_POST['libelle']) && (!empty($_POST['matiere'])) && (!empty($_POST['date'])) && (!empty($_POST['type'])))){//vérification du remplissage des données remplies
        if (!empty($_POST['util'])){// vérification des élève qui y participe
            $cnx=connect();//remplissage de la base de donnée et message de confirmarion
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
                echo "Aucun élève n'a été selectionné pour participer à cet examen";//message d'erreur
            }
        } 
        else
        {
      
?>
<form id="form_DS" action="#" method="POST">    <!--Création d'un formulaire-->
    <fieldset>
        <legend>Ajout d'un Examen :</legend> 
        <div id="promo">
        <label>Choisir la promo</label><!--choix de la promo qui déclenche l'affichage des matieres-->
                <?php
                   $cnx=connect();
                   $req='select * from promo';
                   $res=execReq($req);
                   while($promo=mysql_fetch_assoc($res))
                   {
                       echo'<input type ="radio" name="promo" onClick="ajout_DS();" id="'.$promo['libelle'].'" value="'.$promo['idPromo'].'">'.$promo['libelle'].'</input>';//radio de selection de la promo avec envoie vers javascript
                   }
                   deconnect($cnx);
                   ?>
        </div>
        <div id="matiere"> <!-- div destinée aux menu déroulant des matières -->
        </div>
         <div id="tableau"><!-- div destinée au formulaire d'information sur le nouvel examen -->
        </div>
        <div id="choixeleve"><!-- div destinée aux choix des élèves participant à l'examen -->
        </div>
        <span id="button"><!-- bouton provisoir pour acceder au choix des élèves -->
        <input type="button" value="Envoyer" Onclick="Exam_eleve();"/>
        </span>
        
        <input type="reset" value="Annuler" onClick="reinitialiser();"/>
    </fieldset>
</form>

<?php
        }}      
 ?>
