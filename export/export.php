<?php
include'../fonctions/fonctions.php';
 $cnx=connect();


// la variable qui va contenir les données CSV
$outputCsv = '';

// Nom du fichier final
$fileName = 'export-csv.csv';

$requete = "SELECT * FROM examen";
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
            foreach($Row as $clef => $valeur)
                $outputCsv .= trim($clef).';';

            $outputCsv = rtrim($outputCsv, ';');
            $outputCsv .= "\n";
        }

        // On parcours $Row et on ajout chaque valeur à cette ligne
        foreach($Row as $clef => $valeur)
            $outputCsv .= trim($valeur).';';

        // Suppression du ; qui traine à la fin
        $outputCsv = rtrim($outputCsv, ';');

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
?>