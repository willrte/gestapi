# API GestAPI 

[![Build Status](https://img.shields.io/badge/Etat-Fonctionnel-brightgreen.svg?style=flat)](https://github.com/DRAPPI17Qu/SANOFI-C-API/)[![Build Status](https://img.shields.io/badge/Taille-39,2Ko-blue.svg )(https://github.com/jeulis/gestapi/)

API utilisée par l'application GestaSixt pour le CRUD dans le cas d'un projet personnel encadré scolaire par **RATELADE WILLIAM**

## Parties 

[Matériel](#Matériel)

[Routes](#Routes)

- [Véhicules](#VEHICULES)
- [Agences](#AGENCES)
- [Locations](#LOCATIONS)
- [Utilisateurs](#UTILISATEURS)

[Sources OpenSource](#Sources)





## Matériel
Cette api requiert la connexion à la base de données GESTASIXT_V7 fournie avec le code source du [projet github](<https://github.com/jeulis/gestapi>)

Pour le développement de cette API, j'ai utilisé les logiciels / programmes suivants :



| Logiciel / Programme | Utilité                                    |
| -------------------- | ------------------------------------------ |
| PHPStorm             | Développement de L'API                     |
| SQL                  | Language de la Base de données             |
| PHPMyAdmin           | Gestionnaire de Base de Données            |
| RedBean              | Framework de requêtes à la BDD             |
| SLIM                 | Template d'affichage des données renvoyées |




## Routes



Cette API est simple à utiliser, voici les différentes fonctionnalités et leurs utilisation par route :



#### VEHICULES

- renvoie tous les véhicules
  - **/vehicle/get/all**



- renvoie le véhicule qui correspond à l'id
  - **/vehicle/get/{idVehicle}**



- renvoie le nombre de véhicules
  - **/vehicle/count**



- renvoie le véhicule spécifique à la recherche

  - **/vehicle/get/{idColor}/{idCategory}/{idBrand}/{kilometers}**

    *(mettre un '0' aux champs non définis)*

    

- supprime un véhicule par l'id
  - **/vehicle/delete/{idVehicle}**



- ajoute un nouveau véhicule
  - **/vehicle/add/{idBrand}/{model}/{idCategory}/{idColor}/{idAgency}/{nbPlaces}/{kilometers}/{registration}/{capacity}**





#### AGENCES



- renvoie toutes les agences
  - **/agency/get/all**



- renvoie le nombre d'agences
  - **/agency/count**





#### LOCATIONS



- renvoie toutes les locations
  - **/rent/get/all**



- renvoie la location qui correspond à l'id
  - **/rent/get/{idRent}**



- renvoie le nombre de locations
  - **/rent/count**



- ajouter une location
  - **/rent/add/{idVehicle}/{idUser}/{idStartAgency}/{idEndAgency}/{dateStart}/{dateEnd}/{cost}/{kilometers}**



- supprimer une location via l'id
  - **/rent/delete/{idRent}**





#### UTILISATEURS



- renvoie tous les utilisateurs
  - **/user/get/all**



- renvoie l'user qui corrspond à l'id
  - **/user/get/{idUser}**



- renvoie le nombre d'users
  - **/user/count**



- ajoute un nouvel utilisateur
  - **/user/add/{idType}/{name}/{firstname}/{email}/{password}/{adrRoad}/{adrCity}/{adrPC}/{numTel}**



- supprime un utilisateur par l'id
  - **/user/delete/{id}**



## Sources

Sources utilisées pour le projet :

- Badges de README (état, taille) : [shields.io](<https://shields.io/>)
- [PHPStorm ](<https://www.jetbrains.com/phpstorm/>)
- [PHPMyAdmin](<https://www.phpmyadmin.net/>)
- [DOC SQL](<https://sql.sh/>)
- [RedBean](<https://redbeanphp.com/index.php>)
- [Composer ](<https://getcomposer.org/>) (update des dépendances)
- [Packagist](<https://packagist.org/>) (dépendances)
- [SLIM](<https://packagist.org/packages/slim/slim>)



2019 - Ratelade William
