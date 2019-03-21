<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 10/12/18
 * Time: 17:23
 */

namespace Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class Report
{
    public static function getLastReport(Request $request, Response $response){
        $report = \Models\Report::getLastReport();
        return $response->withJson($report);
    }
}