<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 06/12/18
 * Time: 16:03
 */

namespace Models;

use RedBeanPHP\R as R;

class Pratitionner
{
    public function getPraticien($idPraticien)
    {
        return R::getAll('call getPraticien(?);', [$idPraticien]);
    }

    public function getAllPractitionnerl()
    {
        return R::getAll('call getAllPractitionner();');
    }
}