<?php
include'include/debut.php';
//include'include/fin.php';
include'include/fonctions.php';
?>
<form id="form" action="#" method="POST">
    <?php
    if ($_SESSION['idRole']>=3){
            if ($_SESSION['idRole']==4){
                echo '<input type="radio" name="choixUtil">Professeur</input>';
                echo '<input type="radio" name="choixUtil">Administrateur</input>';
            }
        echo '<input type="radio" name="choixUtil">Eleve</input></br>';
        echo '<input type="text">Nom :</input></br>';
        echo '<input type="text">Prénom :</input></br>';
        $cnx=connect();
        mysql_query("SET NAMES UTF8");
        $req='select * from promo';
        $res=execReq($req);
        while($promo=mysql_fetch_assoc($res)){
            echo '<SELECT name="promo">'.$promo['idPromo'].'</SELECT>';
        }      
        deconnect($cnx); 
    }
    ?>
 
</form>
    


 <?php   
 include'include/fin.php';   
 ?>

