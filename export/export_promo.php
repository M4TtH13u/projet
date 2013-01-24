<?php
include'../fonctions/fonctions.php';
session_start();
if (securite(2))
{
 $cnx=connect();


// la variable qui va contenir les données CSV
$outputCsv = '';

// Nom du fichier final
$fileName = time().'.csv';
$outputCsv = "";
$requete = "SELECT u.nom nom, u.prenom prenom , p.libelle libelle FROM eleve el, utilisateur u, promo p where el.idPromo='".$_SESSION['transitoire']."' and el.idUtil=u.idUtil and el.idPromo = p.idPromo";
$sql = mysql_query($requete);
if(mysql_num_rows($sql) > 0)
{
    $i = 0;

    while($Row = mysql_fetch_assoc($sql))
    {
        $i++;

        // Si c'est la 1er boucle, on affiche le nom des champs pour avoir un titre pour chaque colonne
        if($i == 1)
        {
            $outputCsv = $Row['libelle'];
            $outputCsv .= "\n";
            $outputCsv = $outputCsv.'Nom ; Prenom';
            $outputCsv .= "\n";
        }

        // On parcours $Row et on ajout chaque valeur à cette ligne
        
            $outputCsv =$outputCsv.$Row['nom'].';'.$Row['prenom'];

        

        // Saut de ligne
        $outputCsv .= "\n";

    }
}
else
    exit('Aucune donnée à enregistrer.');
?>
<?php
// Entêtes (headers) PHP qui vont bien pour la création d'un fichier Excel CSV
header("Content-disposition: attachment; filename=".$fileName);
header("Content-Type: application/force-download");
header("Content-Transfer-Encoding: application/vnd.ms-excel\n");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0, public");
header("Expires: 0");

echo $outputCsv;
exit();

}
else
{
     echo'<SCRIPT LANGUAGE="JavaScript">
     document.location.href="../index.php" 
</SCRIPT>';
}
?>

