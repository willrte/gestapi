<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 22/11/18
 * Time: 16:09
 */

namespace Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Firebase\JWT\JWT;

define('DOC_ROOT_PATH', $_SERVER['DOCUMENT_ROOT'] . '/');
require DOC_ROOT_PATH . '../html/gestapi/app/Parameters/version.php';


class Connexion
{

    public static function isConnected(Request $request, Response $response, array $args)
    {
        $account = \Models\Connexion::isConnected($args['username'], $args['password']);
        return $response->withJson($account);
    }

    public static function getRights(Request $request, Response $response, array $args)
    {
        $right = \Models\Connexion::getRights($args['username'], $args['password']);
        $query = [];
        foreach ($right as $aRight) {
            $query += $aRight;
        }
        return $response->withJson($query);
    }

    public static function getIdFromConnectedUser(Request $request, Response $response, array $args)
    {
        $user = \Models\Connexion::getIdFromConnectedUser($args['username'], $args['password']);
        $query = [];
        foreach ($user as $aUser) {
            $query += $aUser;
        }
        return $response->withJson($query);
    }


    public static function home()
    {
        $version = '3.2';
        echo('
<!DOCTYPE html>
<html>
   <head>
      <title>Gestapi Home</title>
   </head>

   <body>
      <h1 style="text-align:center; font-family: Arial" >GESTAPI</h1>
      <p  style="text-align:center; font-family: Arial" >H O M E</p>
      <p  style="text-align:center; font-family: Arial" >Gestapi v' . $version . '</p>
   </body>
</html>
');


//        $json = file_get_contents('http://localhost/gestapi/vehicle/count');
//
//        $data = json_decode($json,true);
//
//        $resultatvehicles = $data['vehicle'][0];
//
//        echo $resultatvehicles['nbVehicles'];


    }

}
