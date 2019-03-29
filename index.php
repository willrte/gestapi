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













// ------------------------------------------ Modèles de routes ---------------------------------------

/**
 * Gestion des connexions


// renvoie un booleen confirmant ou non s'il est connecté
$app->get('/connexion/{username}/{password}', \Controllers\Connexion::class.':isConnected');

// renvoie les droits de l'utilisateur
$app->get('/get/right/{username}/{password}',\Controllers\Connexion::class.':getRights');

//revoie l'id de l'utilisateur (Outil)
$app->get('/get/user/{username}/{password}',\Controllers\Connexion::class.':getIdFromConnectedUser');


/**
 * Gestion des coûts

// renvoie tous les frais
$app->get('/get/costs/all',\Controllers\Expense::class.':getAllExpenses');

/**
 * Visite


// renvoie toute les visites à éffectuer
$app->get('/get/visit/all',\Controllers\Visit::class.':getAllVisit');

// nombre de visites par jour
$app->get('/get/visit/{date}', \Controllers\Visit::class.':getVisitPerDay');

// nombre de visites par Region
$app->get('/get/visit/region/{idRegion}', \Controllers\Visit::class.':getVisitPerRegion');

// route revoyant le nombre de visites du jour, du mois, de l'annee
$app->get('/get/nbvisit/today',\Controllers\Visit::class.':getVisiteJour');

$app->get('/get/nbvisit/lastmonth',\Controllers\Visit::class.':getVisiteMois');

$app->get('/get/nbvisit/lastyear',\Controllers\Visit::class.':getVisiteAnnee');

/**
 *
 * Médicament


$app->get('/get/drug/family/all',\Controllers\Drug::class.':getAllDrugFamily');

$app->get('/get/drug/{idFamily}',\Controllers\Drug::class.':getAllDrugByFamilyId');

/**
 * Employé

$app->get('/get/employee/{idEmployee}',\Controllers\Employee::class.':getEmployee');

$app->get('/get/list/employee',\Controllers\Employee::class.':getAllEmployee');

// renvoie les employées d'un secteur
$app->get('/get/list/employee/region/{idRegion}',  \Controllers\WorksIn::class.':getListEmployeeWorkInRegion');

// retourne la carrière d'un employé
$app->get('/get/career/employee/{idEmployee}',  \Controllers\WorksIn::class.':getEmployeesCareer');

/**
 * Mission / objectif

$app->get('/get/employee/{idEmployee}/mission',\Controllers\Goal::class.':getDetailsMissionEmployee');

// Missions effectuées par mois
$app->get('/get/missions/month',\Controllers\Goal::class.':getMissionsMonth');

// Missions effectuées par jour
$app->get('/get/missions/day',\Controllers\Goal::class.':getMissionsDay');

/**
 * Liste des formations dispo avant la date d'ajourd'hui


$app->get('/get/list/formations', \Controllers\Training::class.':getAllFormations');

/**
 * Visiteurs médicaux


$app->get('/get/list/visiteursMed', \Controllers\Employee::class.':getVisitor');

$app->get('/get/bestVisitors', \Controllers\Goal::class.':getBestVisitors');

$app->get('/get/visitorsWithoutMission', \Controllers\Goal::class.':getVisitorsWithoutMission');
/**


$app->get('/get/list/praticiens', \Controllers\Pratitionner::class.':getAllPractitionner');

/**
 * Report


// renvoie tous les compte-rendus
$app->get('/get/report/all',\Controllers\Report::class.':getAllReport');

// dernier compte-rendu effectué
$app->get('/get/report/all/lastReport',\Controllers\Report::class.':getLastReport');

/**
 * Leave

$app->get('/get/leave/month',\Controllers\Leave::class.':getLeavesMonth');
*/






//--------------------------------------- Execution des routes -----------------------------------------------

/**
 * Exécution de la route en fonction de l'url
 */
$app->run();

/**
 * Déconnexion a la base de donnée
 */
R::close();
