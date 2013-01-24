<?php       // tableau des eleves et de leur note dans un DS (inclu dans ajout_note)
include'../fonctions/fonctions.php';
session_start();
$cnx=connect();
mysql_query("SET NAMES UTF8");
//on va selectionner l'ensemble des notes dans la base de données par rapport a l'examen sélectionné précédemment par l'utilisateur dans modifier_note_DS
$req='select ma.libelle libMat,ma.idMat idMat, ex.idExam, mo.idPromo, mo.libelle libMod from matiere ma, examen ex, module mo where ex.idExam="'.$_POST['nb'].'" AND ex.idMat=ma.idMat AND ma.idMod=mo.idMod';// on prend le bon examen dans la bdd
   $res=execReq($req);
   echo'<table class="modnote">';// on construit notre tableau
   while($donnee=mysql_fetch_assoc($res))
   {
       $promo=$donnee['idPromo'];
            echo'<th id="mod">'.$donnee['libMod'].'</th><tr><td colspan=6>'.$donnee['libMat'].'</td></tr>';
            echo'<tr><td>Nom de l\'examen</td><td>Nom de l\'étudiant</td><td>Prénom de l\'étudiant</td><td>Note</td><td>Absence</td><td id="justification">Justifié</td></tr>';
       
        $req2='SELECT pa.note note, u.idUtil idUtil, u.nom nom, u.prenom prenom, ex.libelle libExam FROM examen ex,participe pa, eleve el, utilisateur u WHERE ex.idExam="'.$donnee['idExam'].'" AND ex.idExam=pa.idExam AND pa.numEtudiant=el.numEtudiant AND el.idUtil=u.idUtil';
        $res2=execReq($req2);
        while($note=mysql_fetch_assoc($res2))//pour tous les élèves concernés on fais une ligne
        {
            if ($note['idUtil']==$_SESSION['idUtil']){// s'il s'agit de la ligne de l'élève connecté elle s'affiche en rouge
                echo'<tr id="perso">';
            }
            else{
                echo'<tr>';
                }
                echo'<td>'.$note['libExam'].'</td><td>'.$note['nom'].'</td><td>'.$note['prenom'].'</td><td><input type="text" name="note_'.$note['idUtil'].'" value="'.$note['note'].'" /></td><td><input type="checkbox"  name="abs_'.$note['idUtil'].'"/></td><td><input type="checkbox" name="justifier_'.$note['idUtil'].'"/></td></tr>';
               
             
        }
       
   }
   echo'</table><input type="button" onClick="eleve_note('.$promo.');" value="ajouter un elève"/>';
   echo'</table><input type="submit" value="Modifier"/>';
deconnect($cnx); 
?>
