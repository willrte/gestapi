# SANOFI-C-API
 
[![Build Status](https://img.shields.io/badge/Etat-Fonctionnel-brightgreen.svg?style=flat)](https://github.com/DRAPPI17Qu/SANOFI-C-API/)
[![Build Status](https://img.shields.io/badge/size-12,7Mo-blue.svg )](https://github.com/DRAPPI17Qu/SANOFI-C-API/)

API Sanofi Groupe C dans le cadre d'un projet professionnel encadré au sein du campus Notre Dame du Roc

# Parties 

- [Matériel](#Matériel)

- [Utilisation](#Utilisation)

- [Informations complémentaires](#Informations)

- [Routes](#Routes)

- [Sources de Code](#source-codes)





# Matériel

Cette api requiert :

- Connexion à la [BDD](https://fr.wikipedia.org/wiki/Base_de_donn%C3%A9es)
- Informations de connexion selon le statut (fournis par la société)


# Utilisation

Insertion d'une [route](###Routes) dans l'url suivie de données multiples. 
Cette API renvoie des informations exploitables par un autre language sous forme JSON. 
Ces informations servent à la bonne exécution des application associées.


# Informations

Cette Api peut être utilisée par des application ayant été conçues pour ou par la société Sanofi à des fins professionelles. Son utilisation est réglementée. Des poursuites peuvent être engagées contre les personnes qui vont à l'encontre de ce principe.


# Routes

Liste de toutes les routes actuellement utilisables sur cette version de l'API


- [Gestion de connexion](#gestion-de-connexion)

- [Gestion des visites](#gestion-des-visites)

- [Gestion du compte Responsable de secteur](#gestion-du-compte-responsable-de-secteur)

- [Gestion de médicaments](#gestion-de-médicaments)

- [Gestion du compte délégué régional](#gestion-du-compte-délégué-régional)

- [Gestion des objectifs commerciaux](#gestion-des-objectifs-commerciaux)

- [Réaliser un suivis pour un visiteur](#réaliser-un-suivis-pour-un-visiteur)

- [Gestion des frais d'activité](#gestion-des-frais-dactivité)

## Gestion de connexion 
 
vérification de la connexion (retourne booleen : faux = non connectable, vrai = connectable)
 - /connexion/{username}/{password}
 
Obtention du niveau de droit + poste de l'utilisateur 
 - /get/right/{username}/{password}
 
 Retourne les informations de l'utilisateur
 - /get/user/{username}/{password}
 
 
## Gestion des visites 
 
Retourne toutes les visistes
- /get/visit/all


## Gestion de médicaments 
 
Liste de tous les médicaments 
- /get/drug/family/all
 
Liste de tous les medicaments d'une famille selon l'id de la famille
- /get/drug/{idFamily}

 
## Gestion des Employés 

Retourne les informations d'un employé selon son id
- /get/employee/{idEmployee}

Retourne tous les employés
- /get/list/employee

Retourne les infos de la mission en cours d'un employé selont l'id 
- /get/employee/{idEmployee}/mission

Retourne la liste des employés dans un région selon l'id de la région
- /get/list/employee/region/{idRegion}


## Gestion des visites 

Retourne tous les visiteurs médicaux
- /get/list/visiteursMed

Retourne le nombre de visites par jour selon une date
- /get/visit/{date}

Retourne le nombre de visites d'une région selon l'id de la région 
- /get/visit/region/{idRegion}





## Gestion des frais d'activité 

Retourne tous les frais triés par nom
- /get/costs/all

 
 

# Source Codes

Erreurs : 
- [StackOverflow](https://stackoverflow.com/)

Code android : 
- [Documentation Kotlin](https://kotlinlang.org/docs/reference/)
- [Documentation Android](https://developer.android.com/docs/)
- [Android Studio Download](https://developer.android.com/studio/)
- [Documentation Android Studio](https://developer.android.com/studio/intro/)

Code PHP : 
- [Documentation RedBean](https://redbeanphp.com/index.php)
- [Documentation Slim](https://www.slimframework.com/docs/)
- [Documentation Composer](https://getcomposer.org/doc/)
- [PhpStorm Download](https://www.jetbrains.com/phpstorm/download/download-thanks.html)
- [Documentation PhpStorm](https://www.jetbrains.com/phpstorm/documentation/)

Code C# : 
- [Guide de programmation C#](https://docs.microsoft.com/fr-fr/dotnet/csharp/programming-guide/)
- [Visual Studio Download](https://visualstudio.microsoft.com/fr/downloads/)
- [Documentation Visual Studio](https://docs.microsoft.com/fr-fr/visualstudio/?view=vs-2017)
- [Newton JS](https://codepen.io/Emub/pen/BFtwl)



