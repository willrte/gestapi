<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 22/11/18
 * Time: 16:42
 */

namespace Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class Expense
{
    /**
     * @param Request $request
     * @param Response $response
     * @param array $args
     * @return mixed
     * Execute la méthode getAllAgency() et retourne le resultat en Json
     */
    public static function getAllExpenses($request, $response, $args)
    {

        $costs = \Models\Expense::getAllExpenses();

        return $response->withJson(['costs'=>$costs]);

    }
}