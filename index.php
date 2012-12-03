<?php
include'include/debut.php';
include'./include/menu2.php';
$pageOK = array(
		'accueil' =>'accueil.php',
                'annonce' => 'annonce.php',                
                'recherc'=>'recherche.php',
		'pro'=>'professionnel.php'
		);
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


<div id="center"><!-- Pour afficher le contenu de la page -->
    <?php 
        if (isset($_SESSION['idRole']) && ($_SESSION['idRole']>=2))
        {
            
                echo'<script type="text/javascript"> admin();</script>';
               
   // Page par défaut quant elle n'existe pas dans le tableau
            }
	 
        
        else
        {
        echo'Ah ah tu n\'as pas le droit d\'être ici';   
        }
        
    ?>

</div>

<?php 
include 'include/fin.php';