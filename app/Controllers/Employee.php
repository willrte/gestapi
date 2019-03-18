<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 06/12/18
 * Time: 14:47
 */

namespace Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class Employee
{
    public static function getEmployee(Request $request, Response $response, array $args){
        $employee = \Models\Employee::getEmployee($args['idEmployee']);
        $query = []; foreach ($employee as $aEmployee){$query += $aEmployee;}
        return $response->withJson($query);
    }

    public static function getVisitor(Request $request, Response $response, array $args){
        $visitor = \Models\Employee::getVisitors();
        return $response->withJson(["visitor" => $visitor]);
    }

    public static function getReport(Request $request, Response $response, array $args){
        $report = \Models\Employee::getReport();
        return $response->withJson($report);
    }

    public static function deleteReport(Request $request, Response $response, array $args){
        $report = \Models\Employee::deleteReport($args['idReport']);
        return $response->withJson($report);
    }

    public static function getAllEmployee(Request $request, Response $response, array $args){
        $allEmployee = \Models\Employee::getAllEmployee();
        return $response->withJson(["employee" => $allEmployee]);
    }

}