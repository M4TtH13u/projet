<?php
include'../fonctions/fonctions.php';
session_start();
$cnx=connect();
mysql_query("SET NAMES UTF8");

$req='select ma.libelle libMat,ma.idMat idMat, mo.libelle libMod from matiere ma, module mo where ma.idMat="'.$_POST['nb'].'" AND ma.idMod=mo.idMod';
    $res=execReq($req);
    echo'<table class="modnote">';
   while($donnee=mysql_fetch_assoc($res))//a modifier afin que le nom de l'exam n'apparaissent qu'une seule fois en haut
   {
            echo'<th>'.$donnee['libMod'].'</th><tr><td colspan=4>'.$donnee['libMat'].'</td></tr>';
            echo'<tr><td>Nom de l\'examen</td><td>Nom de l\'étudiant</td><td>Prénom de l\'étudiant</td><td>Note</td></tr>';
        $moyenne=0;
        $participant=0;
        $req2='SELECT pa.note note, u.idUtil idUtil, u.nom nom, u.prenom prenom, ex.libelle libExam FROM examen ex,participe pa, eleve el, utilisateur u WHERE ex.idMat="'.$donnee['idMat'].'" AND ex.idExam=pa.idExam AND pa.numEtudiant=el.numEtudiant AND el.idUtil=u.idUtil';
        $res2=execReq($req2);
        while($note=mysql_fetch_assoc($res2))
        {
            if (($note['note']>=(0))&&($note['note']<=20))
                {
                $moyenne=$moyenne+$note['note'];
                $participant++;
                }
                else
                {
                    $note['note']='abs';
                }
            
            if ($note['idUtil']==$_SESSION['idUtil']){
                echo'<tr id="perso"><td>'.$note['libExam'].'</td><td>'.$note['nom'].'</td><td>'.$note['prenom'].'</td><td>'.$note['note'].'</td></tr>';
               
            }
            else{
                echo'<tr><td>'.$note['libExam'].'</td><td>'.$note['nom'].'</td><td>'.$note['prenom'].'</td><td>'.$note['note'].'</td></tr>';
                
                }
                
        }
        if($participant==0)//eviter la division par zéro
        {
            $participant=1;
        }
        echo '<tr><td colspan=4>Total : '.$moyenne/$participant.'</td></tr>';
   }
   echo'</table>';
deconnect($cnx); 
?>