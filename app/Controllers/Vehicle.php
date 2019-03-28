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

class Vehicle
{
    public static function getAllVehicles($request, $response, $args){
        $vehicle = \Models\Vehicle::getAllVehicles();
        return $response->withJson(["vehicle" => $vehicle]);
    }
    public static function getOneVehicle(Request $request,Response $response,  array $args){
    $vehicle = \Models\Vehicle::getOneVehicle($args['idVehicle']);

    return $response->withJson(['vehicle'=>$vehicle]);

    }

    public static function getVehiclesCount($request, $response, $args){
        $vehicle = \Models\Vehicle::getVehiclesCount();
        return $response->withJson(["vehicle" => $vehicle]);
    }

    public static function getVehicleSearch(Request $request,Response $response,  array $args)
    {
        $vehicle = \Models\Vehicle::getVehicleSearch($args['idColor'],$args['idCategory'],$args['idBrand'],$args['kilometers']);
        return $response->withJson(['vehicles'=>$vehicle]);
    }

    public static function addVehicle(Request $request,Response $response,  array $args){
        $vehicle = \Models\Vehicle::addVehicle($args['idBrand'],$args['model'],$args['idCategory'],$args['idColor'],$args['idAgency'],$args['nbPlaces'],
            $args['kilometers'],$args['registration'],$args['capacity']);

        return $response->withJson(['vehicle'=>$vehicle]);

    }
    public static function deleteVehicle(Request $request,Response $response,  array $args){
        $vehicle = \Models\Vehicle::deleteVehicle($args['idVehicle']);

        return $response->withJson(['vehicle'=>$vehicle]);

    }
}
