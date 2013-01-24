<?php
if (securite(2))
{
    if ((!empty($_POST['choix']))&&((($_POST['choix']=="matiere")&&(!empty($_POST['mat'])))||(($_POST['choix']=="promo")&&(!empty($_POST['promo'])))||(($_POST['choix']=="eleve")&&(!empty($_POST['eleve'])))))
    {
        if ($_POST['choix']=="matiere")
        {
            $_SESSION['transitoire']=$_POST['mat'];
           echo'<SCRIPT LANGUAGE="JavaScript">
     document.location.href="export/export_mat.php" 
</SCRIPT>';
        }
        elseif ($_POST['choix']=="promo")
        {
            $_SESSION['transitoire']=$_POST['promo'];
           echo'<SCRIPT LANGUAGE="JavaScript">
     document.location.href="export/export_promo.php" 
</SCRIPT>';
        }
        elseif ($_POST['choix']=="eleve")
        {
           $_SESSION['transitoire']=$_POST['eleve'];
           echo'<SCRIPT LANGUAGE="JavaScript">
     document.location.href="export/export_eleve.php" 
</SCRIPT>';
        }
    }
    else
    {
    ?>
        <form action="#" method="POST">
           <fieldset id="exportation">
           <legend> Exportation </legend>


         <p><font size=4><b>Souhaitez-vous exporter :</b></font></p>
        <input type="radio" name="choix" value="matiere" onChange="export_module();">une matière </input>
        <input type="radio" name="choix"   value="promo" onChange="export_promo0();">une promo </input>
        <input type="radio" name="choix" value="eleve" onChange="export_promo1();">un(e) élève </input>

        <div id="choix_export"></div>
        <div id="choix2_export"></div>
        </fieldset>
        </form>
    <?php
    }
}
else
{
     echo'<SCRIPT LANGUAGE="JavaScript">
     document.location.href="../index.php" 
</SCRIPT>';
}
?>
