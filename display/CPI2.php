<?php           //affiche le tableau de la promo
$cnx=connect();
mysql_query("SET NAMES UTF8");
$req='select u.nom nom,u.prenom prenom, u.idUtil idUtil, e.numEtudiant numEtudiant from utilisateur u, eleve e where e.idPromo="2" AND u.idUtil=e.idUtil';
   $res=execReq($req);
   echo'<table>';
   echo'<tr><td>Nom</td><td>Prenom</td><td>Numéro d\'étudiant</td><td>Moyenne</td></tr>';
   while($donnee=mysql_fetch_assoc($res))
   {
        $moyenne=0;
        $coef=0;
        $req2='select pa.note, ty.coef from participe pa, examen ex, typexam ty where pa.numEtudiant='.$donnee['numEtudiant'].' AND ex.idExam=pa.idExam AND ex.idType=ty.idType';
        $res2=execReq($req2);
        while($note=mysql_fetch_assoc($res2))
        {
            $moyenne=$moyenne+($note['note']*$note['coef']);
            $coef=$coef+$note['coef'];
        }
        if ($coef==0){$coef=1;};//division par zéro
        $moyenne=$moyenne/$coef;
        if ($donnee['idUtil']==$_SESSION['idUtil']){
                echo'<tr id="perso"><td>'.$donnee['nom'].'</td><td>'.$donnee['prenom'].'</td><td>'.$donnee['numEtudiant'].'</td><td>'.$moyenne.'</td></tr>';
            }
            else{
                echo'<tr><td>'.$donnee['nom'].'</td><td>'.$donnee['prenom'].'</td><td>'.$donnee['numEtudiant'].'</td><td>'.$moyenne.'</td></tr>';
            }
   }
   echo'</table>';
deconnect($cnx); 
?>
