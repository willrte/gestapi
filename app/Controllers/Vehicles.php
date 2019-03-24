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

class Vehicles
{
    public static function getAllVehicles($request, $response, $args){
        $vehicle = \Models\Vehicles::getAllVehicles();
        return $response->withJson(["vehicle" => $vehicle]);
    }

    public static function getVehiclesCount($request, $response, $args){
        $vehicle = \Models\Vehicles::getVehiclesCount();
        return $response->withJson(["vehicle" => $vehicle]);
    }

    public static function getVehicleSearch(Request $request,Response $response,  array $args)
    {
        $vehicle = \Models\Vehicles::getVehicleSearch($args['idColor'],$args['idCategory'],$args['idBrand']);
        return $response->withJson(['vehicles'=>$vehicle]);

    }
}
