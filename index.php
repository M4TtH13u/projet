<?php
include'include/debut.php';
if (empty($_SESSION['idUtil']))// si l'utilisateur est pas connecté
{
?>
<form id="cnx" action="include/login.php" method="POST">
<label>Login : </label><input type="text" name="pseudo"/><br/>
<label>Mot de passe : </label><input type="password" name="mdp"/><br/>
<input type="submit" Value="Se connecter"/>
</form>
<?php
}
else // sinon on affiche son nom et prénom
{
   echo'<div id="cnx">'.$_SESSION['nom'].' '.$_SESSION['prenom'].'<br/> <a href="include/logout.php">Se déconnecter</a></div>';

}?>
<div id="menu">MENU <!-- Pour afficher le menu -->

</div>
<div id="center"><!-- Pour afficher le contenu de la page -->
    <?php 
        if (isset($_SESSION['idRole']) && ($_SESSION['idRole']>1))
        {
            echo'Gerer les droits suivant le Role';
        }
        else
        {
        echo'Ah ah tu n\'as pas le droit d\'être ici';   
        }
        
    ?>

</div>
<?php 
include 'include/fin.php';