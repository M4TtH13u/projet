<?php
if (securite(2))
{
?>
    <form id="form_module" name="form1" action="#" method="POST">
        <fieldset>
            <label>Choix du module :</label>
                 <select OnChange="afficher_matiere2()" id="module">
                    <option></option>
                        <?php
                            $cnx=connect();
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
            <div id="affmat">
            </div>
             <div id="affds">
            </div>
            <div id="affnote">
            </div>
    </form>
            
<?php }
else
{
     echo'<SCRIPT LANGUAGE="JavaScript">
     document.location.href="index.php" 
</SCRIPT>';
}

?>