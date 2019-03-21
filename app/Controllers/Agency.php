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

class Agency
{
    public static function getAllAgency($request, $response, $args){
        $agency = \Models\Agency::getAllAgency();
        return $response->withJson(["agency" => $agency]);
    }
}
