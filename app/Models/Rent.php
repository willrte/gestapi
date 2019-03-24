<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 18/03/19
 * Time: 16:16
 */

namespace Models;

use RedBeanPHP\R as R;

class Rent
{

    public function getAllRents(){
        return R::getAll('call getAllRents();');
    }
}
