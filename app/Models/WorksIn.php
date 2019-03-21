<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 13/12/18
 * Time: 16:22
 */

namespace Models;

use RedBeanPHP\R as R;

class WorksIn
{
    public function getListEmployeeWorkInRegion($idRegion)
    {
        return R::getAll('call listEmployeeRegion('.$idRegion.');');
    }

    public function getEmployeesCareer($idEmployee)
    {
        return R::getAll('call getEmployeesCareer('.$idEmployee.');');
    }
}