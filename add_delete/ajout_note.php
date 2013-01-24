<?php
if (securite(2))
{
    if(isset($_POST['DS'])){//condition de déclenchement de modification de la BDD
    $cnx=connect();
    $req='SELECT el.idUtil FROM eleve el, participe pa WHERE pa.idExam="'.$_POST['DS'].'" AND pa.numEtudiant=el.numEtudiant';
    $res=execReq($req);
    while($donnee=mysql_fetch_assoc($res))
    {
        if(empty($_POST['justifier_'.$donnee['idUtil']])){//mise en place de status absent pour les notes
            if(empty($_POST['abs_'.$donnee['idUtil']])){
                if(($_POST['note_'.$donnee['idUtil'].'']>=0) && ($_POST['note_'.$donnee['idUtil'].'']<=20)){
                    $req2='UPDATE participe pa, eleve el SET pa.note="'.$_POST['note_'.$donnee['idUtil'].''].'" WHERE pa.numEtudiant=el.numEtudiant AND el.idUtil="'.$donnee['idUtil'].'" AND pa.idExam="'.$_POST['DS'].'"';
                    $res2=execReq($req2);
                    }
                elseif($_POST['note_'.$donnee['idUtil'].'']!=-1){
                    echo'Vous avez entré une note incorrecte<br/>';
                }
            }
          else{
                $req2='UPDATE participe pa, eleve el SET pa.note="0" WHERE pa.numEtudiant=el.numEtudiant AND el.idUtil="'.$donnee['idUtil'].'" AND pa.idExam="'.$_POST['DS'].'"';
                $res2=execReq($req2);
            }
        }
        else{
            
            $req2='UPDATE participe pa, eleve el SET pa.note="-1" WHERE pa.numEtudiant=el.numEtudiant AND el.idUtil="'.$donnee['idUtil'].'" AND pa.idExam="'.$_POST['DS'].'"';
            $res2=execReq($req2);
        }
    }
    if(isset($_POST['util'])){//ajout d'élève supplémentaires qui participent au DS
        foreach (($_POST['util']) as $nb){
            $req='SELECT el.idUtil FROM eleve el, participe pa WHERE pa.idExam="'.$_POST['DS'].'" AND pa.numEtudiant=el.numEtudiant'; //ERREUR !!!!!!!!!!!!!!!!
            $res=execReq($req);
            $verif=true;
            while($donnee=mysql_fetch_assoc($res)){
                if ($donnee['idUtil']==$nb){$verif=false;}//on verifie si l'élève est déjà dans l'examen
            }
            if ($verif){
                $req='INSERT INTO participe VALUES("'.$nb.'","'.$_POST['DS'].'","")';
                $res=execReq($req);
            }
            else{
                echo 'Vous ne pouvez pas entrer deux fois le même élève pour un même examen<br/>';
            }
        }
        deconnect($cnx);
        }
    echo'les notes ont bien été modifiées';
    }
    else{
?>
    <form id="form_module" name="form1" action="#" method="POST"><!-- mise en place du formulaire -->
        <fieldset>
            <legend>Mettre à jour les notes </legend>
            <label>Choix du module :</label>
                 <select OnChange="afficher_matiere2()" id="module"><!--choix du module qui déclenche l'affichage des matieres-->
                    <option></option>
                        <?php   //on selectionne les modules possible selon la promo de l'util s'il est un élève
                            $cnx=connect();
                            if ($_SESSION['idRole']==2){
                                $req='select * from module m, eleve e  where e.idUtil="'.$_SESSION['idUtil'].'" and e.idPromo=m.idPromo';
                            }
                            else {
                                $req='select * from module';
                            }
                            $res=execReq($req);
                            while($module=mysql_fetch_assoc($res))
                            {
                            echo'<option  value="'.$module['idMod'].'">'.$module['libelle'].'</option>';
                            }
                            deconnect($cnx);
                        ?>
                  </select>
            <div id="affmat"><!-- div destinée aux menu déroulant des matières -->
            </div>
             <div id="affds"><!-- div destinée aux menu déroulant des examens -->
            </div>
            <div id="affnote"><!-- div destinée au tableau des notes -->
            </div>
            <div id="choixeleve"><!-- div destinée à la liste des élèves à ajouter aux élèves -->
            </div>
    </form>
            
<?php } }
else// si il n'a pas le droit on le redirige gentillement vers la page d'accueil
{
     echo'<SCRIPT LANGUAGE="JavaScript">
     document.location.href="index.php" 
</SCRIPT>';
}

?>