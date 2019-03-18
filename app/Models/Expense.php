<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 02/12/18
 * Time: 21:37
 */

namespace Models;

use RedBeanPHP\R as R;


class Expense
{
    /**
     * @return array
     * Permet d'obtenir les agences
     */
    public function getAllExpenses()
    {
        return R::getAll('call ps_find_all_costs();');

    }


}