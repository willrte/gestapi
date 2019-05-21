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
    public static function getOneUser(Request $request,Response $response,  array $args){
        $user = \Models\User::getOneUser($args['idUser']);

        return $response->withJson(['user'=>$user]);

    }
    public static function getUsersCount($request, $response, $args){
        $user = \Models\User::getUsersCount();
        return $response->withJson(["user" => $user]);
    }
    public static function addUser(Request $request,Response $response,  array $args){
        $user = \Models\User::addUser($args['idType'],$args['name'],$args['firstname'],$args['email'],$args['password'],$args['adrRoad'],
            $args['adrCity'],$args['adrPC'],$args['numTel']);

        return $response->withJson(['user'=>$user]);

    }
    public static function deleteUser(Request $request,Response $response,  array $args){
        $user = \Models\User::deleteUser($args['id']);

        return $response->withJson(['user'=>$user]);

    }
    public static function updateUser(Request $request,Response $response,  array $args){
        $user = \Models\User::updateUser($args['idType'],$args['name'],$args['firstname'],$args['email'],$args['password'],$args['adrRoad'],
            $args['adrCity'],$args['adrPC'],$args['numTel'],$args['id']);
//$idType,$name,$firstname,$email,$password,$adrRoad,$adrCity,$adrPC,$numTel,$id
        return $response->withJson(['user'=>$user]);

    }

}

