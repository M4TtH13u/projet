<?php           //afficher le tableau des professeurs

$cnx=connect();
		mysql_query("SET NAMES UTF8");
		$req='select * from utilisateur u,prof p where idRole="3" and p.idUtil=u.idUtil' ; //on choppe les modules
                $res=execReq($req);
                echo'<table>';
                echo'<tr><td>Nom</td><td>Prenom</td><td>Telephone de bureau</td><td>Numero de bureau</td></tr>'; 
		while($nom=mysql_fetch_assoc($res)){
                    echo'<tr><td>'.$nom['nom'].'</td><td>'. $nom['prenom'].'</td><td>'.$nom['telBureau'].'</td><td>'.$nom['numBureau'].'</td></tr>';
                }
                echo'</table>';
		deconnect($cnx);
?>
