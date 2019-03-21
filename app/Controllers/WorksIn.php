<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 13/12/18
 * Time: 16:24
 */

namespace Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class WorksIn
{
    public static function getListEmployeeWorkInRegion(Request $request, Response $response, array $args){
        $listEmployeRegion = \Models\WorksIn::getListEmployeeWorkInRegion($args['idRegion']);
        return $response->withJson(['listEmployeRegion'=>$listEmployeRegion]);
    }

    public static function getEmployeesCareer(Request $request, Response $response, array $args){
        $career = \Models\Goal::getEmployeesCareer($args['idEmployee']);
        $query = []; foreach ($career as $aCareer){$query += $aCareer;}
        return $response->withJson($query);
    }
}