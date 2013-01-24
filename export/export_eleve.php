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

$requete = "SELECT u.nom nom, u.prenom prenom, pa.note note, ex.libelle libelle FROM utilisateur u,examen ex , eleve el , participe pa where u.idUtil = '".$_SESSION['transitoire']."' and el.idUtil='".$_SESSION['transitoire']."' and el.numEtudiant = pa.numEtudiant and pa.idExam = ex.idExam";
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
             $outputCsv = ' nom ; prenom ';
             $outputCsv =$outputCsv."\n";
             $outputCsv = $outputCsv.$Row['nom'].';'.$Row['prenom'];
             $outputCsv =$outputCsv."\n";
             $outputCsv =$outputCsv."\n";
        }

        // On parcours $Row et on ajout chaque valeur à cette ligne
        $outputCsv = $outputCsv.' Nom de l\'examen ; Note obtenue ';
         $outputCsv =$outputCsv."\n";
         if ($Row['note']=(-1)) 
         {
             $Row['note']="ABS";
         }
        $outputCsv=$outputCsv.$Row['libelle'].';'.$Row['note'];

      

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

