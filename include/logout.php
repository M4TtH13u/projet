<?php
session_start();
session_destroy();
echo'<SCRIPT LANGUAGE="JavaScript">
     document.location.href="../index.php" 
</SCRIPT>';

?>
