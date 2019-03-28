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
    public function getAgencyCount(){
        return R::getAll('call getAgencyCount();');
    }
    public function addRent($idVehicle, $idUser, $idStartAgency, $idEndAgency, $dateSart, $dateEnd, $cost, $kilometers)
    {
        return R::exec('INSERT INTO `rent` (`idVehicle`,`idUser`, `idStartAgency`, `idEndAgency`, `dateStart`, `dateEnd`, `cost`, `kilometers`) 
        VALUES (NULL,?,?,?,?,?,?,?,?);', [$idVehicle, $idUser, $idStartAgency, $idEndAgency, $dateSart, $dateEnd, $cost, $kilometers]);
    }
}
