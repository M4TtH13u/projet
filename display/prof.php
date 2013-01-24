<?php           //afficher le tableau des professeurs

$cnx=connect();
		mysql_query("SET NAMES UTF8");
		$req='select * from utilisateur where idRole="3"'; //on choppe les modules
                $res=execReq($req);
                echo'<table>';
                echo'<tr><td>Nom</td><td>Prenom</td></tr>'; 
		while($nom=mysql_fetch_assoc($res)){
                    echo'<tr><td>'.$nom['nom'].'</td><td>'. $nom['prenom'].'</td></tr>';
                }
                echo'</table>';
		deconnect($cnx);
?>
