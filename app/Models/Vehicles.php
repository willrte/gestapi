<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 18/03/19
 * Time: 16:16
 */

namespace Models;

use RedBeanPHP\R as R;

class Vehicles
{

    public function getAllVehicles(){
        return R::getAll('call getAllVehicles();');
    }
    public function getVehicleSearch($idColor,$idCategory,$idBrand ){
        $query = 'SELECT vehicle.id,vehicle.model, vehicle.nbPlaces, vehicle.kilometers, vehicle.registration, vehicle.capacity, vehicleColor.libelle, vehicleColor.id, vehicleCategory.libelle, vehicleBrand.libelle
                  FROM vehicle, vehicleColor, vehicleBrand, vehicleCategory
                  WHERE vehicle.idColor = vehicleColor.id AND vehicle.idBrand = vehicleBrand.id
                  AND vehicle.idCategory = vehicleCategory.id';
        if ($idColor != 0){
            $query.= ' AND vehicleColor.id ='.$idColor;
        }
        if ($idCategory != 0){
            $query.= ' AND vehicleCategory.id ='.$idCategory;
        }
        if ($idBrand != 0){
            $query.= ' AND vehicleBrand.id ='.$idBrand;
        }
//        var_dump($query);
//        exit();
        return R::getAll($query);
        //return R::getAll('CALL getVehicleSearchFull(?,?,?);', [$idColor,$idCategory,$idBrand]);

    }

}