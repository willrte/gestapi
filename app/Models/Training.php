<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 20/12/18
 * Time: 14:26
 */

namespace Models;

use RedBeanPHP\R as R;

class Training
{
    public function getAllFormations()
    {
        return R::getAll('call getAllFormations();');
    }
}