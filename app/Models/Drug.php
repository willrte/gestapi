<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 10/12/18
 * Time: 14:52
 */

namespace Models;

use RedBeanPHP\R as R;

class Drug
{
    public function getAllDrugFamily()
    {
        return R::getAll('call getAllDrugFamily();');
    }

    public function getAllDrugByFamilyId($idFamily){
        return R::getAll('call getAllDrugByFamilyId(?);',[$idFamily]);
    }
}