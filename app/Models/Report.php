<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 10/12/18
 * Time: 16:57
 */

namespace Models;
use RedBeanPHP\R as R;

class Report
{
    public function getLastReport(){
        return R::getAll('call getLastReport();');
    }
}