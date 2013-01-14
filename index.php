<?php
include'structure/debut.php';
include'structure/menu.php';
if (empty($_SESSION['idUtil']))// si l'utilisateur est pas connecté
{
?>
<form id="cnx" action="connect/login.php" method="POST">
<label>Login : </label><input type="text" name="pseudo"/><br/>
<label>Mot de passe : </label><input type="password" name="mdp"/><br/>
<input type="submit" Value="Se connecter" />
</form>


<?php
}
else // sinon on affiche son nom et prénom
{
   echo'<div id="cnx" >'.$_SESSION['nom'].' '.$_SESSION['prenom'].'<br/> <a href="connect/logout.php">Se déconnecter</a></div>';
}?>
<div id="center"><!-- Pour afficher le contenu de la page -->
<?php 
        if (isset($_SESSION['idRole']))
        {
            echo'<script type="text/javascript"> admin('.$_SESSION['idRole'].');</script>';   
      $pageOK = array(
                'accueil' => 'structure/accueil.html',
                'ajout_prof_eleve' => 'add_delete/ajout_prof_eleve.php',
                'delete_prof_eleve' => 'add_delete/delete_prof_eleve.php',
                'ajout_DS' => 'add_delete/ajout_DS.php',
                'professeur' =>'display/prof.php',
                'promo1' =>'display/CPI1.php',
                'promo2' =>'display/CPI2.php',
                'examen' =>'add_delete/ajout_DS.php',
                'matiere' => 'display/matiere.php',
                'module' => 'display/module.php',
                'login' =>'connect/message_connexion.php',
                
                'test' => 'test.html'
				  );

  // On teste que le paramètre d'url existe et qu'il est bien autorisé
  // -----------------------------------------------------------------
             
 
        }
          
	 
        
        else
        {
        $pageOK = array(
                'accueil' => 'structure/accueil.html',
               'logout' =>'connect/message_deconnexion.php',
                
                
                'test' => 'test.html'
				  );
        }
        if ( (isset($_GET['page'])) && (isset($pageOK[$_GET['page']])) ) {
    include($pageOK[$_GET['page']]);   // Nous appelons le contenu central de la page
  }
  else {
    include('structure/accueil.html');   // Page par défaut quant elle n'existe pas dans le tableau
  }
    
        
    ?>

</div>

<?php 
include 'structure/fin.php';
