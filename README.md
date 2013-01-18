Historique
==========

_Connexion à la BDD ok.
_Ce soir je finis la BDD, enfin j'essaye :) (thomas bon courage) <br/>
J'ai pas fini de changer l'index ya quelque truc qui marchent pas <br/> 
(le display ne remet pas les cases de la table normalement)  <br/>
Je fais le menu déroulant dès que j'ai la BDD complète. <br/>

29/11/12
==============================
tentative de correction du bug ==> rien donné;<br/>
création d'un menu avec des listes au lieu du xhtml mais probleme de css pas résolu (0h45 je vais me coucher la) <br/>

dans la table élève, c'est pas bon mais je sais, j'ai juste fait un copier coller de la table utilisateur mais apres il etait 12h45 <br/>
mais je sais pas trop comment m'y prendre pour remplir rapidement cette table sans tout faire manuellement.(thomas)<br/>

J'ai modif bdd pour les élèves grace a la page ajoutbdd.php, et j'ai exporté la bdd.<br/>
Mais j'ai du oublié des noms en cpi2 je les ai mis tous en cpi1 de base , donc faudra les modifs apres <br/>
mais j'avais pas la liste des élèves de notre promo donc bon (matth)<br/>


02/12/12
==============
Les formulaires de Ajout et Suppression de prof sont fait, il reste plus qu'à les mettre en application en supprimant les éléments dans la table<br/>

3/12/12 
=============
Va falloir commencer a commenter notre code et le mettre en forme

6/01/13 
=============
Va falloir s'activer un peu

07/01/13
=============
Il nous reste plusieurs choses à faire :
    -Suppression d'utilisateurs (2 - 3 petites truc a regler)
    -Modifier les promos et les faire sous forme de menu déroulant (afin de pouvoir ajouter des informations si l'utilisateur est un administrateur)
    -Dans la page associée aux résultats des matières, ajouter la moyenne coefficienté de chaque élève
    -De même pour le calcul de la moyenne générale coefficienté pour chaque matière
    -Afficher les professeurs en charge de chaque matière dans le menu de base
    -Créer un menu (similaire à "Promo") pour caractériser les professeurs en fonction de :
        .Nom
        .Prenom
        .Numéro de bureau
        .Téléphone de bureau
    -Créer une fonction permettant d'ajouter/supprimer une matière associée à un professeur. Utilisable uniquement par l'admin
Et plusieurs autres mais nous verrons cela plus tard.

11/01/13
=============
quelque bug : 
-supprimer un eleve par rapport à l'ajax
-abdel à disparu définitivement de la table utilisateur de la BDD (j'ai jamais changé le BDD.sql...)

17/01/13
=============
à corriger :
    Dans "Gestion des notes" :
        Dans "Ajouter un Examen" :
            -le bouton "Annuler" ne reinitialise pas toute la page et donc créé un petit problème car la promo reste prises en compte.
        Dans "Ajouter des notes" :
            la mise à jour des notes ne fonctionne pas.
            La modification a bien lieu mais sur tous les examen qui concerne l'élève en question.
            Absence et Justifié fonctionnent.
            Un autre problème survient lorsque l'on veut ajouter un étudiant qui est déjà dans l'examen en cours. Il faudrait rajouter une impossibilité de cocher une case d'un élève déjà présent.

17/01/13 (minuit)
=============
ajout_note mis a jour pour ne modifier les notes que d'un examen
On ne peut plus entrer deux fois le même élève (message d'erreur a modifier si nécéssaire dans ajouter_note.php ligne 39)
css ligne 22 à changer (pour le bouton tout selectionner et tout deselectionner)

Dans "Ajouter un Examen" :
            -le bouton "Annuler" ne reinitialise pas toute la page et donc créé un petit problème car la promo reste prises en compte.
IL N'Y A PAS QUE DANS EXAMEN!
    ex= dans module, changer le module quand un tableau est afficher n'efface pas le tableau,
        ajouter des notes pareil, etc...