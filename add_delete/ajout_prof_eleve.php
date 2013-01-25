<?php
if (securite(4))
{
            //condition de déclenchement de modification de la BDD (tous les champs remplis)
    if ((!empty($_POST['choixUtil']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['login']) && !empty($_POST['pass']) && !empty($_POST['repass']))&&($_POST['pass']==$_POST['repass'])&&( ($_POST['choixUtil']=="4") || (($_POST['choixUtil']=="2") && !empty($_POST['promo'])) || (($_POST['choixUtil']=="3"))))
{ // selection par type d'utilisateur à ajouter
    if ($_POST['choixUtil']=="4")
    {
        $cnx=connect();//table utilisateur pour l'admin
        mysql_query("SET NAMES UTF8");
        $req='INSERT INTO utilisateur VALUE("","'.$_POST['login'].'","'.md5($_POST['pass']).'","'.$_POST['nom'].'","'.$_POST['prenom'].'",4)';
        $res=execReq($req);
        deconnect($cnx); 
        echo'L\administrateur a été ajouté';
    }
    elseif ($_POST['choixUtil']=="3") 
    {
        $cnx=connect();//table utilisateur, prof pour les professeurs
        mysql_query("SET NAMES UTF8");
        $req='INSERT INTO utilisateur VALUE("","'.$_POST['login'].'","'.md5($_POST['pass']).'","'.$_POST['nom'].'","'.$_POST['prenom'].'",3)';
        $res=execReq($req);
        $res = execReq('select idUtil from utilisateur where login="'.$_POST['login'].'" and pass="'.md5($_POST['pass']).'"');
        while($util = mysql_fetch_array($res))
        {
        $req2='INSERT INTO prof VALUE("","'.$_POST['numBureau'].'","'.$_POST['tel'].'","'.$util['idUtil'].'")';
        $res2=execReq($req2);
        }
        deconnect($cnx);
        echo'Le professeur a été ajouté';
    }
    elseif ($_POST['choixUtil']=="2")
    {
        $cnx=connect();//table utilisateur, eleve pour l'élève
        mysql_query("SET NAMES UTF8");
        $req='INSERT INTO utilisateur VALUE("","'.$_POST['login'].'","'.md5($_POST['pass']).'","'.$_POST['nom'].'","'.$_POST['prenom'].'",2)';
        $res=execReq($req);
        $res = execReq('select idUtil from utilisateur where login="'.$_POST['login'].'" and pass="'.md5($_POST['pass']).'"');
        while($util = mysql_fetch_array($res))
        {
        $req2='INSERT INTO eleve VALUE("",0,"'.$_POST['promo'].'","'.$util['idUtil'].'")';
        $res2=execReq($req2);
        }
        deconnect($cnx);
        echo'L\'élève a été ajouté';
    }
   
}
?>
<form id="form_prof_eleve" method="POST">   <!--Création d'un formulaire-->
  <fieldset>
      <legend>Inscription :</legend>
      <!--choix du rôle de l'utilisateur qui déclenche l'affichage des champs correspondants-->
        <label>Type :</label><input type="radio" name="choixUtil" onClick="prof();" value="4"/> Administrateur
        <input type="radio" name="choixUtil" id="prof1" onClick="prof();" value="3"/>Professeur
        <input type="radio" name="choixUtil" id="eleve1" onClick="prof();" value="2"/>Elève<br/>
        <label>Nom :</label><input type="text" name="nom"/><br/>
        <label>Prénom : </label><input type="text" name="prenom"/><br/>
        <label>Identifiant : </label><input type="text" name="login"/><br/>
        <label>Mot de passe : </label><input type="password" name="pass"/><br/>
        <label>Confirmation mot de passe : </label><input type="password" name="repass"/><br/>
          <span id="ajout_promo">
              <label>Promo :</label>
              <select name="promo">
                  <option></option>
                  <?php         // menu déroulant pour la promo
                      $cnx=connect();
                      mysql_query("SET NAMES UTF8");
                      $req='select * from promo';
                      $res=execReq($req);
                      while($promo=mysql_fetch_assoc($res)){
                          echo '<option name="promo" value="'.$promo['idPromo'].'">'.$promo['libelle'].'</option>';
                      }      
                      deconnect($cnx); 
                  ?>
              </select>
         </span>
          <span id="ajout_prof">
              <label>Tel :</label><input type="tel" name="tel"/><br/>
              <label>Numéro bureau :</label><input type="text" name="numBureau"/><br/>   
         </span>
      <br>
      <input type="submit"  value="Envoyer" />
      <input type="reset" value="Annuler" onClick="reinitialiser();"/>
  </fieldset>
</form>  
<?php }
else// si il n'a pas le droit on le redirige gentillement vers la page d'accueil
{
     echo'<SCRIPT LANGUAGE="JavaScript">
     document.location.href="index.php" 
</SCRIPT>';
}
?>