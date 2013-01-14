<?php
session_start();
session_destroy();//on deco de la session
echo'<SCRIPT LANGUAGE="JavaScript">
     document.location.href="../index.php?page=logout" 
</SCRIPT>';

?>
