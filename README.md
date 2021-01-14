# Consignes

*Les données sur les maisons et leurs membres sont détaillées dans le fichier data/houses.md*

1. Créer un fichier src/data.php (ce fichier devra être inclu dans les autres pages PHP) ;
2. Créer une variable pour chaque membre de chaque maison. La variable doit contenir les informations : nom, surnom et rôle ;
3. Créer un tableau associatif pour chaque maison (`$stark`, `$lannister`...). Ces variables doivent contenir la description de la maison et la liste des membres créés au point précédent ;
4. Créer un tableau associatif `$houses` contenant les maisons ;
5. Sur la page d'accueil du jeu, inviter l'utilisateur à choisir une maison ;
6. Lorsque une maison est choisie par l'utilisateur, la description de la maison apparait ainsi que la liste des membres (nom + role). L'utilisateur peut revenir en arrière et donc annuler son choix.
7. Si l'utilisateur clique sur un membre il doit voir le détail. Il doit pouvoir revenir en arrière et donc annuler son choix ;
8. Inviter l'utilisateur à sélectionner un membre possédant un rôle Lord ou Lady (les membres avec le rôle Young ne sont pas sélectionnable) ;
9. Lorsqu'un membre est choisi. Félicitez l'utilisateur pour son choix en lui affichant les détails.