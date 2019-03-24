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
}
