<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 07/12/18
 * Time: 20:15
 */

namespace Models;

use RedBeanPHP\R as R;

class Visit
{
    public function getAllVisit()
    {
        return R::getAll('call getAllVisit();');
    }

    public function getVisitPerDay($date)
    {
        return R::getAll('call nbVisitPerDay(?);', [$date]);
    }

    public function getVisiteJour()
    {
        return R::getAll('call getVisiteJour()');
    }

    public function getVisiteMois(){
        return R::getAll('call getVisiteMois()');
    }

    public function getVisiteAnnee(){
        return R::getAll('call getVisiteAnnee()');
    }
}