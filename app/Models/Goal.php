<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 12/12/18
 * Time: 21:53
 */

namespace Models;

use RedBeanPHP\R as R;

class Goal
{
    /**
     * CREATE DEFINER=`usersio`@`%` PROCEDURE `getDetailsMissionEmployee`(IN i_idEmployee INT)
    BEGIN
    SELECT DISTINCT Employee.nameEmployee, Goal.numberVisitGoal, Goal.amountSaleGoal FROM Goal, Employee
    WHERE Goal.idEmployee_Set = Employee.idEmployee
    AND Goal.idEmployee = i_idEmployee;
    END
     */
    public function getDetailsMissionEmployee($idEmployee)
    {
        return R::getAll('call getDetailsMissionEmployee(?);',[$idEmployee]);
    }

    public function getBestVisitors()
    {
        return R::getAll('call getBestVisitors();');
    }

    public function getVisitorsWithoutMission()
    {
        return R::getAll('call getVisitorsWithoutMission();');
    }

    public function getMissionsMonth()
    {
        return R::getAll('call getMissionsMonth();');
    }

    public function getMissionsDay()
    {
        return R::getAll('call getMissionsDay();');
    }

}
