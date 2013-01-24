<?php
if (securite(2))
{
    if ((!empty($_POST['choix']))&&((($_POST['choix']=="matiere")&&(!empty($_POST['mat'])))||(($_POST['choix']=="promo")&&(!empty($_POST['promo'])))||(($_POST['choix']=="eleve")&&(!empty($_POST['eleve'])))))
    {
        if ($_POST['choix']=="matiere")
        {
            include 'export/export_mat';
        }
        elseif ($_POST['choix']=="promo")
        {
            include 'export/export_promo';
        }
        elseif ($_POST['choix']=="eleve")
        {
            include 'export/export_eleve';
        }
    }
    else
    {
    ?>
        <form action="#" method="POST">
           <fieldset id="exportation">
           <legend> Exportation </legend>


         <p>Voulez vous exporter par rapport à:</p>
        <label>une matiere</label><input type="radio" name="choix" value="matiere" onChange="export_module();"/><br/>
        <label>une promo</label><input type="radio" name="choix"   value="promo" onChange="export_promo0();"/><br/>
        <label>un(e) élève</label><input type="radio" name="choix" value="eleve" onChange="export_promo1();"/><br/>

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