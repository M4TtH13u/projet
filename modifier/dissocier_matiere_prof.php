
                <?php    
                include'../fonctions/fonctions.php';
                // menu déroulant pour la matiere
                    $cnx=connect();
                    mysql_query("SET NAMES UTF8");
                    $req='select * from matiere where idProf="'.$_POST['idProf'].'"';
                    $res=execReq($req);
                    if (mysql_num_rows($res)==0)
                    {
                       echo' Aucune matière est associé au professeur';
                    }
                    else
                    {?>
                        <label>Matiere :</label>
              <select name="dissocier_mat">
                <option></option>
                        <?php
                        
                    while($mat=mysql_fetch_assoc($res)){
                        echo '<option  value="'.$mat['idMat'].'">'.$mat['libelle'].'</option>';
                    }      
                    echo' </select>';
                    }
                         
                    deconnect($cnx); 
                ?>
            