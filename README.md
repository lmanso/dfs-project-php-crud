# dfs-project-php-crud
## Sujet projet PHP niveau 2 "développement PHP"
Durée : 5 jours

----

## Contexte :
-----
Cette épreuve vise à évaluer votre capacité à développer un site en PHP . 
C’est une d'une évaluation sur une technologie en particulier, les choix de l'environnement de développement et des technologies associées ne sont donc pas libres. 
Aucun framework n’est autorisé. Outre son objectif d'évaluation, cette épreuve a vocation à venir enrichir votre portfolio personnel.


Durée de l'épreuve

Le travail finalisé devra être rendu avant vendredi 17h00, l'horodatage du dernier push faisant foi.




## Sujet
 ----
Aspect fonctionnel

Vous êtes freelance pour des projets web, vous avez un rdv client pour une création.

Voici le projet demandé par le client :
* Vous devez créer un site internet forum (type 9gag)
* Gestion d’articles qui ont obligatoirement un titre, du texte, une image/photo ou GIF
* Une page principale permettant de consulter les articles (système de filtre ou simplement par ordre de création/dates)
* Il est obligatoire de s’inscrire et se connecter pour poster des articles et les commenter.
* Seul le créateur de l’article a possibilité de le modifier ou le supprimer (ainsi qu’un admin ayant tous les droits)
Les informations doivent obligatoirement être sauvegarder car une recherche d’article doit pouvoir être effectué par mots clé ou dates

Critères d'évaluation

· qualité générale de la proposition
· respect de la thématique et pertinence des propositions fonctionnelles
· qualité de l'interface utilisateur



Fin d'épreuve anticipée

En cas de rendu des travaux avant le terme du délai imparti, vous mettrez à profit le temps restant à la préparation de votre dossier individuel de soutenance.

## Fonctionnement Ublog
----
* UBlog est un site avec articles de 143 caractères;
* Chaque article a une catégories, un auteur, une date et une image;
* Si l'utilisateur ne rentre pas d'image lors de la création d'un article celui-ci aura une image par défaut;
* Chaque utilisateur a un nom, un role et un mot de passse;
* Les administrateurs peuvent supprimer les articles ainsi que modifier et supprimer les utilisateurs;
* ATTENTION les administateurs ne peuvent pas ce supprimer entre eux, seul le gestionnaire de la DB le peux;
* Un utilisateur peut créer un article et voir son profil;
* La homepage est public, elle regroupe les catégories et les articles.

## Stack
----
* Utilisation d'un theme bootswatch;
* Utilisation de Fontawsome;
* Mysql;
* Php;
* Adminer.

## Usage
----
* Nom de la db : ublog;
* index sert de rooter;
* les fonctions sql sont dans db.php;
* Utilisation de layouts;
* Utilisation de controller.

## TODO
----
* Hacher les mots de passes et sécuriser l'envoie des requêtes;
* Ajouter des photos utilisateurs et améliorer les profils de manière génerale;
* Faire fonctionner le update des articles;
* Pouvoir trier par categories sur la homepage;
* Donner le droit a l'utilisateur de modifier ses articles.

## Problemes
----
* Les requetes SQL notamment l'update.

