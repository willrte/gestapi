<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 20/12/18
 * Time: 14:25
 */

namespace Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class Training
{
    public static function getAllFormations(Request $request, Response $response, array $args){
        $allFormations = \Models\Training::getAllFormations();
        return $response->withJson(["formation" => $allFormations]);
    }
}