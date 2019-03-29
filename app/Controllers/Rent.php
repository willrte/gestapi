<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 18/03/19
 * Time: 15:10
 */

namespace Controllers;


use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class Rent
{
    public static function getAllRents($request, $response, $args){
        $rent = \Models\Rent::getAllRents();
        return $response->withJson(["rent" => $rent]);
    }
    public static function getOneRent(Request $request,Response $response,  array $args){
        $rent = \Models\Rent::getOneRent($args['idRent']);

        return $response->withJson(['rent'=>$rent]);

    }
    public static function getRentCount($request, $response, $args){
        $rent = \Models\Rent::getRentCount();
        return $response->withJson(["rent" => $rent]);
    }

    public static function addRent(Request $request,Response $response,  array $args){
        $rent = \Models\Rent::addRent($args['idVehicle'],$args['idUser'],$args['idStartAgency'],
            $args['idEndAgency'],$args['dateStart'],$args['dateEnd'],
            $args['cost'],$args['kilometers']);

        return $response->withJson(['rent'=>$rent]);
    }
    public static function deleteRent(Request $request,Response $response,  array $args){
        $rent = \Models\Rent::deleteRent($args['idRent']);

        return $response->withJson(['rent'=>$rent]);

    }
}
