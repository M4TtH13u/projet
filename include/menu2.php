<?php
include'fonctions.php';


?>
<ul id="menu">
    <li>
        Accueil
    </li>
    <li class="eleve">
       Module
       <ul class="niveau2">
		<?php
		$cnx=connect();
		mysql_query("SET NAMES UTF8");
                if (!empty($_SESSION['idPromo']))
                {
		$req='select * from module where idPromo ="'.$_SESSION['idPromo'].'" '; //on choppe les modules
                }
                else 
                {
                $req='select * from module'; //on choppe les modules      
                }
		$res=execReq($req);
		while($nom=mysql_fetch_assoc($res)){
			echo '<li>'.$nom['libelle'];
                ?>
                <ul class = "niveau3">
                    <?php
                    $req0 = 'select * from matiere ma, module mo where mo.idMod = ma.idMod';
                    $res0 = execReq($req0);
                    while($nom0 = mysql_fetch_assoc($res0)){
                            echo '<li>'.$nom0['libelle'].'</li>';
                    }
                ?>
                </ul>
                <?php
                echo '</li>';
			}
		deconnect($cnx);
		?>
	</ul>
    </li>
    <li class="eleve">
        Promo
		<ul class="niveau2">
		<?php
		$cnx=connect();
		mysql_query("SET NAMES UTF8");
		$req='select * from promo'; //on choppe les modules
                $res=execReq($req);
		while($nom=mysql_fetch_assoc($res)){
			echo '<li value="'.$nom['idPromo'].'">'.$nom['libelle'].'</li>';
                }
		deconnect($cnx);
		?>
		</ul>
    </li>
</ul>