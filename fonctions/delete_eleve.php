<?php
include '../fonctions/fonctions.php';
?>
<label>Choisir l'élève</label>
                    <select>
                        <option></option>
                        <?php
                            $cnx=connect();
                            $req='select * from utilisateur u,eleve e  where u.idUtil=e.idUtil and e.idPromo='.$_POST['idPromo'].'';
                            $res=execReq($req);
                            while($eleve=mysql_fetch_assoc($res))
                            {
                             echo'<option  name="eleve" value="'.$eleve['idUtil'].'">'.$eleve['nom'].' '.$eleve['prenom'].'</option>';
                            }
                            deconnect($cnx);
                         ?>
                    </select> 
