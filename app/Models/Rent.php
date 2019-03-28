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

    public function addRent($idVehicle, $idUser, $idStartAgency, $idEndAgency, $dateSart, $dateEnd, $cost, $kilometers)
    {
        return R::exec('INSERT INTO `rent` (`id`, `idVehicle`, `idUser`, `idStartAgency`, `idEndAgency`, `dateStart`, `dateEnd`, `cost`, `kilometers`)
         VALUES (NULL, ?,?,?,?,?,?,?,?);', [$idVehicle, $idUser, $idStartAgency, $idEndAgency, $dateSart, $dateEnd, $cost, $kilometers]);
    }
    public function deleteRent($idRent){
        return R::exec('DELETE FROM rent WHERE id = ?;',[$idRent]);
    }
}
