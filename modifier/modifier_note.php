<?php
include'../fonctions/fonctions.php';
session_start();
$cnx=connect();
mysql_query("SET NAMES UTF8");

$req='select ma.libelle libMat,ma.idMat idMat, mo.libelle libMod from matiere ma, module mo where ma.idMat="'.$_POST['nb'].'" AND ma.idMod=mo.idMod';// on prend le bon examen dans la bdd
    $res=execReq($req);
    echo'<table>';// on construit notre tableau
   while($donnee=mysql_fetch_assoc($res))//a modifier afin que le nom de l'exam n'apparaissent qu'une seule fois en haut
   {
            echo'<th>'.$donnee['libMod'].'</th><tr><td colspan=6>'.$donnee['libMat'].'</td></tr>';
            echo'<tr><td>Type d\'examen</td><td>Nom</td><td>Prénom</td><td>Note</td><td>Absence</td><td id="justification">Justifié</td></tr>';
       
        $req2='SELECT pa.note note, u.idUtil idUtil, u.nom nom, u.prenom prenom, ex.libelle libExam FROM examen ex,participe pa, eleve el, utilisateur u WHERE ex.idMat="'.$donnee['idMat'].'" AND ex.idExam=pa.idExam AND pa.numEtudiant=el.numEtudiant AND el.idUtil=u.idUtil';
        $res2=execReq($req2);
        while($note=mysql_fetch_assoc($res2))
        {
            if ($note['idUtil']==$_SESSION['idUtil']){
                echo'<tr id="perso">';
            }
            else{
                echo'<tr>';
                }
                echo'<td>'.$note['libExam'].'</td><td>'.$note['nom'].'</td><td>'.$note['prenom'].'</td><td><input type="text" name="note_'.$note['idUtil'].'" value="'.$note['note'].'" /></td><td><input type="checkbox"  name="abs_'.$note['idUtil'].'"/></td><td><input type="checkbox" name="justifier_'.$note['idUtil'].'"/></td></tr>';
               
             
        }
       
   }
   echo'</table><input type="submit" value="Modifier"/>';
deconnect($cnx); 
?>