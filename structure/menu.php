<!-- 
Le menu est une liste toute simple sur laquelle chaque lien est réalisé à l'aide d'un onClick
Chaque class détermine l'affichage des listes :
eleve : s'affiche pour les élèves professeurs et administrateurs;
prof : s'affiche pour les professeurs et administrateurs;
prof : s'affiche pour les professeurs seulement;
admin : s'affiche pour les élèves administrateurs;

-->
<ul id="menu">
    <li onclick="JavaScript:document.location='index.php?page=accueil';">
        Accueil
    </li>
    <li class="eleve">
       Module
       <ul class="niveau2">
         <li class="eleve"    onclick="JavaScript:document.location='index.php?page=module';">Afficher les modules</li>
        <li class="admin" onclick="JavaScript:document.location='index.php?page=gestion_module';">Gérer les modules</li>
         <li class="admin" onclick="JavaScript:document.location='index.php?page=gestion_matière';">Gérer les matières</li>
       </ul>
    </li>
    <li class="eleve" >
        Promo
        <ul class="niveau2">
            <li onclick="JavaScript:document.location='index.php?page=promo1';">CPI1</li>
            <li onclick="JavaScript:document.location='index.php?page=promo2';">CPI2</li>
        </ul>
    </li>
    <li class="eleve" onclick="JavaScript:document.location='index.php?page=professeur';">
        Professeurs
    </li>
    <li class="admin" >
        Gestions <br/> des utilisateurs
        <ul class="niveau2">
            <li onclick="JavaScript:document.location='index.php?page=ajout_prof_eleve';">ajouter utilisateurs</li>
            <li onclick="JavaScript:document.location='index.php?page=delete_prof_eleve';">supprimer utilisateurs</li>
            <li onclick="JavaScript:document.location='index.php?page=associer_matiere_prof';">Associer une matière à un professeur</li>
        </ul>
    </li>
    <li class="prof">
        Gestions des notes
       <ul class="niveau2">
           <li class="admin" onclick="JavaScript:document.location='index.php?page=examen';">
                 Ajouter un examen
           </li>
           <li id="prof2" onclick="JavaScript:document.location='index.php?page=ajout_note';" >
            Ajouter des notes
           </li>
       </ul>
    </li>
    <li class ="eleve" onclick="JavaScript:document.location='index.php?page=export'">
        exporter
    </li>
    <li  class="eleve" id="co" onclick="JavaScript:document.location='connect/logout.php';" >
        <STYLE type="text/css">
            #co {font-style: italic; font-size:large; background-color: #eeeef1;}
            #co:hover {color:red; background-color: #d8d8db; font-size:large;}
        </style>
            Se déconnecter
    </li>

</ul>
 