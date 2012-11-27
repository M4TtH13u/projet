<?php
include 'debut.php';
session_destroy();
echo'<SCRIPT LANGUAGE="JavaScript">
     document.location.href="../index.php" 
</SCRIPT>';
include 'fin.php';
?>
