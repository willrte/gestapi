<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 07/12/18
 * Time: 20:12
 */

namespace Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class Visit
{
    public static function getAllVisit(Request $request, Response $response, array $args){
        $visits = \Models\Visit::getAllVisit();
        return $response->withJson(['visits'=>$visits]);
    }

    public static function getVisitPerDay(Request $request, Response $response, array $args){
        $employee = \Models\Visit::getVisitPerDay($args['date']);
        $query = []; foreach ($employee as $aEmployee){$query += $aEmployee;}
        return $response->withJson($query);
    }


    public static function getVisiteJour(Request $request, Response $response, array $args){
        $visite = \Models\Visit::getVisiteJour();
        return $response->withJson($visite);
    }

    public static function getVisiteMois(Request $request, Response $response, array $args){
        $visite = \Models\Visit::getVisiteMois();
        return $response->withJson($visite);
    }

    public static function getVisiteAnnee(Request $request, Response $response, array $args){
        $visite = \Models\Visit::getVisiteAnnee();
        return $response->withJson($visite);
    }
}