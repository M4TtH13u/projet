
<label>Matière :</label>
              <select name="delete">
                <option></option>
                <?php     
                include'../fonctions/fonctions.php';// menu déroulant pour la matière
                    $cnx=connect();
                    mysql_query("SET NAMES UTF8");
                    $req='select * from matiere where idMod="'.$_POST['idMod'].'"';
                    $res=execReq($req);
                    while($matiere=mysql_fetch_assoc($res)){
                        echo '<option name="delete" value="'.$matiere['idMat'].'">'.$matiere['libelle'].'</option>';
                    }      
                    deconnect($cnx); 
                ?>
            </select>
