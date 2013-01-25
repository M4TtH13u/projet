

                <?php        
                include '../fonctions/fonctions.php';
                    $cnx=connect();
                    mysql_query("SET NAMES UTF8");
                    $req='select * from matiere where idMod="'.$_POST['idMod'].'"';
                    $res=execReq($req);
                    if (mysql_num_rows($res)==0)
                    {
                       echo' Aucune matière n\'est libre dans ce module';
                    }
                    else
                    {?>
                        <label>Module :</label>
              <select name="associer_mat">
                <option></option>
                        <?php
                        
                    while($mat=mysql_fetch_assoc($res)){
                        echo '<option name="delete" value="'.$mat['idMat'].'">'.$mat['libelle'].'</option>';
                    }      
                    echo' </select>';
                    }
                    deconnect($cnx); 
                ?>
           
