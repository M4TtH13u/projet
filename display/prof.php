<?php

$cnx=connect();
		mysql_query("SET NAMES UTF8");
		$req='select * from utilisateur where idRole="3"'; //on choppe les modules
                $res=execReq($req);
		while($nom=mysql_fetch_assoc($res)){
                    echo $nom['nom'].' '. $nom['prenom'].'<br/>';
                }
		
?>
