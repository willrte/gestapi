<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 06/12/18
 * Time: 16:02
 */

namespace Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


class Pratitionner
{
    public static function getPraticien(Request $request, Response $response, array $args){
        $pratitionner = \Models\Pratitionner::getPraticien($args['idPratitionner']);
        $query = []; foreach ($pratitionner as $aPratitionner){$query += $aPratitionner;}
        return $response->withJson($query);
    }

    public static function getAllPractitionner(Request $request, Response $response, array $args){
        $pratitionners = \Models\Pratitionner::getAllPractitionner();
        return $response->withJson(["praticiens"=>$pratitionners]);
    }
}