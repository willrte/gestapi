<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 23/02/19
 * Time: 18:03
 */

namespace Models;

use RedBeanPHP\R as R;

class Leave
{
    public function getLeavesMonth()
    {
        return R::getAll('call getLeavesMonth();');
    }
}