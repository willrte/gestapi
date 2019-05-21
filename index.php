<?php
chdir(__DIR__);

//require './vendor/autoload.php';
//include './app/www/route.php';





require './vendor/autoload.php';

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \RedBeanPHP\R as R;

/**
 * Connexion a la base de donnée en fonction des paramètres;
 */
R::setup(\Parameters\DBConnect::DBCONNECTDSN,\Parameters\DBConnect::DBCONNECTUSERNAME,Parameters\DBConnect::DBCONNECTPASSWORD);

$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true
    ]
]);
$config['displayErrorDetails'] = true;

/**
 * home
 */

$app->get('/', \Controllers\Connexion::class.':home');




/**
 * Gestion des véhicules
 */

// renvoie tous les véhicules
$app->get('/vehicle/get/all', \Controllers\Vehicle::class.':getAllVehicles');

//renvoie le vehicule qui correspond à l'id
$app->get('/vehicle/get/{idVehicle}', \Controllers\Vehicle::class.':getOneVehicle');

//renvoie le nombre de véhicules
$app->get('/vehicle/count', \Controllers\Vehicle::class.':getVehiclesCount');

// renvoie le véhicule spécifique à la recherche
$app->get('/vehicle/get/{idColor}/{idCategory}/{idBrand}/{kilometers}',\Controllers\Vehicle::class.':getVehicleSearch');

//supprime un vehicule par l'id
$app->get('/vehicle/delete/{idVehicle}', \Controllers\Vehicle::class.':deleteVehicle');

//ajoute un nouveau vehicule
$app->get('/vehicle/add/{idBrand}/{model}/{idCategory}/{idColor}/{idAgency}/{nbPlaces}/{kilometers}/{registration}/{capacity}', \Controllers\Vehicle::class.':addVehicle');

//met a jour les kilomètres du vehicule en fonction de l'id
$app->get('/vehicle/update/{id}/{kilometers}', \Controllers\Vehicle::class.':updateVehicle');


/**
 * Gestion des agences
 */

// renvoie toutes les agences
$app->get('/agency/get/all', \Controllers\Agency::class.':getAllAgency');

//renvoie le nombre d'agences
$app->get('/agency/count', \Controllers\Agency::class.':getAgencyCount');




/**
 * Gestion des locations
 */

//renvoie toutes les locations
$app->get('/rent/get/all', \Controllers\Rent::class.':getAllRents');

//renvoie l'user qui corrspond à l'id
$app->get('/rent/get/{idRent}', \Controllers\Rent::class.':getOneRent');

//renvoie le nombre de locations
$app->get('/rent/count', \Controllers\Rent::class.':getRentCount');

//ajouter une location
$app->get('/rent/add/{idVehicle}/{idUser}/{idStartAgency}/{idEndAgency}/{dateStart}/{dateEnd}/{cost}/{kilometers}', \Controllers\Rent::class.':addRent');

//supprimer une location via l'id
$app->get('/rent/delete/{idRent}', \Controllers\Rent::class.':deleteRent');




/**
 * Gestion des utilisateurs
 */

//renvoie tous les utilisateurs
$app->get('/user/get/all', \Controllers\User::class.':getAllUsers');

//renvoie l'user qui corrspond à l'id
$app->get('/user/get/{idUser}', \Controllers\User::class.':getOneUser');

//renvoie le nombre d'users
$app->get('/user/count', \Controllers\User::class.':getUsersCount');

//ajoute un nouvel utilisateur
$app->get('/user/add/{idType}/{name}/{firstname}/{email}/{password}/{adrRoad}/{adrCity}/{adrPC}/{numTel}', \Controllers\User::class.':addUser');

//supprime un utilisateur par l'id
$app->get('/user/delete/{id}', \Controllers\User::class.':deleteUser');

//met a jour le mot de passe et l'email de l'user en fonction de l'id
$app->get('/user/update/{idType}/{name}/{firstname}/{email}/{password}/{adrRoad}/{adrCity}/{adrPC}/{numTel}/{id}', \Controllers\User::class.':updateUser');




//localhost/gestapi/user/update/2/Dupond/Claude/dupond.claude@gmail.com/dupclaude/12ruedestulipes/Paris/95000/0231455685/2








/**
 * Exécution de la route en fonction de l'url
 */
$app->run();

/**
 * Déconnexion a la base de donnée
 */
R::close();
