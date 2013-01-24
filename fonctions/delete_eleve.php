<?php           //menu déroulant de la liste des élèves pouvant être supprimer (inclu dans delete_prof_eleve)
include '../fonctions/fonctions.php';
?>
<label>Choisir l'élève</label>
                    <select name="eleve">
                        <option></option>
                        <?php
                            $cnx=connect();//on selectionne les elève de la promo choisi dans delete_prof_eleve
                            $req='select * from utilisateur u,eleve e  where u.idUtil=e.idUtil and e.idPromo='.$_POST['idPromo'].'';
                            $res=execReq($req);
                            while($eleve=mysql_fetch_assoc($res))
                            {
                             echo'<option   value="'.$eleve['idUtil'].'">'.$eleve['nom'].' '.$eleve['prenom'].'</option>';
                            }
                            deconnect($cnx);
                         ?>
                    </select> 
