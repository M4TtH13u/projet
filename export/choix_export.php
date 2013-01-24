<?php
if (securite(4))
{
?>
<form action="#" method="POST">
    <fieldset>
   <legend> Exportation </legend>
 
    
 <p>Voulez vous exporter par rapport à:</p>
<label>une matiere</label><input type="radio" name="choix"  onChange="export_module();"/><br/>
<label>une promo</label><input type="radio" name="choix"   onChange="export_promo0();"/><br/>
<label>un(e) élève</label><input type="radio" name="choix" onChange="export_promo1();"/><br/>

<div id="choix_export"></div>
<div id="choix2_export"></div>
</fieldset>
</form>
<?php
}
else
{
     echo'<SCRIPT LANGUAGE="JavaScript">
     document.location.href="../index.php" 
</SCRIPT>';
}
?>