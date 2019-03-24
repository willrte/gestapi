<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 18/03/19
 * Time: 16:16
 */

namespace Models;

use RedBeanPHP\R as R;

class Agency
{

    public function getAllAgency(){
        return R::getAll('call getAllAgency();');
    }
    public function getAgencyCount(){
        return R::getAll('call getAgencyCount();');
    }
}
