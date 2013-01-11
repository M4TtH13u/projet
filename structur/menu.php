<?php
include'fonctions/fonctions.php';


?>
<ul id="menu">
    <li onclick="JavaScript:document.location='index.php?page=accueil';">
        Accueil
    </li>
    <li class="eleve" onclick="JavaScript:document.location='index.php?page=module';">
       Module
       
    </li>
    <li class="eleve" >
        Promo
        <ul class="niveau2">
            <li onClick="JavaScript:document.location='index.php?page=promo1';">CPI1</li>
            <li onClick="JavaScript:document.location='index.php?page=promo2';">CPI2</li>
        </ul>
    </li>
     <li class="eleve" onclick="JavaScript:document.location='index.php?page=professeur';">
        Professeurs
    </li>
    <li class="admin" >
        Gérer les utilisateurs
        <ul class="niveau2">
                <li onclick="JavaScript:document.location='index.php?page=ajout_prof_eleve';">ajouter utilisateurs</li>
                <li onclick="JavaScript:document.location='index.php?page=delete_prof_eleve';">supprimer utilisateurs</li>
            </ul>
    </li>
    <li class="prof" onclick="JavaScript:document.location='index.php?page=examen';" >
        Ajouter un examen
    </li>
   
</ul>
 