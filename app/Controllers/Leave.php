<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 23/02/19
 * Time: 18:03
 */

namespace Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class Leave
{

    public static function getLeavesMonth(Request $request, Response $response, array $args){
        $leaves = \Models\Leave::getLeavesMonth();
        $query = []; foreach ($leaves as $aLeave){$query += $aLeave;}
        return $response->withJson($query);
    }

}