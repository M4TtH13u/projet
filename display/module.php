<?php       //page d'affichage des modules

if (securite(2))
{
?>
    <form id="form_module" name="form1" action="#" method="POST">
        <fieldset>
            <label>Choix du module :</label><!--choix du module qui déclenche l'affichage des matieres-->
                 <select OnChange="afficher_matiere()" id="module">
                    <option></option>
                        <?php
                            $cnx=connect();//affichage des module selon la promo de l'utilisateur s'il est un élève
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
            <div id="affmat"><!-- div destinée à afficher la matière à selectionner -->
            </div>
            <div id="affnote"><!-- div destinée à afficher les notes et la moyenne de la matière -->
            </div>
            
<?php }
else// si il n'a pas le droit on le redirige gentillement vers la page d'accueil
{
     echo'<SCRIPT LANGUAGE="JavaScript">
     document.location.href="index.php" 
</SCRIPT>';
}

?>
