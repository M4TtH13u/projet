<?php
include'include/debut.php';
?>
<form id="" action="login.php" method="POST">
<label>Login : </label><input type="text" name="pseudo"/><br/>
<label>Mot de passe : </label><input type="password" name="mdp"/><br/>
<input type="submit" Value="Se connecter"/>
</form>
<?php

include 'include/fin.php';