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

class User
{
    public static function getAllUsers($request, $response, $args){
        $user = \Models\User::getAllUsers();
        return $response->withJson(["user" => $user]);
    }
    public static function getUsersCount($request, $response, $args){
        $user = \Models\User::getUsersCount();
        return $response->withJson(["user" => $user]);
    }
}
