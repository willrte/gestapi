<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 06/12/18
 * Time: 14:48
 */

namespace Models;

use RedBeanPHP\R as R;

class Employee
{
    /**
     * @param $idEmployee
     * @return array
     * Retourne les informations
     */
    public function getEmployee($idEmployee)
    {
        return R::getAll('call getEmployee(?);',[$idEmployee]);
    }

    public function getVisitors(){
        return R::getAll('call getAllVisitor();');
    }

    public function getReport(){
        return R::getAll('call getVisites();');
    }

    public function deleteReport($idReport){
        return R::getAll('call deleteVisite(?);',[$idReport]);
    }

    public function getAllEmployee(){
        return R::getAll('call getAllEmployee();');
    }
}