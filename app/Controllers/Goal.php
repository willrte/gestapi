<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 12/12/18
 * Time: 21:52
 */

namespace Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


class Goal
{
    public static function getDetailsMissionEmployee(Request $request, Response $response, array $args){
        $mission = \Models\Goal::getDetailsMissionEmployee($args['idEmployee']);
        $query = []; foreach ($mission as $aMission){$query += $aMission;}
        return $response->withJson($query);
    }

    public static function getBestVisitors(Request $request, Response $response, array $args){
        $visitors = \Models\Goal::getBestVisitors();
        return $response->withJson(["bestVisitors" => $visitors]);
    }

    public static function getVisitorsWithoutMission(Request $request, Response $response, array $args){
        $visitors = \Models\Goal::getVisitorsWithoutMission();
        return $response->withJson(["visitors" => $visitors]);
    }

    public static function getMissionsMonth(Request $request, Response $response, array $args){
        $missions = \Models\Goal::getMissionsMonth();
        $query = []; foreach ($missions as $aMission){$query += $aMission;}
        return $response->withJson($query);
    }

    public static function getMissionsDay(Request $request, Response $response, array $args){
        $missions = \Models\Goal::getMissionsDay();
        $query = []; foreach ($missions as $aMission){$query += $aMission;}
        return $response->withJson($query);
    }
}
