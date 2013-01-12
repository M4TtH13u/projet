<?php

if (!empty($_POST['type']) && !empty($_POST['prof'])) 
    {
    $cnx=connect();
    $req='UPDATE matiere m, prof p SET m.idProf=null WHERE m.idProf=p.idProf AND p.idUtil="'.$_POST['prof'].'"';
    $res=execReq($req);
    $req='DELETE FROM prof WHERE idUtil="'.$_POST['prof'].'"';
    $res=execReq($req);
    $req='DELETE FROM utilisateur WHERE idUtil="'.$_POST['prof'].'"';
    $res=execReq($req);
    deconnect($cnx);    
}

if (!empty($_POST['type']) && !empty($_POST['eleve']))
{
    $cnx=connect();
    $req='DELETE FROM utilisateur WHERE idUtil"'.$_POST['eleve'].'"';
    $res=execReq($req);
    $req='DELETE FROM participe p, eleve e WHERE idUtil="'.$_POST['eleve'].'" AND p.numEtudiant=e.numEtudiant';
    $res=execReq($req);
    deconnect($cnx);
}

?>
