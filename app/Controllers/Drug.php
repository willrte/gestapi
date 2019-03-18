<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 10/12/18
 * Time: 14:52
 */

namespace Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class Drug
{
    public static function getAllDrugFamily(Request $request, Response $response, array $args){
        $drugsFamily = \Models\Drug::getAllDrugFamily();
        return $response->withJson(['families'=>$drugsFamily]);
    }

    public static function getAllDrugByFamilyId(Request $request, Response $response, array $args){
        $drugsByFamily = \Models\Drug::getAllDrugByFamilyId($args['idFamily']);
        return $response->withJson(['drugs'=>$drugsByFamily]);
    }
}